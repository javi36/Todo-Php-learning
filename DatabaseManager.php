<?php
include_once "SQLite3";
/**
 * Created by PhpStorm.
 * User: jmart
 * Date: 30.10.2017
 * Time: 15:36
 */
class DatabaseManager
{
    private const connectionString = "ToDoDb.sqlite";
    private static $connection;

    public static function getConnection(): SQLite3
    {
        if (!self::$connection) {
            self::$connection = new SQLite3(self::connectionString) or die("failed connection Database");
        }
        return self::$connection;
    }

    public static function saveTodo($name)
    {
        $connection = self::getConnection();
        $statement = $connection->prepare("insert into TODO VALUES (NULL, ?)");
        $statement->bindParam($name);
        $statement->execute();
    }

    public static function readAllToDOs(){
        $connection = self::getConnection();
        $result = sqlite_array_query($connection, "Select name from TODO", SQLITE_ASSOC);
        var_dump($result);
    }
}