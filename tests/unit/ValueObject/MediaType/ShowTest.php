<?php declare(strict_types=1);

namespace PlexApi\Tests\Unit\ValueObject\MediaType;

use PHPUnit\Framework\TestCase;
use PlexApi\ValueObject\MediaType\Show;

/**
 * @covers \PlexApi\ValueObject\MediaType\Show
 * @covers \PlexApi\ValueObject\MediaType\MediaType
 * @uses   \PlexApi\ValueObject\Media
 * @uses   \PlexApi\ValueObject\MediaList
 * @uses   \PlexApi\ValueObject\Part
 * @uses   \PlexApi\ValueObject\PartList
 */
class ShowTest extends TestCase
{
    private array $data;

    private Show $show;

    public function setUp() : void
    {
        $this->data = json_decode($this->getTestData(), true, 512, JSON_THROW_ON_ERROR)['Metadata'][0];

        $this->show = Show::createFromArray((array)$this->data);
    }

    public function testGetAddedAt() : void
    {
        $this->assertSame($this->data['addedAt'], $this->show->getAddedAt());
    }

    public function testGetArt() : void
    {
        $this->assertSame($this->data['art'], $this->show->getArt());
    }

    public function testGetBanner() : void
    {
        $this->assertSame($this->data['banner'], $this->show->getBanner());
    }

    public function testGetChildCount() : void
    {
        $this->assertSame($this->data['childCount'], $this->show->getChildCount());
    }

    public function testGetContentRating() : void
    {
        $this->assertSame($this->data['contentRating'], $this->show->getContentRating());
    }

    public function testGetDuration() : void
    {
        $this->assertSame($this->data['duration'], $this->show->getDuration());
    }

    public function testGetGenres() : void
    {
        $this->assertSame($this->data['Genre'], $this->show->getGenres());
    }

    public function testGetGuid() : void
    {
        $this->assertSame($this->data['guid'], $this->show->getGuid());
    }

    public function testGetIndex() : void
    {
        $this->assertSame($this->data['index'], $this->show->getIndex());
    }

    public function testGetKey() : void
    {
        $this->assertSame($this->data['key'], $this->show->getKey());
    }

    public function testGetLeafCount() : void
    {
        $this->assertSame($this->data['leafCount'], $this->show->getLeafCount());
    }

    public function testGetOriginallyAvailableAt() : void
    {
        $this->assertSame($this->data['originallyAvailableAt'], $this->show->getOriginallyAvailableAt());
    }

    public function testGetRating() : void
    {
        $this->assertSame($this->data['rating'], $this->show->getRating());
    }

    public function testGetRatingKey() : void
    {
        $this->assertSame($this->data['ratingKey'], $this->show->getRatingKey());
    }

    public function testGetRoles() : void
    {
        $this->assertSame($this->data['Role'], $this->show->getRoles());
    }

    public function testGetStudio() : void
    {
        $this->assertSame($this->data['studio'], $this->show->getStudio());
    }

    public function testGetSummary() : void
    {
        $this->assertSame($this->data['summary'], $this->show->getSummary());
    }

    public function testGetTheme() : void
    {
        $this->assertNull($this->show->getTheme());
    }

    public function testGetThumb() : void
    {
        $this->assertSame($this->data['thumb'], $this->show->getThumb());
    }

    public function testGetTitle() : void
    {
        $this->assertSame($this->data['title'], $this->show->getTitle());
    }

    public function testGetUpdatedAt() : void
    {
        $this->assertSame($this->data['updatedAt'], $this->show->getUpdatedAt());
    }

    public function testGetViewedLeafCount() : void
    {
        $this->assertSame($this->data['viewedLeafCount'], $this->show->getViewedLeafCount());
    }

    public function testGetYear() : void
    {
        $this->assertSame($this->data['year'], $this->show->getYear());
    }

    private function getTestData() : string
    {
        return (string)file_get_contents(__DIR__ . '/../../../resources/librarySectionContentShowResponse.json');
    }
}