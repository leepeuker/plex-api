<?php declare(strict_types=1);

namespace PlexApi\Tests\Unit\ValueObject;

use PHPUnit\Framework\TestCase;
use PlexApi\ValueObject\Media;
use PlexApi\ValueObject\MediaList;

/**
 * @covers \PlexApi\ValueObject\MediaList
 * @covers \PlexApi\ValueObject\AbstractList
 * @covers \PlexApi\ValueObject\Media
 * @covers \PlexApi\ValueObject\PartList
 */
class MediaListTest extends TestCase
{
    public function testAdd() : void
    {
        $list = MediaList::create();

        $list->add($this->createMock(Media::class));

        $this->assertCount(1, $list);
    }

    public function testCreateFromArray() : void
    {
        $data = [
            [
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
            ],
        ];

        $this->assertCount(1, MediaList::createFromArray($data));
    }
}