<?php declare(strict_types=1);

namespace PlexApi\ValueObject\Media;

class Show
{
    public const TYPE = 'show';

    protected $key;

    protected $title;

    protected function __construct(string $title, string $key)
    {
        $this->title = $title;
        $this->key = $key;
    }

    public static function create(string $title, string $key) : self
    {
        return new self($title, $key);
    }

    public static function createFromArray(array $element) : self
    {
        return new self((string)$element['title'], (string)$element['key']);
    }

    protected function getKey() : string
    {
        return $this->key;
    }

    protected function getTitle() : string
    {
        return $this->title;
    }
}