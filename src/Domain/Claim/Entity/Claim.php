<?php


namespace App\Domain\Claim\Entity;


use App\Domain\Claim\VO\ClaimStatus;
use App\Domain\Claim\VO\ClaimType;
use App\Domain\Client\Entity\Client;
use App\Domain\User\Entity\User;
use DateTimeImmutable;

class Claim
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var ClaimType
     */
    private $claimType;

    /**
     * @var DateTimeImmutable
     */
    private $date;

    /**
     * @var User
     */
    private $user;

    /**
     * @var Client
     */
    private $client;

    /**
     * @var ClaimStatus
     */
    private $status;

    /**
     * @var ClaimItem[]
     */
    private $items;
}