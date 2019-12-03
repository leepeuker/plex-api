<?php declare(strict_types=1);

namespace PlexApi\ValueObject\MediaType;

use PlexApi\ValueObject\AbstractList;

abstract class MediaTypeList extends AbstractList
{
    public static function createFromArrayAndType(array $data, string $type) : MediaTypeList
    {
        switch ($type) {
            case Show::TYPE:
                return ShowList::createFromArray($data);
            case Movie::TYPE:
                return MovieList::createFromArray($data);
            default:
                throw new \DomainException('Unknown media type: ' . $type);
        }
    }
}