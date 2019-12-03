<?php declare(strict_types=1);

namespace PlexApi\Tests\Unit\ValueObject\MediaType;

use PHPUnit\Framework\TestCase;
use PlexApi\ValueObject\MediaList;
use PlexApi\ValueObject\MediaType\Movie;

/**
 * @covers \PlexApi\ValueObject\MediaType\Movie
 * @covers \PlexApi\ValueObject\MediaType\MediaType
 * @uses   \PlexApi\ValueObject\Media
 * @uses   \PlexApi\ValueObject\MediaList
 * @uses   \PlexApi\ValueObject\Part
 * @uses   \PlexApi\ValueObject\PartList
 */
class MovieTest extends TestCase
{
    private array $data;

    private Movie $movie;

    public function setUp() : void
    {
        $this->data = json_decode($this->getTestData(), true, 512, JSON_THROW_ON_ERROR)['Metadata'][0];

        $this->movie = Movie::createFromArray((array)$this->data);
    }

    public function testContentRating() : void
    {
        $this->assertSame($this->data['contentRating'], $this->movie->getContentRating());
    }

    public function testGetAddedAt() : void
    {
        $this->assertSame($this->data['addedAt'], $this->movie->getAddedAt());
    }

    public function testGetArt() : void
    {
        $this->assertSame($this->data['art'], $this->movie->getArt());
    }

    public function testGetChapterSource() : void
    {
        $this->assertSame($this->data['chapterSource'], $this->movie->getChapterSource());
    }

    public function testGetCollection() : void
    {
        $this->assertSame($this->data['Collection'], $this->movie->getCollection());
    }

    public function testGetCountry() : void
    {
        $this->assertSame($this->data['Country'], $this->movie->getCountry());
    }

    public function testGetDirector() : void
    {
        $this->assertSame($this->data['Director'], $this->movie->getDirector());
    }

    public function testGetDuration() : void
    {
        $this->assertSame($this->data['duration'], $this->movie->getDuration());
    }

    public function testGetGenre() : void
    {
        $this->assertSame($this->data['Genre'], $this->movie->getGenre());
    }

    public function testGetGuid() : void
    {
        $this->assertSame($this->data['guid'], $this->movie->getGuid());
    }

    public function testGetKey() : void
    {
        $this->assertSame($this->data['key'], $this->movie->getKey());
    }

    public function testGetLastViewedAt() : void
    {
        $this->assertNull($this->movie->getLastViewedAt());
    }

    public function testGetMediaList() : void
    {
        $this->assertInstanceOf(MediaList::class, $this->movie->getMediaList());
    }

    public function testGetOriginallyAvailableAt() : void
    {
        $this->assertSame($this->data['originallyAvailableAt'], $this->movie->getOriginallyAvailableAt());
    }

    public function testGetPrimaryExtraKey() : void
    {
        $this->assertNull($this->movie->getPrimaryExtraKey());
    }

    public function testGetRating() : void
    {
        $this->assertSame($this->data['rating'], $this->movie->getRating());
    }

    public function testGetRatingImage() : void
    {
        $this->assertNull($this->movie->getRatingImage());
    }

    public function testGetRatingKey() : void
    {
        $this->assertSame($this->data['ratingKey'], $this->movie->getRatingKey());
    }

    public function testGetRole() : void
    {
        $this->assertSame($this->data['Role'], $this->movie->getRole());
    }

    public function testGetStudio() : void
    {
        $this->assertSame($this->data['studio'], $this->movie->getStudio());
    }

    public function testGetSummary() : void
    {
        $this->assertSame($this->data['summary'], $this->movie->getSummary());
    }

    public function testGetTagline() : void
    {
        $this->assertSame($this->data['tagline'], $this->movie->getTagline());
    }

    public function testGetThumb() : void
    {
        $this->assertSame($this->data['thumb'], $this->movie->getThumb());
    }

    public function testGetTitle() : void
    {
        $this->assertSame($this->data['title'], $this->movie->getTitle());
    }

    public function testGetTitleSort() : void
    {
        $this->assertNull($this->movie->getTitleSort());
    }

    public function testGetUpdatedAt() : void
    {
        $this->assertSame($this->data['updatedAt'], $this->movie->getUpdatedAt());
    }

    public function testGetViewCount() : void
    {
        $this->assertNull($this->movie->getViewCount());
    }

    public function testGetWriter() : void
    {
        $this->assertSame($this->data['Writer'], $this->movie->getWriter());
    }

    public function testGetYear() : void
    {
        $this->assertSame($this->data['year'], $this->movie->getYear());
    }

    private function getTestData() : string
    {
        return (string)file_get_contents(__DIR__ . '/../../../resources/librarySectionContentMovieResponse.json');
    }
}