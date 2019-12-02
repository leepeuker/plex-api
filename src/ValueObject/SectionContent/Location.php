<?php declare(strict_types=1);

namespace PlexApi\ValueObject\SectionContent;

class Location
{
    private int $id;

    private string $path;

    private function __construct(int $id, string $path)
    {
        $this->id = $id;
        $this->path = $path;
    }

    public static function createFromArray(array $sections) : self
    {
        return new self(
            (int)$sections['id'],
            (string)$sections['path']
        );
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function getPath() : string
    {
        return $this->path;
    }
}