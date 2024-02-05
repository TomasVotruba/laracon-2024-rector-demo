<?php

namespace App\ValueObject;

final class Talk
{
    private $name;
    private $start;
    private $isActive;

    public function __construct(string $name, \DateTimeInterface $start)
    {
        $this->name = $name;
        $this->start = $start;

        $this->isActive = true;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getStart()
    {
        return $this->start;
    }

    private function getIsActive(): bool
    {
        return $this->isActive;
    }
}
