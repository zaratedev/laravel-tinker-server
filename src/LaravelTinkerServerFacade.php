<?php

namespace Zaratedev\LaravelTinkerServer;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Zaratedev\LaravelTinkerServer\Skeleton\SkeletonClass
 */
class LaravelTinkerServerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laraveltinkerserver';
    }
}
