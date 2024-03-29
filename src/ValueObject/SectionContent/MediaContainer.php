<?php declare(strict_types=1);

namespace PlexApi\ValueObject\SectionContent;

use PlexApi\ValueObject;
use PlexApi\ValueObject\MediaType\MediaTypeList;

class MediaContainer extends ValueObject\MediaContainer
{
    private string $art;

    private int $librarySectionId;

    private string $librarySectionTitle;

    private string $librarySectionUuid;

    private MediaTypeList $metadata;

    private ?bool $noCache;

    private string $thumb;

    private string $title1;

    private string $title2;

    private string $viewGroup;

    private int $viewMode;

    private function __construct(
        int $size,
        bool $allowSync,
        string $art,
        string $identifier,
        int $librarySectionId,
        string $librarySectionTitle,
        string $librarySectionUuid,
        string $mediaTagPrefix,
        int $mediaTagVersion,
        ?bool $noCache,
        string $thumb,
        string $title1,
        string $title2,
        string $viewGroup,
        int $viewMode,
        MediaTypeList $metadata
    ) {
        parent::__construct($size, $allowSync, $identifier, $mediaTagPrefix, $mediaTagVersion);

        $this->art = $art;
        $this->librarySectionId = $librarySectionId;
        $this->librarySectionTitle = $librarySectionTitle;
        $this->librarySectionUuid = $librarySectionUuid;
        $this->noCache = $noCache;
        $this->thumb = $thumb;
        $this->title1 = $title1;
        $this->title2 = $title2;
        $this->viewGroup = $viewGroup;
        $this->viewMode = $viewMode;
        $this->metadata = $metadata;
    }

    public static function createFromArray(array $sections) : self
    {
        return new self(
            (int)isset($sections['size']),
            (bool)$sections['allowSync'],
            (string)$sections['art'],
            (string)$sections['identifier'],
            (int)$sections['librarySectionID'],
            (string)$sections['librarySectionTitle'],
            (string)$sections['librarySectionUUID'],
            (string)$sections['mediaTagPrefix'],
            (int)$sections['mediaTagVersion'],
            isset($sections['nocache']) === true ? (bool)$sections['nocache'] : null,
            (string)$sections['thumb'],
            (string)$sections['title1'],
            (string)$sections['title2'],
            (string)$sections['viewGroup'],
            (int)$sections['viewMode'],
            MediaTypeList::createFromArrayAndType((array)$sections['Metadata'], (string)$sections['viewGroup']),
        );
    }

    public function getArt() : string
    {
        return $this->art;
    }

    public function getLibrarySectionId() : int
    {
        return $this->librarySectionId;
    }

    public function getLibrarySectionUuid() : string
    {
        return $this->librarySectionUuid;
    }

    public function getMetadata() : MediaTypeList
    {
        return $this->metadata;
    }

    public function getThumb() : string
    {
        return $this->thumb;
    }

    public function getTitle1() : string
    {
        return $this->title1;
    }

    public function getTitle2() : string
    {
        return $this->title2;
    }

    public function getViewGroup() : string
    {
        return $this->viewGroup;
    }

    public function getViewMode() : int
    {
        return $this->viewMode;
    }

    public function isLibrarySectionTitle() : string
    {
        return $this->librarySectionTitle;
    }

    public function isNoCache() : ?bool
    {
        return $this->noCache;
    }
}