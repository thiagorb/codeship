<?php

namespace Thiagorb\Codeship\Guzzle;

use Http\Adapter\Guzzle6\Client as GuzzleAdapter;

class Factory extends \Thiagorb\Codeship\Factory
{
    public function __construct()
    {
        parent::__construct(GuzzleAdapter::createWithConfig([]), new RequestFactory);
    }
}