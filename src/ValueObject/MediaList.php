<?php declare(strict_types=1);

namespace PlexApi\ValueObject;

/**
 * @method Media[] getIterator() : \ArrayIterator
 * @psalm-suppress ImplementedReturnTypeMismatch
 */
class MediaList extends AbstractList
{
    public static function create() : self
    {
        return new self();
    }

    public static function createFromArray(array $data) : self
    {
        $list = self::create();
        foreach ($data as $media) {
            $list->add(Media::createFromArray((array)$media));
        }

        return $list;
    }

    public function add(Media $media) : void
    {
        $this->data[] = $media;
    }
}