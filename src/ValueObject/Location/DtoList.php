<?php declare(strict_types=1);

namespace PlexApi\ValueObject\Location;

use PlexApi\ValueObject\AbstractList;

/**
 * @method Dto[] getIterator() : \ArrayIterator
 * @psalm-suppress ImplementedReturnTypeMismatch
 */
class DtoList extends AbstractList
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
            $list->add(Dto::createFromArray((array)$section));
        }

        return $list;
    }

    public function add(Dto $section) : void
    {
        $this->data[] = $section;
    }
}