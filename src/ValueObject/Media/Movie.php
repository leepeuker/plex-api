<?php declare(strict_types=1);

namespace PlexApi\ValueObject\Media;

class Movie
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

    private array $media;

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
        array $media,
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
        $this->media = $media;
        $this->genre = $genre;
        $this->director = $director;
        $this->writer = $writer;
        $this->country = $country;
        $this->collection = $collection;
        $this->role = $role;
    }

    public static function createFromArray(array $element) : self
    {
        return new self(
            (string)$element['ratingKey'],
            (string)$element['key'],
            (string)$element['guid'],
            isset($element['studio']) === true ? (string)$element['studio'] : null,
            (string)$element['title'],
            isset($element['titleSort']) === true ? (string)$element['titleSort'] : null,
            isset($element['contentRating']) === true ? (string)$element['contentRating'] : null,
            isset($element['summary']) === true ? (string)$element['summary'] : null,
            isset($element['rating']) === true ? (float)$element['rating'] : null,
            isset($element['viewCount']) === true ? (int)$element['viewCount'] : null,
            isset($element['lastViewedAt']) === true ? (int)$element['lastViewedAt'] : null,
            isset($element['year']) === true ? (int)$element['year'] : null,
            isset($element['tagline']) === true ? (string)$element['tagline'] : null,
            (string)$element['thumb'],
            isset($element['art']) === true ? (string)$element['art'] : null,
            isset($element['duration']) === true ? (int)$element['duration'] : null,
            isset($element['originallyAvailableAt']) === true ? (string)$element['originallyAvailableAt'] : null,
            (int)$element['addedAt'],
            (int)$element['updatedAt'],
            isset($element['chapterSource']) === true ? (string)$element['chapterSource'] : null,
            isset($element['primaryExtraKey']) === true ? (string)$element['primaryExtraKey'] : null,
            isset($element['ratingImage']) === true ? (string)$element['ratingImage'] : null,
            (array)$element['Media'],
            isset($element['Genre']) === true ? (array)$element['Genre'] : null,
            isset($element['Director']) === true ? (array)$element['Director'] : null,
            isset($element['Writer']) === true ? (array)$element['Writer'] : null,
            isset($element['country']) === true ? (array)$element['country'] : null,
            isset($element['Collection']) === true ? (array)$element['Collection'] : null,
            isset($element['Role']) === true ? (array)$element['Role'] : null
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

    public function getMedia() : array
    {
        return $this->media;
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