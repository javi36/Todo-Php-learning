<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TODO</title>
</head>
<body>
<h2>Meine Todos</h2>
<?php
    include_once "DatabaseManager.php";
    foreach (DatabaseManager::readAllToDOs() as $toDo) 
        echo "<li>$toDo</li>"
?>
<ul>
</ul>
<form action="createTodo.php" method="post">
    <input type="Text" name="toDoName">
    <button type="submit">Erstellen</button>
</form>
</body>
</html>