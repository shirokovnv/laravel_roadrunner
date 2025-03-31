<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\Service;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;

class TestController
{
    public function testMemoryLeaks(): array
    {
        Service::$data[] = Str::random(10);

        return [
            'data' => Service::$data
        ];
    }

    public function testHeavyLogic(Session $session): JsonResponse
    {
        $sleepTime = mt_rand(0, 100);

        usleep($sleepTime);

        return new JsonResponse([
            'sleep_time' => $sleepTime,
            'message' => 'Request handled after delay!',
        ]);
    }
}
