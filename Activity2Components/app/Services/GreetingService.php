<?php

namespace App\Services;

class GreetingService {
    public function greet($name) {
        return "Hello, $name! Welcome to the system.";
    }
}