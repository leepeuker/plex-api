<?php declare(strict_types=1);

namespace PlexApi\ValueObject\MediaType;

class ShowList extends MediaTypeList
{
    public static function create() : self
    {
        return new self();
    }

    public static function createFromArray(array $data) : self
    {
        $list = self::create();

        foreach ($data as $show) {
            $list->add(Show::createFromArray((array)$show));
        }

        return $list;
    }

    public function add(Show $show) : void
    {
        $this->data[] = $show;
    }
}