<?php declare(strict_types=1);

namespace PlexApi\ValueObject\Section;

use PlexApi\ValueObject;

class MediaContainer extends ValueObject\MediaContainer
{
    private DirectoryList $directories;

    private string $title1;

    private function __construct(
        int $size,
        bool $allowSync,
        string $identifier,
        string $mediaTagPrefix,
        int $mediaTagVersion,
        string $title1,
        DirectoryList $directories
    ) {
        parent::__construct($size, $allowSync, $identifier, $mediaTagPrefix, $mediaTagVersion);

        $this->title1 = $title1;
        $this->directories = $directories;
    }

    public static function createFromArray(array $data) : self
    {
        return new self(
            (int)$data['size'],
            (bool)$data['allowSync'],
            (string)$data['identifier'],
            (string)$data['mediaTagPrefix'],
            (int)$data['mediaTagVersion'],
            (string)$data['title1'],
            DirectoryList::createFromArray((array)$data['Directory']),
        );
    }

    public function getDirectories() : DirectoryList
    {
        return $this->directories;
    }

    public function getTitle1() : string
    {
        return $this->title1;
    }
}