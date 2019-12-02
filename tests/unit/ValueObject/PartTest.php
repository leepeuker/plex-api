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
        $this->data = json_decode($this->getTestData(), true, 512, JSON_THROW_ON_ERROR)['Metadata'][0]['Media'][0]['Part'][0];

        $this->part = Part::createFromArray((array)$this->data);
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
        $this->assertNull($this->part->isHas64bitOffsets());
    }

    private function getTestData() : string
    {
        return (string)file_get_contents(__DIR__ . '/../../resources/librarySectionContentMovieResponse.json');
    }
}