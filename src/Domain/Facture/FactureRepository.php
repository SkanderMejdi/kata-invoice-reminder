<?php

namespace App\Domain\Facture;

interface FactureRepository
{
    /**
     * @return Facture[]|null
     */
    public function getUnpaid(): ?array;
}