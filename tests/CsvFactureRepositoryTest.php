<?php

namespace tests;

use App\Infrastructure\Facture\CsvFactureRepository;
use PHPUnit\Framework\TestCase;

class CsvFactureRepositoryTest extends TestCase
{
    /**
     * @test
     */
    public function it_check_if_correct_class_instanciated()
    {
        $factureRepository = new CsvFactureRepository('./invoices.csv');
        self::assertInstanceOf(CsvFactureRepository::class, $factureRepository);
    }

    /**
     * @test
     */
    public function it_fails_if_file_doesnt_exist()
    {
        $factureRepository = new CsvFactureRepository('./coucou.csv');
        self::expectException();
    }

    /**
     * @test
     */
    public function it_retrieve_an_array_from_csv()
    {
        $factureRepostory = new CsvFactureRepository('./invoices.csv');
        self::assertInstanceOf(CsvFactureRepository::class, $factureRepostory);
    }
}