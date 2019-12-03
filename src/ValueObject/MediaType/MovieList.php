<?php declare(strict_types=1);

namespace PlexApi\ValueObject\MediaType;

class MovieList extends MediaTypeList
{
    public static function create() : self
    {
        return new self();
    }

    public static function createFromArray(array $data) : self
    {
        $list = self::create();

        foreach ($data as $movie) {
            $list->add(Movie::createFromArray((array)$movie));
        }

        return $list;
    }

    public function add(Movie $movie) : void
    {
        $this->data[] = $movie;
    }
}