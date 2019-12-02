<?php declare(strict_types=1);

namespace PlexApi\Tests\Unit\ValueObject\SectionContent;

use PHPUnit\Framework\TestCase;
use PlexApi\ValueObject\MediaType\MediaTypeList;
use PlexApi\ValueObject\SectionContent\MediaContainer;

/**
 * @covers \PlexApi\ValueObject\SectionContent\MediaContainer
 * @uses   \PlexApi\ValueObject\MediaType\Show
 * @uses   \PlexApi\ValueObject\MediaType\ShowList
 * @uses   \PlexApi\ValueObject\MediaType\MediaTypeList
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

    public function testGetArt() : void
    {
        $this->assertSame($this->data['art'], $this->mediaContainer->getArt());
    }

    public function testGetIdentifier() : void
    {
        $this->assertSame($this->data['identifier'], $this->mediaContainer->getIdentifier());
    }

    public function testGetLibrarySectionId() : void
    {
        $this->assertSame($this->data['librarySectionID'], $this->mediaContainer->getLibrarySectionId());
    }

    public function testGetLibrarySectionUuid() : void
    {
        $this->assertSame($this->data['librarySectionUUID'], $this->mediaContainer->getLibrarySectionUuid());
    }

    public function testGetMediaTagPrefix() : void
    {
        $this->assertSame($this->data['mediaTagPrefix'], $this->mediaContainer->getMediaTagPrefix());
    }

    public function testGetMediaTagVersion() : void
    {
        $this->assertSame($this->data['mediaTagVersion'], $this->mediaContainer->getMediaTagVersion());
    }

    public function testGetMetadata() : void
    {
        $this->assertInstanceOf(MediaTypeList::class, $this->mediaContainer->getMetadata());
    }

    public function testGetSize() : void
    {
        $this->assertSame($this->data['size'], $this->mediaContainer->getSize());
    }

    public function testGetThumb() : void
    {
        $this->assertSame($this->data['thumb'], $this->mediaContainer->getThumb());
    }

    public function testGetTitle1() : void
    {
        $this->assertSame($this->data['title1'], $this->mediaContainer->getTitle1());
    }

    public function testGetTitle2() : void
    {
        $this->assertSame($this->data['title2'], $this->mediaContainer->getTitle2());
    }

    public function testGetViewGroup() : void
    {
        $this->assertSame($this->data['viewGroup'], $this->mediaContainer->getViewGroup());
    }

    public function testGetViewMode() : void
    {
        $this->assertSame($this->data['viewMode'], $this->mediaContainer->getViewMode());
    }

    public function testIsAllowSync() : void
    {
        $this->assertSame($this->data['allowSync'], $this->mediaContainer->isAllowSync());
    }

    public function testIsLibrarySectionTitle() : void
    {
        $this->assertSame($this->data['librarySectionTitle'], $this->mediaContainer->isLibrarySectionTitle());
    }

    public function testIsNoCache() : void
    {
        $this->assertSame($this->data['nocache'], $this->mediaContainer->isNoCache());
    }

    private function getTestData() : string
    {
        return (string)file_get_contents(__DIR__ . '/../../../resources/librarySectionContentShowResponse.json');
    }
}