<?php

namespace Jmurphy\LaravelPascal;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jmurphy\LaravelPascal\Skeleton\SkeletonClass
 */
class LaravelPascalFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-pascal';
    }
}
