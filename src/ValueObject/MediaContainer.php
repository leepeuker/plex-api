<?php declare(strict_types=1);

namespace PlexApi\ValueObject;

abstract class MediaContainer
{
    protected bool $allowSync;

    protected string $identifier;

    protected string $mediaTagPrefix;

    protected int $mediaTagVersion;

    protected int $size;

    protected function __construct(
        int $size,
        bool $allowSync,
        string $identifier,
        string $mediaTagPrefix,
        int $mediaTagVersion
    ) {
        $this->size = $size;
        $this->allowSync = $allowSync;
        $this->identifier = $identifier;
        $this->mediaTagPrefix = $mediaTagPrefix;
        $this->mediaTagVersion = $mediaTagVersion;
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

    public function isAllowSync() : bool
    {
        return $this->allowSync;
    }
}