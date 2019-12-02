<?php declare(strict_types=1);

namespace PlexApi\ValueObject;

class MediaList extends AbstractList
{
    public static function create() : self
    {
        return new self();
    }

    public static function createFromArray(array $allMedia) : self
    {
        $list = self::create();
        foreach ($allMedia as $media) {
            $list->add(Media::createFromArray((array)$media));
        }

        return $list;
    }

    public function add(Media $media) : void
    {
        $this->data[] = $media;
    }
}