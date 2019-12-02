<?php declare(strict_types=1);

namespace PlexApi\Tests\Unit\ValueObject;

use PHPUnit\Framework\TestCase;
use PlexApi\ValueObject\Part;

/**
 * @covers \PlexApi\ValueObject\Part
 */
class PartTest extends TestCase
{
    private array $data;

    private Part $part;

    public function setUp() : void
    {
        $this->data = [
            'id' => 42,
            'key' => 'foobar',
            'duration' => 4235241,
            'file' => '/file',
            'size' => 100,
            'container' => 'foobar',
            'videoProfile' => 'videoProfile',
            'audioProfile' => 'audioProfile',
            'has64bitOffsets' => false,
        ];

        $this->part = Part::createFromArray($this->data);
    }

    public function testGetAudioProfile() : void
    {
        $this->assertEquals($this->data['audioProfile'], $this->part->getAudioProfile());
    }

    public function testGetContainer() : void
    {
        $this->assertEquals($this->data['container'], $this->part->getContainer());
    }

    public function testGetDuration() : void
    {
        $this->assertEquals($this->data['duration'], $this->part->getDuration());
    }

    public function testGetFile() : void
    {
        $this->assertEquals($this->data['file'], $this->part->getFile());
    }

    public function testGetId() : void
    {
        $this->assertEquals($this->data['id'], $this->part->getId());
    }

    public function testGetKey() : void
    {
        $this->assertEquals($this->data['key'], $this->part->getKey());
    }

    public function testGetSize() : void
    {
        $this->assertEquals($this->data['size'], $this->part->getSize());
    }

    public function testGetVideoProfile() : void
    {
        $this->assertEquals($this->data['videoProfile'], $this->part->getVideoProfile());
    }

    public function testIsHas64bitOffset() : void
    {
        $this->assertEquals($this->data['has64bitOffsets'], $this->part->isHas64bitOffsets());
    }
}