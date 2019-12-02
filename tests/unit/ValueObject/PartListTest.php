<?php declare(strict_types=1);

namespace PlexApi\Tests\Unit\ValueObject;

use PHPUnit\Framework\TestCase;
use PlexApi\ValueObject\Part;
use PlexApi\ValueObject\PartList;

/**
 * @covers \PlexApi\ValueObject\PartList
 * @covers \PlexApi\ValueObject\AbstractList
 * @covers \PlexApi\ValueObject\Part
 */
class PartListTest extends TestCase
{
    public function testAdd() : void
    {
        $list = PartList::create();

        $list->add($this->createMock(Part::class));

        $this->assertCount(1, $list);
    }

    public function testCreateFromArray() : void
    {
        $data = json_decode($this->getTestData(), true, 512, JSON_THROW_ON_ERROR)['Metadata'][0]['Media'][0]['Part'];

        $this->assertCount(1, PartList::createFromArray((array)$data));
    }

    private function getTestData() : string
    {
        return (string)file_get_contents(__DIR__ . '/../../resources/librarySectionContentMovieResponse.json');
    }
}