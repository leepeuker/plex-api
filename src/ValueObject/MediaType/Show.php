<?php declare(strict_types=1);

namespace PlexApi\ValueObject\MediaType;

class Show extends MediaType
{
    public const TYPE = 'show';

    private int $addedAt;

    private ?string $art;

    private ?string $banner;

    private int $childCount;

    private ?string $contentRating;

    private ?int $duration;

    private ?array $genres;

    private string $guid;

    private int $index;

    private string $key;

    private int $leafCount;

    private string $originallyAvailableAt;

    private ?float $rating;

    private string $ratingKey;

    private ?array $roles;

    private ?string $studio;

    private ?string $summary;

    private ?string $theme;

    private string $thumb;

    private string $title;

    private int $updatedAt;

    private int $viewedLeafCount;

    private ?int $year;

    protected function __construct(
        string $ratingKey,
        string $key,
        string $guid,
        ?string $studio,
        string $title,
        ?string $contentRating,
        ?string $summary,
        int $index,
        ?float $rating,
        ?int $year,
        string $thumb,
        ?string $art,
        ?string $banner,
        ?string $theme,
        ?int $duration,
        string $originallyAvailableAt,
        int $leafCount,
        int $viewedLeafCount,
        int $childCount,
        int $addedAt,
        int $updatedAt,
        ?array $genres,
        ?array $roles
    ) {
        $this->ratingKey = $ratingKey;
        $this->key = $key;
        $this->guid = $guid;
        $this->studio = $studio;
        $this->title = $title;
        $this->contentRating = $contentRating;
        $this->summary = $summary;
        $this->index = $index;
        $this->rating = $rating;
        $this->year = $year;
        $this->thumb = $thumb;
        $this->art = $art;
        $this->banner = $banner;
        $this->theme = $theme;
        $this->duration = $duration;
        $this->originallyAvailableAt = $originallyAvailableAt;
        $this->leafCount = $leafCount;
        $this->viewedLeafCount = $viewedLeafCount;
        $this->childCount = $childCount;
        $this->addedAt = $addedAt;
        $this->updatedAt = $updatedAt;
        $this->genres = $genres;
        $this->roles = $roles;
    }

    public static function createFromArray(array $data) : self
    {
        return new self(
            (string)$data['ratingKey'],
            (string)$data['key'],
            (string)$data['guid'],
            isset($data['studio']) === true ? (string)$data['studio'] : null,
            (string)$data['title'],
            isset($data['contentRating']) === true ? (string)$data['contentRating'] : null,
            isset($data['summary']) === true ? (string)$data['summary'] : null,
            (int)$data['index'],
            isset($data['rating']) === true ? (float)$data['rating'] : null,
            isset($data['year']) === true ? (int)$data['year'] : null,
            (string)$data['thumb'],
            isset($data['art']) === true ? (string)$data['art'] : null,
            isset($data['banner']) === true ? (string)$data['banner'] : null,
            isset($data['theme']) === true ? (string)$data['theme'] : null,
            isset($data['duration']) === true ? (int)$data['duration'] : null,
            (string)$data['originallyAvailableAt'],
            (int)$data['leafCount'],
            (int)$data['viewedLeafCount'],
            (int)$data['childCount'],
            (int)$data['addedAt'],
            (int)$data['updatedAt'],
            isset($data['Genre']) === true ? (array)$data['Genre'] : null,
            isset($data['Role']) === true ? (array)$data['Role'] : null,
        );
    }

    public function getAddedAt() : int
    {
        return $this->addedAt;
    }

    public function getArt() : ?string
    {
        return $this->art;
    }

    public function getBanner() : ?string
    {
        return $this->banner;
    }

    public function getChildCount() : int
    {
        return $this->childCount;
    }

    public function getContentRating() : ?string
    {
        return $this->contentRating;
    }

    public function getDuration() : ?int
    {
        return $this->duration;
    }

    public function getGenres() : ?array
    {
        return $this->genres;
    }

    public function getGuid() : string
    {
        return $this->guid;
    }

    public function getIndex() : int
    {
        return $this->index;
    }

    public function getKey() : string
    {
        return $this->key;
    }

    public function getLeafCount() : int
    {
        return $this->leafCount;
    }

    public function getOriginallyAvailableAt() : string
    {
        return $this->originallyAvailableAt;
    }

    public function getRating() : ?float
    {
        return $this->rating;
    }

    public function getRatingKey() : string
    {
        return $this->ratingKey;
    }

    public function getRoles() : ?array
    {
        return $this->roles;
    }

    public function getStudio() : ?string
    {
        return $this->studio;
    }

    public function getSummary() : ?string
    {
        return $this->summary;
    }

    public function getTheme() : ?string
    {
        return $this->theme;
    }

    public function getThumb() : string
    {
        return $this->thumb;
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    public function getUpdatedAt() : int
    {
        return $this->updatedAt;
    }

    public function getViewedLeafCount() : int
    {
        return $this->viewedLeafCount;
    }

    public function getYear() : ?int
    {
        return $this->year;
    }
}