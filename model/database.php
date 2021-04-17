<?php 
class Database {
    private static $dsn = 'mysql:host=vkh7buea61avxg07.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=pl56lrjwtahad29s';
    private static $username = 'zafrlwly99j4w8o6';
    private static $password = 'o2h9qa7wjhonwn5g';
    private static $db;

    private function __construct() {}

    public static function getDB() {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn,
                                    self::$username,
                                    self::$password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                include('../errors/database.php');
                exit();
            }
        }
        return self::$db;
    }
}
?>