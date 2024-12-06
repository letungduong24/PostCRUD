<?php
class Database {
    private static $connection;

    public static function getConnection() {
        if (!self::$connection) {
            self::$connection = new mysqli('localhost', 'root', '', 'news');
            if (self::$connection->connect_error) {
                die("Kết nối thất bại: " . self::$connection->connect_error);
            }
        }
        return self::$connection;
    }
}
?>
