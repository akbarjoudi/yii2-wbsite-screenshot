<?php

namespace aki\screenshot\Scripts;

use aki\screenshot\LocalPath;

class FacebookHideTopBar extends LocalPath
{
    public function __construct()
    {
        $path = __DIR__ . '/../../../scripts/facebook-hide-top-bar.js';

        parent::__construct($path);
    }
}
