<?php declare(strict_types=1);

namespace PlexApi\Tests\Unit\ValueObject\MediaType;

use PHPUnit\Framework\TestCase;
use PlexApi\ValueObject\MediaType\Show;
use PlexApi\ValueObject\MediaType\ShowList;

/**
 * @covers \PlexApi\ValueObject\MediaType\ShowList
 * @covers \PlexApi\ValueObject\AbstractList
 * @uses   \PlexApi\ValueObject\MediaType\Show
 */
class ShowListTest extends TestCase
{
    public function testAdd() : void
    {
        $list = ShowList::create();

        $list->add($this->createMock(Show::class));

        $this->assertCount(1, $list);
    }

    public function testCreateFromArray() : void
    {
        $data = json_decode($this->getTestData(), true, 512, JSON_THROW_ON_ERROR)['Metadata'];

        $this->assertCount(1, ShowList::createFromArray((array)$data));
    }

    private function getTestData() : string
    {
        return (string)file_get_contents(__DIR__ . '/../../../resources/librarySectionContentShowResponse.json');
    }
}