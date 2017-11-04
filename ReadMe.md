# Todo-PHP-Learning

Dies ist ein kleines PHP Projekt das verwendet wird um die Grundlagen von PHP zu erlernen.
Das Ziel ist es eine simple TODO-App zu erstellen

## Setup

### Php
Um dieses Tool verwenden zu können muss die sqlite Erweiterung aktiviert sein.
Um dies zu tun müssen (unter Windows) in der php.ini Datei die folgenden Zeilen eingefügt werden:

` extension_dir = "ext"` 

`extension=php_sqlite3.dll`

Falls die php.ini Datei nicht existieren sollte, kann einfach die Datei php.ini-production aus dem Php-Installationsordner kopiert und umbenannt werden. 

### Datenbank

Um deine eigene Sqlite Datenbank anzulegen, erstelle einfach die Datei `ToDoDb.sqlite` im Projektverzeichnis und führe das Script `db/setup.sql` darin aus.

Mit Hilfe des Testdatenscripts (`db/testdata.sql`) kannst du ganz einfach deine neu erstellte Datenbank mit ersten Daten füllen.

Falls du einen anderen Speicherort für diene SqLite Datenbank verwenden willst, musst du die Konstante `Databasemanager::SQLITE_DATABASE_FILE` entsprechend anpassen.
