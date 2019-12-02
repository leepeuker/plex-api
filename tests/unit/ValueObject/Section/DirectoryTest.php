<?php declare(strict_types=1);

namespace PlexApi\Tests\Unit\ValueObject\Section;

use PHPUnit\Framework\TestCase;
use PlexApi\ValueObject\LocationList;
use PlexApi\ValueObject\Section\Directory;

/**
 * @covers \PlexApi\ValueObject\Section\Directory
 * @uses   \PlexApi\ValueObject\AbstractList
 * @uses   \PlexApi\ValueObject\Location
 * @uses   \PlexApi\ValueObject\LocationList
 */
class DirectoryTest extends TestCase
{
    private array $data;

    private Directory $dto;

    public function setUp() : void
    {
        $this->data = [
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

        $this->dto = Directory::createFromArray($this->data);
    }

    public function testGetAgent() : void
    {
        $this->assertSame($this->data['agent'], $this->dto->getAgent());
    }

    public function testGetArt() : void
    {
        $this->assertSame($this->data['art'], $this->dto->getArt());
    }

    public function testGetComposite() : void
    {
        $this->assertSame($this->data['composite'], $this->dto->getComposite());
    }

    public function testGetContentChangedAt() : void
    {
        $this->assertSame($this->data['contentChangedAt'], $this->dto->getContentChangedAt());
    }

    public function testGetCreatedAt() : void
    {
        $this->assertSame($this->data['createdAt'], $this->dto->getCreatedAt());
    }

    public function testGetKey() : void
    {
        $this->assertSame($this->data['key'], $this->dto->getKey());
    }

    public function testGetLanguage() : void
    {
        $this->assertSame($this->data['language'], $this->dto->getLanguage());
    }

    public function testGetLocations() : void
    {
        $this->assertEquals(LocationList::createFromArray((array)$this->data['Location']), $this->dto->getLocations());
    }

    public function testGetScannedAt() : void
    {
        $this->assertSame($this->data['scannedAt'], $this->dto->getScannedAt());
    }

    public function testGetScanner() : void
    {
        $this->assertSame($this->data['scanner'], $this->dto->getScanner());
    }

    public function testGetThumb() : void
    {
        $this->assertSame($this->data['thumb'], $this->dto->getThumb());
    }

    public function testGetTitle() : void
    {
        $this->assertSame($this->data['title'], $this->dto->getTitle());
    }

    public function testGetType() : void
    {
        $this->assertSame($this->data['type'], $this->dto->getType());
    }

    public function testGetUpdatedAt() : void
    {
        $this->assertSame($this->data['updatedAt'], $this->dto->getUpdatedAt());
    }

    public function testGetUuid() : void
    {
        $this->assertSame($this->data['uuid'], $this->dto->getUuid());
    }

    public function testIsAllowSync() : void
    {
        $this->assertSame($this->data['allowSync'], $this->dto->isAllowSync());
    }

    public function testIsContent() : void
    {
        $this->assertSame($this->data['content'], $this->dto->isContent());
    }

    public function testIsDirectory() : void
    {
        $this->assertSame($this->data['directory'], $this->dto->isDirectory());
    }

    public function testIsFilters() : void
    {
        $this->assertSame($this->data['filters'], $this->dto->isFilters());
    }

    public function testIsRefreshing() : void
    {
        $this->assertSame($this->data['refreshing'], $this->dto->isRefreshing());
    }
}