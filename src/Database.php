<?php

namespace Core;

use PDO;
use PDOException;

require 'vendor/autoload.php';

class Database
{
    public function __construct()
    {
        try {
            $pdo = new PDO("mysql:host=". DB_HOST .";dbname=" . DB_NAME ."", DB_USER, DB_PASS);

            // Set the PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Print host information
            echo "Connect Successfully";
        } catch (PDOException $e) {
            die("ERROR: Could not connect. " . $e->getMessage());
        }
    }
}
