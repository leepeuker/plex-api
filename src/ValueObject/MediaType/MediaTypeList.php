<?php declare(strict_types=1);

namespace PlexApi\ValueObject\MediaType;

use PlexApi\ValueObject\AbstractList;

abstract class MediaTypeList extends AbstractList
{
    public static function createFromArrayWithType(array $data, string $type) : MediaTypeList
    {
        switch ($type) {
            case Show::TYPE:
                return ShowTypeList::createFromArray($data);
            case Movie::TYPE:
                return MovieTypeList::createFromArray($data);
            default:
                throw new \DomainException('Unknown media type: ' . $type);
        }
    }
}