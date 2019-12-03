<?php declare(strict_types=1);

namespace PlexApi\ValueObject\MediaType;

use PlexApi\ValueObject\MediaList;

class Movie extends MediaType
{
    public const TYPE = 'movie';

    private int $addedAt;

    private ?string $art;

    private ?string $chapterSource;

    private ?array $collection;

    private ?string $contentRating;

    private ?array $country;

    private ?array $director;

    private ?int $duration;

    private ?array $genre;

    private string $guid;

    private string $key;

    private ?int $lastViewedAt;

    private MediaList $mediaList;

    private ?string $originallyAvailableAt;

    private ?string $primaryExtraKey;

    private ?float $rating;

    private ?string $ratingImage;

    private string $ratingKey;

    private ?array $role;

    private ?string $studio;

    private ?string $summary;

    private ?string $tagline;

    private string $thumb;

    private string $title;

    private ?string $titleSort;

    private int $updatedAt;

    private ?int $viewCount;

    private ?array $writer;

    private ?int $year;

    private function __construct(
        string $ratingKey,
        string $key,
        string $guid,
        ?string $studio,
        string $title,
        ?string $titleSort,
        ?string $contentRating,
        ?string $summary,
        ?float $rating,
        ?int $viewCount,
        ?int $lastViewedAt,
        ?int $year,
        ?string $tagline,
        string $thumb,
        ?string $art,
        ?int $duration,
        ?string $originallyAvailableAt,
        int $addedAt,
        int $updatedAt,
        ?string $chapterSource,
        ?string $primaryExtraKey,
        ?string $ratingImage,
        MediaList $mediaList,
        ?array $genre,
        ?array $director,
        ?array $writer,
        ?array $country,
        ?array $collection,
        ?array $role
    ) {
        $this->ratingKey = $ratingKey;
        $this->key = $key;
        $this->guid = $guid;
        $this->studio = $studio;
        $this->title = $title;
        $this->titleSort = $titleSort;
        $this->contentRating = $contentRating;
        $this->summary = $summary;
        $this->rating = $rating;
        $this->viewCount = $viewCount;
        $this->lastViewedAt = $lastViewedAt;
        $this->year = $year;
        $this->tagline = $tagline;
        $this->thumb = $thumb;
        $this->art = $art;
        $this->duration = $duration;
        $this->originallyAvailableAt = $originallyAvailableAt;
        $this->addedAt = $addedAt;
        $this->updatedAt = $updatedAt;
        $this->chapterSource = $chapterSource;
        $this->primaryExtraKey = $primaryExtraKey;
        $this->ratingImage = $ratingImage;
        $this->mediaList = $mediaList;
        $this->genre = $genre;
        $this->director = $director;
        $this->writer = $writer;
        $this->country = $country;
        $this->collection = $collection;
        $this->role = $role;
    }

    public static function createFromArray(array $data) : self
    {
        return new self(
            (string)$data['ratingKey'],
            (string)$data['key'],
            (string)$data['guid'],
            isset($data['studio']) === true ? (string)$data['studio'] : null,
            (string)$data['title'],
            isset($data['titleSort']) === true ? (string)$data['titleSort'] : null,
            isset($data['contentRating']) === true ? (string)$data['contentRating'] : null,
            isset($data['summary']) === true ? (string)$data['summary'] : null,
            isset($data['rating']) === true ? (float)$data['rating'] : null,
            isset($data['viewCount']) === true ? (int)$data['viewCount'] : null,
            isset($data['lastViewedAt']) === true ? (int)$data['lastViewedAt'] : null,
            isset($data['year']) === true ? (int)$data['year'] : null,
            isset($data['tagline']) === true ? (string)$data['tagline'] : null,
            (string)$data['thumb'],
            isset($data['art']) === true ? (string)$data['art'] : null,
            isset($data['duration']) === true ? (int)$data['duration'] : null,
            isset($data['originallyAvailableAt']) === true ? (string)$data['originallyAvailableAt'] : null,
            (int)$data['addedAt'],
            (int)$data['updatedAt'],
            isset($data['chapterSource']) === true ? (string)$data['chapterSource'] : null,
            isset($data['primaryExtraKey']) === true ? (string)$data['primaryExtraKey'] : null,
            isset($data['ratingImage']) === true ? (string)$data['ratingImage'] : null,
            MediaList::createFromArray((array)$data['Media']),
            isset($data['Genre']) === true ? (array)$data['Genre'] : null,
            isset($data['Director']) === true ? (array)$data['Director'] : null,
            isset($data['Writer']) === true ? (array)$data['Writer'] : null,
            isset($data['Country']) === true ? (array)$data['Country'] : null,
            isset($data['Collection']) === true ? (array)$data['Collection'] : null,
            isset($data['Role']) === true ? (array)$data['Role'] : null
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

    public function getChapterSource() : ?string
    {
        return $this->chapterSource;
    }

    public function getCollection() : ?array
    {
        return $this->collection;
    }

    public function getContentRating() : ?string
    {
        return $this->contentRating;
    }

    public function getCountry() : ?array
    {
        return $this->country;
    }

    public function getDirector() : ?array
    {
        return $this->director;
    }

    public function getDuration() : ?int
    {
        return $this->duration;
    }

    public function getGenre() : ?array
    {
        return $this->genre;
    }

    public function getGuid() : string
    {
        return $this->guid;
    }

    public function getKey() : string
    {
        return $this->key;
    }

    public function getLastViewedAt() : ?int
    {
        return $this->lastViewedAt;
    }

    public function getMediaList() : MediaList
    {
        return $this->mediaList;
    }

    public function getOriginallyAvailableAt() : ?string
    {
        return $this->originallyAvailableAt;
    }

    public function getPrimaryExtraKey() : ?string
    {
        return $this->primaryExtraKey;
    }

    public function getRating() : ?float
    {
        return $this->rating;
    }

    public function getRatingImage() : ?string
    {
        return $this->ratingImage;
    }

    public function getRatingKey() : string
    {
        return $this->ratingKey;
    }

    public function getRole() : ?array
    {
        return $this->role;
    }

    public function getStudio() : ?string
    {
        return $this->studio;
    }

    public function getSummary() : ?string
    {
        return $this->summary;
    }

    public function getTagline() : ?string
    {
        return $this->tagline;
    }

    public function getThumb() : string
    {
        return $this->thumb;
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    public function getTitleSort() : ?string
    {
        return $this->titleSort;
    }

    public function getUpdatedAt() : int
    {
        return $this->updatedAt;
    }

    public function getViewCount() : ?int
    {
        return $this->viewCount;
    }

    public function getWriter() : ?array
    {
        return $this->writer;
    }

    public function getYear() : ?int
    {
        return $this->year;
    }
}