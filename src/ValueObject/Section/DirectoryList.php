<?php declare(strict_types=1);

namespace PlexApi\ValueObject\Section;

use PlexApi\ValueObject\AbstractList;

/**
 * @method Directory[] getIterator() : \ArrayIterator
 * @psalm-suppress ImplementedReturnTypeMismatch
 */
class DirectoryList extends AbstractList
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
            $list->add(Directory::createFromArray((array)$section));
        }

        return $list;
    }

    public function add(Directory $section) : void
    {
        $this->data[] = $section;
    }
}