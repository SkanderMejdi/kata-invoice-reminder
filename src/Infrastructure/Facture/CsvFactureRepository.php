<?php

namespace App\Infrastructure\Facture;

use App\Domain\Facture\Facture;
use App\Domain\Facture\FactureRepository;
use Webmozart\Assert\Assert;

class CsvFactureRepository implements FactureRepository
{
    /** @var string */
    private $file;

    /**
     * CsvFactureRepository constructor.
     * @param string $file
     */
    public function __construct(string $file)
    {
        Assert::fileExists($file);

        $this->file = $file;
    }

    /**
     * @return Facture[]|null
     */
    public function getUnpaid(): ?array
    {
        return null;
    }
}