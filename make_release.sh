#!/bin/bash

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null 2>&1 && pwd )"

cd "$DIR"

if ! [[ -z $(git status -s) ]]
then
    echo 'There are uncommited changes. Stash or commit before continuing.' 1>&2
    exit 1
fi

git checkout release
git pull
git reset --hard origin/master
git reset origin/release
php generate.php || exit 1
git add -f src/Client/ src/Requests/ src/Responses/
git add -A
git commit -m 'release'
