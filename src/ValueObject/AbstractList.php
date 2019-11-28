<?php declare(strict_types=1);

namespace PlexApi\ValueObject;

abstract class AbstractList implements \Countable, \IteratorAggregate, \JsonSerializable
{
    protected array $data;

    protected function __construct()
    {
        $this->data = [];
    }

    public function asArray() : array
    {
        return $this->data;
    }

    public function clear() : void
    {
        $this->data = [];
    }

    public function count() : int
    {
        return count($this->data);
    }

    public function getIterator() : \ArrayIterator
    {
        return new \ArrayIterator($this->data);
    }

    public function jsonSerialize() : array
    {
        return $this->data;
    }
}