<?php declare(strict_types=1);

namespace PlexApi\ValueObject\Section;

class MediaContainer
{
    private bool $allowSync;

    private DirectoryList $directories;

    private string $identifier;

    private string $mediaTagPrefix;

    private int $mediaTagVersion;

    private int $size;

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
        $this->size = $size;
        $this->allowSync = $allowSync;
        $this->identifier = $identifier;
        $this->mediaTagPrefix = $mediaTagPrefix;
        $this->mediaTagVersion = $mediaTagVersion;
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

    public function getIdentifier() : string
    {
        return $this->identifier;
    }

    public function getMediaTagPrefix() : string
    {
        return $this->mediaTagPrefix;
    }

    public function getMediaTagVersion() : int
    {
        return $this->mediaTagVersion;
    }

    public function getSize() : int
    {
        return $this->size;
    }

    public function getTitle1() : string
    {
        return $this->title1;
    }

    public function isAllowSync() : bool
    {
        return $this->allowSync;
    }
}