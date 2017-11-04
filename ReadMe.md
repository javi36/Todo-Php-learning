##Setup
Um dieses Tool verwenden zu können muss die sqlite Erweiterung aktiviert sein.
Um dies zu tun müssen (unter Windows) in der php.ini Datei die folgenden Zeilen eingefügt werden:

` extension_dir = "ext"` 

`extension=php_sqlite3.dll`

Falls die php.ini Datei nicht existieren sollte, kann einfach die Datei php.ini-production aus dem Php-Installationsordner kopiert und umbenannt werden. 