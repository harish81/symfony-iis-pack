<?php

namespace harish81;


class ConfigCopy
{
    public static function copyConfig()
    {
        copy('vendor/harish81/symfony-iis-pack/public/web.config','public/web.config');
    }
}