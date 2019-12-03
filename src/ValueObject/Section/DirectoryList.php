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

    public static function createFromArray(array $data) : self
    {
        $list = self::create();

        /**
         * @psalm-suppress MixedAssignment
         */
        foreach ($data as $directory) {
            $list->add(Directory::createFromArray((array)$directory));
        }

        return $list;
    }

    public function add(Directory $directory) : void
    {
        $this->data[] = $directory;
    }
}