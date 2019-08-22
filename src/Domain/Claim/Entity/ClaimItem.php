<?php


namespace App\Domain\Claim\Entity;


use App\Domain\Depot\Entity\Item;

class ClaimItem
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var Claim
     */
    private $claim;

    /**
     * @var Item
     */
    private $item;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var float
     */
    private $weight;

    /**
     * @var float
     */
    private $boxes;

    /**
     * @var float
     */
    private $price;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return Claim
     */
    public function getClaim(): Claim
    {
        return $this->claim;
    }

    /**
     * @param Claim $claim
     */
    public function setClaim(Claim $claim): void
    {
        $this->claim = $claim;
    }

    /**
     * @return Item
     */
    public function getItem(): Item
    {
        return $this->item;
    }

    /**
     * @param Item $item
     */
    public function setItem(Item $item): void
    {
        $this->item = $item;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     */
    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return float
     */
    public function getBoxes(): float
    {
        return $this->boxes;
    }

    /**
     * @param float $boxes
     */
    public function setBoxes(float $boxes): void
    {
        $this->boxes = $boxes;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
}