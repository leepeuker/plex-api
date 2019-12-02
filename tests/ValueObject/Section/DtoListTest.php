<?php declare(strict_types=1);

namespace PlexApi\Tests\ValueObject\Section;

use PHPUnit\Framework\TestCase;
use PlexApi\ValueObject\Section\Dto;
use PlexApi\ValueObject\Section\DtoList;

/**
 * @covers \PlexApi\ValueObject\Section\DtoList
 * @covers \PlexApi\ValueObject\AbstractList
 * @uses   \PlexApi\ValueObject\Location\Dto
 * @uses   \PlexApi\ValueObject\Location\DtoList
 * @uses   \PlexApi\ValueObject\Section\Dto
 * @uses   \PlexApi\ValueObject\Section\DtoList
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
            'allowSync' => false,
            'art' => '/:/resources/show-fanart.jpg',
            'composite' => '/library/sections/9/composite/1573945582',
            'filters' => true,
            'refreshing' => false,
            'thumb' => '/:/resources/show.png',
            'key' => '9',
            'type' => 'show',
            'title' => 'Animes',
            'agent' => 'com.plexapp.agents.themoviedb',
            'scanner' => 'Plex Series Scanner',
            'language' => 'en',
            'uuid' => '1ef7230a-2dfd-48af-90d3-4a31f455409d',
            'updatedAt' => 1573941032,
            'createdAt' => 1573941000,
            'scannedAt' => 1573945582,
            'content' => true,
            'directory' => true,
            'contentChangedAt' => 2783569,
            'Location' => [
                [
                    'id' => 12,
                    'path' => '/mnt/animes',
                ],
            ],
        ];

        $this->assertCount(2, DtoList::createFromArray([$data, $data]));
    }
}