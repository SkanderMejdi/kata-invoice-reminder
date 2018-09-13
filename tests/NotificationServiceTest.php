<?php

namespace tests;

use App\Domain\Facture\Facture;
use App\Domain\Notification\AfterDueDateNotification;
use App\Domain\Notification\BeforeDueDateNotification;
use App\Domain\Notification\NotificationService;
use PHPUnit\Framework\TestCase;

class NotificationServiceTest extends TestCase
{
    /**
     * @test
     */
    public function it_returns_a_BeforeDueDateNotification()
    {
        $notificationService = new NotificationService();
        $facture = new Facture(new \DateTimeImmutable('+10 days'));
        $notification = $notificationService->checkFactureForNotification($facture);

        self::assertInstanceOf(BeforeDueDateNotification::class, $notification);
    }

    /**
     * @test
     */
    public function it_returns_a_AfterDueDateNotification()
    {
        $notificationService = new NotificationService();
        $facture = new Facture(new \DateTimeImmutable('-3 days'));
        $notification = $notificationService->checkFactureForNotification($facture);

        self::assertInstanceOf(AfterDueDateNotification::class, $notification);
    }
}