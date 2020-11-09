<?php

declare(strict_types=1);

namespace Eclipxe\SepomexPhp;

use Eclipxe\SepomexPhp\Data\City;
use Eclipxe\SepomexPhp\Data\District;
use Eclipxe\SepomexPhp\Data\Location;
use Eclipxe\SepomexPhp\Data\LocationType;
use Eclipxe\SepomexPhp\Data\State;
use Eclipxe\SepomexPhp\Data\ZipCodeData;

/**
 * Factory, do not include new statements on Eclipxe\SepomexPhp class
 *
 * @access private
 * @package Eclipxe\SepomexPhp
 */
class Factory
{
    /**
     * @param string $zipcode
     * @param Location[] $locations
     * @param District $district
     * @param State $state
     * @return ZipCodeData
     */
    public function newZipCodeData(string $zipcode, array $locations, District $district, State $state): ZipCodeData
    {
        return new ZipCodeData($zipcode, $locations, $district, $state);
    }

    public function newState(int $id, string $name): State
    {
        return new State($id, $name);
    }

    public function newDistrict(int $id, string $name, State $state = null): District
    {
        return new District($id, $name, $state);
    }

    public function newCity(int $id, string $name, State $state = null): City
    {
        return new City($id, $name, $state);
    }

    public function newLocation(
        int $id,
        string $name,
        LocationType $type,
        District $district = null,
        City $city = null
    ): Location {
        return new Location($id, $name, $type, $district, $city);
    }

    public function newLocationType(int $id, string $name): LocationType
    {
        return new LocationType($id, $name);
    }
}
