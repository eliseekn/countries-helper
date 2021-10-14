<?php

namespace Eliseekn\CountriesHelper;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Eliseekn\CountriesHelper\Skeleton\SkeletonClass
 */
class CountriesHelperFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'countries-helper';
    }
}
