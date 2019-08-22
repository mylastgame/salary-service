<?php


namespace App\Domain;


use App\Domain\Claim\VO\ClaimType;
use DateTimeImmutable;

class AbstractEntity
{
    public function __construct(array $data = [])
    {
        foreach ($data as $property => $value) {
            if (property_exists(self::class, $property)) {
                $this->$property = $value;
            }
        }
    }
}