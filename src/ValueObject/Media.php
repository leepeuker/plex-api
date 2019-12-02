<?php declare(strict_types=1);

namespace PlexApi\ValueObject;

class Media
{
    private ?float $aspectRatio;

    private ?int $audioChannels;

    private ?string $audioCodec;

    private ?string $audioProfile;

    private ?int $bitrate;

    private ?string $container;

    private ?int $duration;

    private ?bool $has64bitOffsets;

    private ?int $height;

    private int $id;

    private PartList $parts;

    private ?string $videoCodec;

    private ?string $videoFrameRate;

    private ?string $videoProfile;

    private ?string $videoResolution;

    private ?int $width;

    public function __construct(
        int $id,
        ?int $duration,
        ?int $bitrate,
        ?int $width,
        ?int $height,
        ?float $aspectRatio,
        ?int $audioChannels,
        ?string $audioCodec,
        ?string $videoCodec,
        ?string $videoResolution,
        ?string $container,
        ?string $videoFrameRate,
        ?string $audioProfile,
        ?string $videoProfile,
        PartList $parts,
        ?bool $has64bitOffsets
    ) {
        $this->id = $id;
        $this->duration = $duration;
        $this->bitrate = $bitrate;
        $this->width = $width;
        $this->height = $height;
        $this->aspectRatio = $aspectRatio;
        $this->audioChannels = $audioChannels;
        $this->audioCodec = $audioCodec;
        $this->videoCodec = $videoCodec;
        $this->videoResolution = $videoResolution;
        $this->container = $container;
        $this->videoFrameRate = $videoFrameRate;
        $this->audioProfile = $audioProfile;
        $this->videoProfile = $videoProfile;
        $this->parts = $parts;
        $this->has64bitOffsets = $has64bitOffsets;
    }

    public static function createFromArray(array $data) : self
    {
        return new self(
            (int)$data['id'],
            isset($data['duration']) === true ? (int)$data['duration'] : null,
            isset($data['bitrate']) === true ? (int)$data['bitrate'] : null,
            isset($data['width']) === true ? (int)$data['width'] : null,
            isset($data['height']) === true ? (int)$data['height'] : null,
            isset($data['aspectRatio']) === true ? (float)$data['aspectRatio'] : null,
            isset($data['audioChannels']) === true ? (int)$data['audioChannels'] : null,
            isset($data['audioChannels']) === true ? (string)$data['audioChannels'] : null,
            isset($data['videoCodec']) === true ? (string)$data['videoCodec'] : null,
            isset($data['videoResolution']) === true ? (string)$data['videoResolution'] : null,
            isset($data['container']) === true ? (string)$data['container'] : null,
            isset($data['videoFrameRate']) === true ? (string)$data['videoFrameRate'] : null,
            isset($data['audioProfile']) === true ? (string)$data['audioProfile'] : null,
            isset($data['videoProfile']) === true ? (string)$data['videoProfile'] : null,
            PartList::createFromArray((array)$data['Part']),
            isset($data['has64bitOffsets']) === true ? (bool)$data['has64bitOffsets'] : null
        );
    }

    public function getAspectRatio() : ?float
    {
        return $this->aspectRatio;
    }

    public function getAudioChannels() : ?int
    {
        return $this->audioChannels;
    }

    public function getAudioCodec() : ?string
    {
        return $this->audioCodec;
    }

    public function getAudioProfile() : ?string
    {
        return $this->audioProfile;
    }

    public function getBitrate() : ?int
    {
        return $this->bitrate;
    }

    public function getContainer() : ?string
    {
        return $this->container;
    }

    public function getDuration() : ?int
    {
        return $this->duration;
    }

    public function getHeight() : ?int
    {
        return $this->height;
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function getParts() : PartList
    {
        return $this->parts;
    }

    public function getVideoCodec() : ?string
    {
        return $this->videoCodec;
    }

    public function getVideoFrameRate() : ?string
    {
        return $this->videoFrameRate;
    }

    public function getVideoProfile() : ?string
    {
        return $this->videoProfile;
    }

    public function getVideoResolution() : ?string
    {
        return $this->videoResolution;
    }

    public function getWidth() : ?int
    {
        return $this->width;
    }

    public function has64bitOffsets() : ?bool
    {
        return $this->has64bitOffsets;
    }
}