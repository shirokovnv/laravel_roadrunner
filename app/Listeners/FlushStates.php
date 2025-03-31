<?php

namespace App\Listeners;

use App\Services\Service;

class FlushStates
{
    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        Service::$data = [];
    }
}
