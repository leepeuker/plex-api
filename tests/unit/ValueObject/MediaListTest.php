<?php declare(strict_types=1);

namespace PlexApi\Tests\Unit\ValueObject;

use PHPUnit\Framework\TestCase;
use PlexApi\ValueObject\Media;
use PlexApi\ValueObject\MediaList;

/**
 * @covers \PlexApi\ValueObject\MediaList
 * @covers \PlexApi\ValueObject\AbstractList
 * @covers \PlexApi\ValueObject\Media
 * @covers \PlexApi\ValueObject\Part
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
        $data = json_decode($this->getTestData(), true, 512, JSON_THROW_ON_ERROR)['Metadata'][0]['Media'];

        $this->assertCount(1, MediaList::createFromArray((array)$data));
    }

    private function getTestData() : string
    {
        return (string)file_get_contents(__DIR__ . '/../../resources/librarySectionContentMovieResponse.json');
    }
}