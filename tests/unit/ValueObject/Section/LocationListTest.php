<?php declare(strict_types=1);

namespace PlexApi\Tests\Unit\ValueObject\Section;

use PHPUnit\Framework\TestCase;
use PlexApi\ValueObject\Section\Location;
use PlexApi\ValueObject\Section\LocationList;

/**
 * @covers \PlexApi\ValueObject\Section\LocationList
 * @covers \PlexApi\ValueObject\AbstractList
 * @uses   \PlexApi\ValueObject\Section\Location
 */
class LocationListTest extends TestCase
{
    public function testAdd() : void
    {
        $list = LocationList::create();

        $list->add($this->createMock(Location::class));

        $this->assertCount(1, $list);
    }

    public function testCreateFromArray() : void
    {
        $data = [
            [
                'id' => 42,
                'path' => 'foobar',
            ],
            [
                'id' => 84,
                'path' => 'foobar',
            ],
        ];

        $this->assertCount(2, LocationList::createFromArray($data));
    }
}