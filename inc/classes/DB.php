<?php

    if (!defined('__CONFIG__')) {
        exit ('Voce nao tem um config');
    }

class DB {

    protected static $con;

    protected function __construct() {

        try {

            self::$con = new PDO( 'mysql:charset=utf8mb4;host=localhost;port=3306;dbname=login_course', 'matheus', '12345' );
            self::$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            self::$con->setAttribute( PDO::ATTR_PERSISTENT, false);

        } catch (PDOException $e) {

            echo "Could not connect to database.";
            exit;

        }

    }

    public static function getConnection() {

        // If this instance was not been started, start it
        if (!self::$con){
            new DB();
        }

        // Return the writeable db $connection
        return self::$con;

    }

}