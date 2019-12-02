<?php declare(strict_types=1);

namespace PlexApi\Tests\Unit\ValueObject;

use PHPUnit\Framework\TestCase;
use PlexApi\ValueObject\Media;
use PlexApi\ValueObject\PartList;

/**
 * @covers \PlexApi\ValueObject\Media
 * @uses   \PlexApi\ValueObject\Part
 * @uses   \PlexApi\ValueObject\PartList
 */
class MediaTest extends TestCase
{
    private array $data;

    private Media $media;

    public function setUp() : void
    {
        $this->data = [
            'id' => 42,
            'duration' => 4235241,
            'bitrate' => 24123,
            'width' => 10,
            'height' => 20,
            'aspectRatio' => 2.45,
            'audioChannels' => 3,
            'audioCodec' => 'foobar',
            'videoCodec' => 'foobar',
            'videoResolution' => 'foobar',
            'container' => 'foobar',
            'videoFrameRate' => 'foobar',
            'audioProfile' => 'foobar',
            'videoProfile' => 'foobar',
            'Part' => [],
            'has64bitOffsets' => false,
        ];

        $this->media = Media::createFromArray($this->data);
    }

    public function testGetAspectRatio() : void
    {
        $this->assertEquals($this->data['aspectRatio'], $this->media->getAspectRatio());
    }

    public function testGetAudioChannels() : void
    {
        $this->assertEquals($this->data['audioChannels'], $this->media->getAudioChannels());
    }

    public function testGetAudioCodec() : void
    {
        $this->assertEquals($this->data['audioCodec'], $this->media->getAudioCodec());
    }

    public function testGetAudioProfile() : void
    {
        $this->assertEquals($this->data['audioProfile'], $this->media->getAudioProfile());
    }

    public function testGetBitrate() : void
    {
        $this->assertEquals($this->data['bitrate'], $this->media->getBitrate());
    }

    public function testGetContainer() : void
    {
        $this->assertEquals($this->data['container'], $this->media->getContainer());
    }

    public function testGetDuration() : void
    {
        $this->assertEquals($this->data['duration'], $this->media->getDuration());
    }

    public function testGetHeight() : void
    {
        $this->assertEquals($this->data['height'], $this->media->getHeight());
    }

    public function testGetId() : void
    {
        $this->assertEquals($this->data['id'], $this->media->getId());
    }

    public function testGetParts() : void
    {
        $this->assertInstanceOf(PartList::class, $this->media->getParts());
    }

    public function testGetVideoCodec() : void
    {
        $this->assertEquals($this->data['videoCodec'], $this->media->getVideoCodec());
    }

    public function testGetVideoFrameRate() : void
    {
        $this->assertEquals($this->data['videoFrameRate'], $this->media->getVideoFrameRate());
    }

    public function testGetVideoProfile() : void
    {
        $this->assertEquals($this->data['videoProfile'], $this->media->getVideoProfile());
    }

    public function testGetVideoResolution() : void
    {
        $this->assertEquals($this->data['videoResolution'], $this->media->getVideoResolution());
    }

    public function testGetWidth() : void
    {
        $this->assertEquals($this->data['width'], $this->media->getWidth());
    }

    public function testIsHas64bitOffsets() : void
    {
        $this->assertEquals($this->data['has64bitOffsets'], $this->media->isHas64bitOffsets());
    }
}