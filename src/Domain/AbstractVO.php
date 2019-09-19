<?php


namespace App\Domain;



class AbstractVO
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