<?php

use Bonita\Client;
use Symfony\Component\Dotenv\Dotenv;

require_once __DIR__ . '/../vendor/autoload.php';

$envFilename = '.env';
if (file_exists($envFilename)) {
    $dotenv = new Dotenv();
    $dotenv->load($envFilename);
}


$url = getenv('BONITA_URL');
$username = getenv('BONITA_USERNAME');
$password = getenv('BONITA_PASSWORD');
$userId = getenv('BONITA_USER_ID');

if (!$url || !$username || !$password || !$userId) {
    throw new RuntimeException("Bonita environment variables not configured correctly. Please refer to README.md");
}

$client = new Client($url, $username, $password);
