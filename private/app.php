<?php

use Dotenv\Dotenv;

session_start();
require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Läd die .env Config Datei
 * @var Dotenv
 */
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

/**
 * PDO
 */
require __DIR__ . '/app/config/pdo.php';

/**
 * Mail Verbindung
 */
require __DIR__ . '/app/config/mail.php';

/**
 * Functions
 */
require __DIR__ . '/app/functions/functions.php';

/**
 * Handler
 */
require __DIR__ . '/app/handler/handler.php';

/**
 * Fehlermeldungen
 */
if ($_ENV['ENVIRONMENT'] == 'development') {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
}
