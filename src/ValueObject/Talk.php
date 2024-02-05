<?php

namespace App\ValueObject;

final class Talk
{
    private $name;
    private $start;

    public function __construct(string $name, \DateTimeInterface $start)
    {
        $this->name = $name;
        $this->start = $start;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getStart()
    {
        return $this->start;
    }
}
