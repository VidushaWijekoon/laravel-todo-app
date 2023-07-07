<?php

namespace infractructure\Facades;

use Illuminate\Support\Facades\Facade;
use Infrastructure\Images;

class ImagesFacades extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Images::class;
    }
}
