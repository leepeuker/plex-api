<?php declare(strict_types=1);

namespace PlexApi\Tests\Unit\ValueObject\Section;

use PHPUnit\Framework\TestCase;
use PlexApi\ValueObject\Section\Directory;
use PlexApi\ValueObject\Section\DirectoryList;

/**
 * @covers \PlexApi\ValueObject\Section\DirectoryList
 * @covers \PlexApi\ValueObject\AbstractList
 * @uses   \PlexApi\ValueObject\Location
 * @uses   \PlexApi\ValueObject\LocationList
 * @uses   \PlexApi\ValueObject\Section\Directory
 * @uses   \PlexApi\ValueObject\Section\DirectoryList
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

        $this->assertCount(2, DirectoryList::createFromArray([$data, $data]));
    }
}