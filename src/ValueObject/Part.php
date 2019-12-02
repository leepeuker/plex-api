<?php declare(strict_types=1);

namespace PlexApi\ValueObject;

class Part
{
    private ?string $audioProfile;

    private ?string $container;

    private ?int $duration;

    private string $file;

    private ?bool $has64bitOffsets;

    private int $id;

    private string $key;

    private int $size;

    private ?string $videoProfile;

    public function __construct(
        int $id,
        string $key,
        ?int $duration,
        string $file,
        int $size,
        ?string $audioProfile,
        ?string $container,
        ?string $videoProfile,
        ?bool $has64bitOffsets
    ) {
        $this->id = $id;
        $this->key = $key;
        $this->duration = $duration;
        $this->file = $file;
        $this->size = $size;
        $this->audioProfile = $audioProfile;
        $this->container = $container;
        $this->videoProfile = $videoProfile;
        $this->has64bitOffsets = $has64bitOffsets;
    }

    public static function createFromArray(array $data) : self
    {
        return new self(
            (int)$data['id'],
            (string)$data['key'],
            isset($data['duration']) === true ? (int)$data['duration'] : null,
            (string)$data['file'],
            (int)$data['size'],
            isset($data['audioProfile']) === true ? (string)$data['audioProfile'] : null,
            isset($data['container']) === true ? (string)$data['container'] : null,
            isset($data['videoProfile']) === true ? (string)$data['videoProfile'] : null,
            isset($data['has64bitOffsets']) === true ? (bool)$data['has64bitOffsets'] : null
        );
    }

    public function getAudioProfile() : ?string
    {
        return $this->audioProfile;
    }

    public function getContainer() : ?string
    {
        return $this->container;
    }

    public function getDuration() : ?int
    {
        return $this->duration;
    }

    public function getFile() : string
    {
        return $this->file;
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function getKey() : string
    {
        return $this->key;
    }

    public function getSize() : int
    {
        return $this->size;
    }

    public function getVideoProfile() : ?string
    {
        return $this->videoProfile;
    }

    public function isHas64bitOffsets() : ?bool
    {
        return $this->has64bitOffsets;
    }
}