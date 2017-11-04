<?php
/**
 * Created by PhpStorm.
 * User: jmart
 * Date: 30.10.2017
 * Time: 15:36
 */
class DatabaseManager
{
    private const SQLITE_DATABASE_FILE = "ToDoDb.sqlite";
    private static $connection;

    public static function getConnection(): SQLite3
    {
        if (!self::$connection) {
            self::$connection = new SQLite3(self::SQLITE_DATABASE_FILE) or die("failed connection Database");
        }
        return self::$connection;
    }

    public static function saveTodo($name)
    {
        $connection = self::getConnection();
        $statement = $connection->prepare('insert into TODO (NAME) VALUES (:ToDoName)');
        $statement->bindParam(":ToDoName", $name);
        var_dump($statement->execute());
    }

    public static function readAllToDOs(): array {
        $todoIndex = 0;
        $toDos = array();
        $connection = self::getConnection();
        $statement = $connection->prepare("Select name from TODO");
        $result = $statement->execute();
        while($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $toDos[$todoIndex] = $row["name"];
            $todoIndex++;
        }
        var_dump($toDos);
        return $toDos;
        
    }
}