<?php declare(strict_types=1);

namespace PlexApi\ValueObject\Media;

class ShowList extends MediaList
{
    public static function create() : self
    {
        return new self();
    }

    public static function createFromArray(array $shows) : self
    {
        $list = self::create();

        foreach ($shows as $show) {
            $list->add(Show::createFromArray((array)$show));
        }

        return $list;
    }

    public function add(Show $show) : void
    {
        $this->data[] = $show;
    }
}