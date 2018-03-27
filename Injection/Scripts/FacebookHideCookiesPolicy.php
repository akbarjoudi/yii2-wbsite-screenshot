<?php

namespace aki\screenshot\Scripts;

use aki\screenshot\LocalPath;

class FacebookHideCookiesPolicy extends LocalPath
{
    public function __construct()
    {
        $path = __DIR__ . '/../../../scripts/facebook-hide-cookies-policy.js';

        parent::__construct($path);
    }
}
