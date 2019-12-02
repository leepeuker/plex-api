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

    public static function createFromArray(array $element) : self
    {
        return new self(
            (string)$element['ratingKey'],
            (string)$element['key'],
            (string)$element['guid'],
            isset($element['studio']) === true ? (string)$element['studio'] : null,
            (string)$element['title'],
            isset($element['contentRating']) === true ? (string)$element['contentRating'] : null,
            isset($element['summary']) === true ? (string)$element['summary'] : null,
            (int)$element['index'],
            isset($element['rating']) === true ? (float)$element['rating'] : null,
            isset($element['year']) === true ? (int)$element['year'] : null,
            (string)$element['thumb'],
            isset($element['art']) === true ? (string)$element['art'] : null,
            isset($element['banner']) === true ? (string)$element['banner'] : null,
            isset($element['theme']) === true ? (string)$element['theme'] : null,
            isset($element['duration']) === true ? (int)$element['duration'] : null,
            (string)$element['originallyAvailableAt'],
            (int)$element['leafCount'],
            (int)$element['viewedLeafCount'],
            (int)$element['childCount'],
            (int)$element['addedAt'],
            (int)$element['updatedAt'],
            isset($element['Genre']) === true ? (array)$element['Genre'] : null,
            isset($element['Role']) === true ? (array)$element['Role'] : null,
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