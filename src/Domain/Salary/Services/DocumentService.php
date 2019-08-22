<?php


namespace App\Domain\Report\Services;


use App\Domain\Claim\Entity\Claim;

class DocumentService
{
    public function createDocument(Claim $claim)
    {
        $document = Document::create();

        $document->setClaim($claim);
        $document->setPayments($payments);
        $document->createDistribution();

        return $document;
    }
}