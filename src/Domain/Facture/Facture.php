<?php

namespace App\Domain\Facture;

class Facture
{

    /** @var \DateTimeImmutable */
    private $dueDate;

    /**
     * Facture constructor.
     * @param \DateTimeImmutable $dueDate
     */
    public function __construct(\DateTimeImmutable $dueDate)
    {

        $this->dueDate = $dueDate;
    }

    public function getDueDate(): \DateTimeImmutable
    {
        return $this->dueDate;
    }
}