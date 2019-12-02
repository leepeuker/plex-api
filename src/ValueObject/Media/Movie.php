<?php declare(strict_types=1);

namespace PlexApi\ValueObject\Media;

class Movie
{
    public const TYPE = 'movie';

    private $key;

    private $title;

    private function __construct(string $title, string $key)
    {
        $this->title = $title;
        $this->key   = $key;
    }

    public static function create(string $title, string $key) : self
    {
        return new self($title, $key);
    }

    public static function createFromArray(array $element) : self
    {
        return new self((string)$element['title'], (string)$element['key']);
    }

    public function getKey() : string
    {
        return $this->key;
    }

    public function getTitle() : string
    {
        return $this->title;
    }
}