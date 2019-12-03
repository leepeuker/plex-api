<?php declare(strict_types=1);

namespace PlexApi\Tests\Unit\ValueObject\Section;

use PHPUnit\Framework\TestCase;
use PlexApi\ValueObject\Section\DirectoryList;
use PlexApi\ValueObject\Section\MediaContainer;

/**
 * @covers \PlexApi\ValueObject\Section\MediaContainer
 * @covers \PlexApi\ValueObject\MediaContainer
 * @uses   \PlexApi\ValueObject\Section\Directory
 * @uses   \PlexApi\ValueObject\Section\DirectoryList
 * @uses   \PlexApi\ValueObject\Section\Location
 * @uses   \PlexApi\ValueObject\Section\LocationList
 */
class MediaContainerTest extends TestCase
{
    private array $data;

    private MediaContainer $mediaContainer;

    public function setUp() : void
    {
        $this->data = json_decode($this->getTestData(), true, 512, JSON_THROW_ON_ERROR);

        $this->mediaContainer = MediaContainer::createFromArray((array)$this->data);
    }

    public function testGetDirectories() : void
    {
        $this->assertInstanceOf(DirectoryList::class, $this->mediaContainer->getDirectories());
    }

    public function testGetIdentifier() : void
    {
        $this->assertSame($this->data['identifier'], $this->mediaContainer->getIdentifier());
    }

    public function testGetMediaTagPrefix() : void
    {
        $this->assertSame($this->data['mediaTagPrefix'], $this->mediaContainer->getMediaTagPrefix());
    }

    public function testGetMediaTagVersion() : void
    {
        $this->assertSame($this->data['mediaTagVersion'], $this->mediaContainer->getMediaTagVersion());
    }

    public function testGetSize() : void
    {
        $this->assertSame($this->data['size'], $this->mediaContainer->getSize());
    }

    public function testGetTitle1() : void
    {
        $this->assertSame($this->data['title1'], $this->mediaContainer->getTitle1());
    }

    public function testIsAllowSync() : void
    {
        $this->assertSame($this->data['allowSync'], $this->mediaContainer->isAllowSync());
    }

    private function getTestData() : string
    {
        return (string)file_get_contents(__DIR__ . '/../../../resources/librarySectionResponse.json');
    }
}