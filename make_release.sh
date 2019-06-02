#!/bin/bash

set -e

export version_increment="$1"

if [[ "$version_increment" != @(major|minor|revision) ]]
then
    echo 'Missing version increment type: major, minor or revision.' 1>&2
    exit 1
fi

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null 2>&1 && pwd )"

cd "$DIR"

if ! [[ -z $(git status -s) ]]
then
    echo 'There are uncommited changes. Stash or commit before continuing.' 1>&2
    exit 1
fi

git checkout release
git pull

export current_version="$(git describe --abbrev=0)"
next_version="$(php -r '
    $incrementIndex = array_flip(["major", "minor", "revision"])[getenv("version_increment")];
    $version = explode(".", getenv("current_version"));
    $version[$incrementIndex]++;
    for ($i = $incrementIndex + 1; $i < count($version); $i++) {
        $version[$i] = 0;
    }
    echo implode(".", $version);
')"

git reset --hard origin/master
git reset origin/release
php generate.php
git add -f src/Client/ src/Requests/ src/Responses/
git add -A
git commit -m 'Release'
git tag -a "$next_version" -m 'Release'
