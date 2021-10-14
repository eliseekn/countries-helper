<?php

namespace Eliseekn\CountriesHelper;

use PragmaRX\Countries\Package\Countries;

class CountriesHelper
{
    private static function getLang()
    {
        return 'name_' . config('countries-helper.lang');
    }

    /**
     * Get all countries by name
     *
     * @return array
     */
    public static function getAll(): array
    {
        $countries = new Countries();

        return $countries->all()->map(function ($country) use ($countries) {
                $country_name = $countries->where('cca2', $country->cca2)->first()[self::getLang()];

                if (!empty($country_name)) {
                    return [$country->cca2 => utf8_decode($country_name)];
                }
            })
            ->values()
            ->toArray();
    }
    
    /**
     * Get country name by common country assessment 2
     *
     * @param  string $cca2
     * @return string
     */
    public static function getCountryNameByCCA2(string $cca2): string
    {
        $countries = new Countries();
        return utf8_decode($countries->where('cca2', $cca2)->first()[self::getLang()]);
    }
    
    /**
     * Get country name by common country assessment 3
     *
     * @param  string $cca3
     * @return string
     */
    public static function getCountryNameByCCA3(string $cca3): string
    {
        $countries = new Countries();
        return utf8_decode($countries->where('cca3', $cca3)->first()[self::getLang()]);
    }
}
