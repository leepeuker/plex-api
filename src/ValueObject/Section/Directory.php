<?php declare(strict_types=1);

namespace PlexApi\ValueObject\Section;

class Directory
{
    private string $agent;

    private bool $allowSync;

    private string $art;

    private string $composite;

    private bool $content;

    private int $contentChangedAt;

    private int $createdAt;

    private bool $directory;

    private bool $filters;

    private string $key;

    private string $language;

    private LocationList $locations;

    private bool $refreshing;

    private int $scannedAt;

    private string $scanner;

    private string $thumb;

    private string $title;

    private string $type;

    private int $updatedAt;

    private string $uuid;

    private function __construct(
        bool $allowSync,
        string $art,
        string $composite,
        bool $filters,
        bool $refreshing,
        string $thumb,
        string $key,
        string $type,
        string $title,
        string $agent,
        string $scanner,
        string $language,
        string $uuid,
        int $updatedAt,
        int $createdAt,
        int $scannedAt,
        bool $content,
        bool $directory,
        int $contentChangedAt,
        LocationList $locations
    ) {
        $this->allowSync = $allowSync;
        $this->art = $art;
        $this->composite = $composite;
        $this->filters = $filters;
        $this->refreshing = $refreshing;
        $this->thumb = $thumb;
        $this->key = $key;
        $this->type = $type;
        $this->title = $title;
        $this->agent = $agent;
        $this->scanner = $scanner;
        $this->language = $language;
        $this->uuid = $uuid;
        $this->updatedAt = $updatedAt;
        $this->createdAt = $createdAt;
        $this->scannedAt = $scannedAt;
        $this->content = $content;
        $this->directory = $directory;
        $this->contentChangedAt = $contentChangedAt;
        $this->locations = $locations;
    }

    public static function createFromArray(array $data) : self
    {
        return new self(
            (bool)$data['allowSync'],
            (string)$data['art'],
            (string)$data['composite'],
            (bool)$data['filters'],
            (bool)$data['refreshing'],
            (string)$data['thumb'],
            (string)$data['key'],
            (string)$data['type'],
            (string)$data['title'],
            (string)$data['agent'],
            (string)$data['scanner'],
            (string)$data['language'],
            (string)$data['uuid'],
            (int)$data['updatedAt'],
            (int)$data['createdAt'],
            (int)$data['scannedAt'],
            (bool)$data['content'],
            (bool)$data['directory'],
            (int)$data['contentChangedAt'],
            LocationList::createFromArray((array)$data['Location']),
        );
    }

    public function getAgent() : string
    {
        return $this->agent;
    }

    public function getArt() : string
    {
        return $this->art;
    }

    public function getComposite() : string
    {
        return $this->composite;
    }

    public function getContentChangedAt() : int
    {
        return $this->contentChangedAt;
    }

    public function getCreatedAt() : int
    {
        return $this->createdAt;
    }

    public function getKey() : string
    {
        return $this->key;
    }

    public function getLanguage() : string
    {
        return $this->language;
    }

    public function getLocations() : LocationList
    {
        return $this->locations;
    }

    public function getScannedAt() : int
    {
        return $this->scannedAt;
    }

    public function getScanner() : string
    {
        return $this->scanner;
    }

    public function getThumb() : string
    {
        return $this->thumb;
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    public function getType() : string
    {
        return $this->type;
    }

    public function getUpdatedAt() : int
    {
        return $this->updatedAt;
    }

    public function getUuid() : string
    {
        return $this->uuid;
    }

    public function isAllowSync() : bool
    {
        return $this->allowSync;
    }

    public function isContent() : bool
    {
        return $this->content;
    }

    public function isDirectory() : bool
    {
        return $this->directory;
    }

    public function isFilters() : bool
    {
        return $this->filters;
    }

    public function isRefreshing() : bool
    {
        return $this->refreshing;
    }
}