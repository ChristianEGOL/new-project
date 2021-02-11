<?php
try {
    $pdo = new PDO(
        'mysql:host=' . $_ENV['DB_HOST'] . ';dbname=' . $_ENV['DB_DATABASE'] . '',
        $_ENV['DB_USERNAME'],
        $_ENV['DB_PASSWORD'],
        array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
        )
    );
    $mitglieder->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}
