<?php


namespace App\Domain\Claim\VO;


use App\Domain\AbstractVO;


class ClaimStatus extends AbstractVO
{
    /**
     * @var int
     */
    private $key;

    /**
     * @var string
     */
    private $title;
}