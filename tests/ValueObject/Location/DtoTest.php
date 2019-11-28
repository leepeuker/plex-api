<?php declare(strict_types=1);

namespace PlexApi\Tests\ValueObject\Location;

use PHPUnit\Framework\TestCase;
use PlexApi\ValueObject\Location\Dto;

/**
 * @covers \PlexApi\ValueObject\Location\Dto
 */
class DtoTest extends TestCase
{
    private array $data;

    private Dto $dto;

    public function setUp() : void
    {
        $this->data = [
            'id' => 42,
            'path' => 'foobar',
        ];

        $this->dto = Dto::createFromArray($this->data);
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