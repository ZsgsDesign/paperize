<?php
    namespace App;
    
    class DB
    {
        public static $host = 'localhost';
        public static $username = 'root';
        public static $password = 'root';
        public static $dbname = 'paperize';

        public static function get()
        {
            $dsn = "mysql:host=".self::$host.";dbname=".self::$dbname.";charset=utf8";
            $db = new \PDO($dsn, self::$username, self::$password);
            return $db;
        }
    }

