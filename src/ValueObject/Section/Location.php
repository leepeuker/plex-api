<?php declare(strict_types=1);

namespace PlexApi\ValueObject\Section;

class Location
{
    private int $id;

    private string $path;

    private function __construct(int $id, string $path)
    {
        $this->id = $id;
        $this->path = $path;
    }

    public static function createFromArray(array $data) : self
    {
        return new self(
            (int)$data['id'],
            (string)$data['path']
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