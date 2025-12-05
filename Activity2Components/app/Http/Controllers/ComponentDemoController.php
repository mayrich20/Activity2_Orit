<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GreetingService;
use App\Services\InfoService;
use App\Services\MathService;
use App\Services\LoggerService;



class ComponentDemoController extends Controller
{
    public function index(
        GreetingService $greet,
        MathService $math,
        InfoService $info,
        LoggerService $message
    ) {
        return [
            "info" => $info->getSystemInfo(),
            "greeting" => $greet->greet("Student"),
            "sum" => $math->add(10, 20),
        ];
    }
}
