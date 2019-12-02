<?php declare(strict_types=1);

namespace PlexApi\ValueObject\SectionContent;

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

    public static function createFromArray(array $sections) : self
    {
        $list = self::create();

        /**
         * @psalm-suppress MixedAssignment
         */
        foreach ($sections as $section) {
            $list->add(Location::createFromArray((array)$section));
        }

        return $list;
    }

    public function add(Location $section) : void
    {
        $this->data[] = $section;
    }
}