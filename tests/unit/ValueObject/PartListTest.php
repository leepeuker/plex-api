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
        $data = [
            [
                'id' => 42,
                'key' => 'foobar',
                'duration' => 4235241,
                'file' => '/file',
                'size' => 100,
                'container' => 'foobar',
                'videoProfile' => 'videoProfile',
                'audioProfile' => 'audioProfile',
                'has64bitOffsets' => false,
            ],
        ];

        $this->assertCount(1, PartList::createFromArray($data));
    }
}