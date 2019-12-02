<?php declare(strict_types=1);

namespace PlexApi\Tests\ValueObject\Location;

use PHPUnit\Framework\TestCase;
use PlexApi\ValueObject\Location\Dto;
use PlexApi\ValueObject\Location\DtoList;

/**
 * @covers \PlexApi\ValueObject\Location\DtoList
 * @covers \PlexApi\ValueObject\AbstractList
 * @uses   \PlexApi\ValueObject\Location\Dto
 */
class DtoListTest extends TestCase
{
    public function testAdd() : void
    {
        $list = DtoList::create();

        $list->add($this->createMock(Dto::class));

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

        $this->assertCount(2, DtoList::createFromArray($data));
    }
}