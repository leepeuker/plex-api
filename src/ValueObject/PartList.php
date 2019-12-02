<?php declare(strict_types=1);

namespace PlexApi\ValueObject;

class PartList extends AbstractList
{
    public static function create() : self
    {
        return new self();
    }

    public static function createFromArray(array $movies) : self
    {
        $list = self::create();

        foreach ($movies as $part) {
            $list->add(Part::createFromArray((array)$part));
        }

        return $list;
    }

    public function add(Part $part) : void
    {
        $this->data[] = $part;
    }
}