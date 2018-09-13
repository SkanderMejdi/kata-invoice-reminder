<?php

namespace App\Domain\Notification;

use App\Domain\Facture\Facture;

class NotificationService
{
    /**
     * @param Facture $facture
     * @return Notification|null
     */
    public function checkFactureForNotification(Facture $facture): ?Notification
    {
        if ($facture->getDueDate()->format('d') === (new \DateTimeImmutable('+10 days'))->format('d')) {
            return new BeforeDueDateNotification();
        }
        return null;
    }
}