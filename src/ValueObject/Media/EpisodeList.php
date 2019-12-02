<?php declare(strict_types=1);

namespace PlexApi\ValueObject\Media;

class EpisodeList extends MediaList
{
    public static function create() : self
    {
        return new self();
    }

    public static function createFromArray(array $episodes) : self
    {
        $list = self::create();

        foreach ($episodes as $episode) {
            $list->add(Episode::createFromArray((array)$episode));
        }

        return $list;
    }

    public function add(Episode $episode) : void
    {
        $this->data[] = $episode;
    }
}