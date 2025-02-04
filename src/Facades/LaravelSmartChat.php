<?php

namespace BinarCode\LaravelSmartChat\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \BinarCode\LaravelSmartChat\LaravelSmartChat
 */
class LaravelSmartChat extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \BinarCode\LaravelSmartChat\LaravelSmartChat::class;
    }
}
