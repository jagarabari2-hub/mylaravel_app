<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell
 */

// Check if the autoloader file exists and require it
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require __DIR__ . '/../vendor/autoload.php';
} else {
    // Display error message if Composer's autoload is missing
    echo 'Autoload file is missing! Please run "composer install" to install dependencies.';
    exit;
}

// Create the application instance
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Get the HTTP Kernel instance from the app container
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

// Capture the incoming HTTP request
$request = Illuminate\Http\Request::capture();

// Handle the request and generate the response
$response = $kernel->handle($request);

// Send the response to the browser
$response->send();

// Terminate the request and response cycle
$kernel->terminate($request, $response);
