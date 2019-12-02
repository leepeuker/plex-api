<?php declare(strict_types=1);

namespace PlexApi\ValueObject\Media;

use PlexApi\ValueObject\AbstractList;

abstract class MediaList extends AbstractList
{
    public static function createFromArrayWithType(array $data, string $type) : MediaList
    {
        switch ($type) {
            case Show::TYPE:
                return ShowList::createFromArray($data);
            case Episode::TYPE:
                return EpisodeList::createFromArray($data);
            case Movie::TYPE:
                return MovieList::createFromArray($data);
            default:
                throw new \DomainException('Unknown media type: ' . $type);
        }
    }
}