<?php declare(strict_types=1);

namespace PlexApi\Tests\Unit\ValueObject\MediaType;

use PHPUnit\Framework\TestCase;
use PlexApi\ValueObject\MediaType\Movie;
use PlexApi\ValueObject\MediaType\MovieList;

/**
 * @covers \PlexApi\ValueObject\MediaType\MovieList
 * @covers \PlexApi\ValueObject\AbstractList
 * @uses   \PlexApi\ValueObject\MediaType\Movie
 * @uses   \PlexApi\ValueObject\Media
 * @uses   \PlexApi\ValueObject\MediaList
 * @uses   \PlexApi\ValueObject\Part
 * @uses   \PlexApi\ValueObject\PartList
 */
class MovieListTest extends TestCase
{
    public function testAdd() : void
    {
        $list = MovieList::create();

        $list->add($this->createMock(Movie::class));

        $this->assertCount(1, $list);
    }

    public function testCreateFromArray() : void
    {
        $data = json_decode($this->getTestData(), true, 512, JSON_THROW_ON_ERROR)['Metadata'];

        $this->assertCount(1, MovieList::createFromArray((array)$data));
    }

    private function getTestData() : string
    {
        return (string)file_get_contents(__DIR__ . '/../../../resources/librarySectionContentMovieResponse.json');
    }
}