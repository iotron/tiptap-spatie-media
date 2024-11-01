<?php

namespace Iotronlab\TiptapSpatieMedia\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Iotronlab\TiptapSpatieMedia\TiptapSpatieMedia
 */
class TiptapSpatieMedia extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Iotronlab\TiptapSpatieMedia\TiptapSpatieMedia::class;
    }
}
