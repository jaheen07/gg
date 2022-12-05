<?php
namespace Iox\Locationist\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Iox\Locationist\Location
 */


class Location extends Facade
{
    protected static function getFacadeAccessor():string
    {
        return 'location';
    }    
}