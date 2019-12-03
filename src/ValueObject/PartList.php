<?php declare(strict_types=1);

namespace PlexApi\ValueObject;

/**
 * @method Part[] getIterator() : \ArrayIterator
 * @psalm-suppress ImplementedReturnTypeMismatch
 */
class PartList extends AbstractList
{
    public static function create() : self
    {
        return new self();
    }

    public static function createFromArray(array $data) : self
    {
        $list = self::create();

        foreach ($data as $part) {
            $list->add(Part::createFromArray((array)$part));
        }

        return $list;
    }

    public function add(Part $part) : void
    {
        $this->data[] = $part;
    }
}