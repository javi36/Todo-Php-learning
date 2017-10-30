<?php
include_once "DatabaseManager.php";
/**
 * Created by PhpStorm.
 * User: jmart
 * Date: 30.10.2017
 * Time: 15:21
 */
$toDoName = $_POST["toDoName"];
DatabaseManager::saveTodo($toDoName);
DatabaseManager::readAllToDOs();
echo("createTodo has been called, the todo name is: ".$toDoName);