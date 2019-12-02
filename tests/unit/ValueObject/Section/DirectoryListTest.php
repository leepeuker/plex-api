<?php declare(strict_types=1);

namespace PlexApi\Tests\Unit\ValueObject\Section;

use PHPUnit\Framework\TestCase;
use PlexApi\ValueObject\Section\Directory;
use PlexApi\ValueObject\Section\DirectoryList;

/**
 * @covers \PlexApi\ValueObject\Section\DirectoryList
 * @covers \PlexApi\ValueObject\AbstractList
 * @uses   \PlexApi\ValueObject\Section\Directory
 * @uses   \PlexApi\ValueObject\Section\DirectoryList
 * @uses   \PlexApi\ValueObject\Section\Location
 * @uses   \PlexApi\ValueObject\Section\LocationList
 */
class DirectoryListTest extends TestCase
{
    public function testAdd() : void
    {
        $list = DirectoryList::create();

        $list->add($this->createMock(Directory::class));

        $this->assertCount(1, $list);
    }

    public function testCreateFromArray() : void
    {
        $data = (array)json_decode($this->getTestData(), true, 512, JSON_THROW_ON_ERROR)['Directory'];

        $this->assertCount(2, DirectoryList::createFromArray((array)$data));
    }

    private function getTestData() : string
    {
        return (string)file_get_contents(__DIR__ . '/../../../resources/librarySectionResponse.json');
    }
}