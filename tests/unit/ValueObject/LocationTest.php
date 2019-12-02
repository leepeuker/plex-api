<?php declare(strict_types=1);

namespace PlexApi\Tests\Unit\ValueObject;

use PHPUnit\Framework\TestCase;
use PlexApi\ValueObject\Location;

/**
 * @covers \PlexApi\ValueObject\Location
 */
class LocationTest extends TestCase
{
    private array $data;

    private Location $dto;

    public function setUp() : void
    {
        $this->data = [
            'id' => 42,
            'path' => 'foobar',
        ];

        $this->dto = Location::createFromArray($this->data);
    }

    public function testGetId() : void
    {
        $this->assertEquals($this->data['id'], $this->dto->getId());
    }

    public function testGetPath() : void
    {
        $this->assertEquals($this->data['path'], $this->dto->getPath());
    }
}