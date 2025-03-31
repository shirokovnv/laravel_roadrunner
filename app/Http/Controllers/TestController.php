<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\Service;
use Illuminate\Support\Str;

class TestController
{
    public function test(): array
    {
        Service::$data[] = Str::random(10);

        return [
            'data' => Service::$data
        ];
    }
}
