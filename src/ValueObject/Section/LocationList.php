<?php declare(strict_types=1);

namespace PlexApi\ValueObject\Section;

use PlexApi\ValueObject\AbstractList;

/**
 * @method Location[] getIterator() : \ArrayIterator
 * @psalm-suppress ImplementedReturnTypeMismatch
 */
class LocationList extends AbstractList
{
    public static function create() : self
    {
        return new self();
    }

    public static function createFromArray(array $data) : self
    {
        $list = self::create();

        /**
         * @psalm-suppress MixedAssignment
         */
        foreach ($data as $location) {
            $list->add(Location::createFromArray((array)$location));
        }

        return $list;
    }

    public function add(Location $location) : void
    {
        $this->data[] = $location;
    }
}