<?php
$pdo = new PDO('mysql:dbname=database_dev;host=mysql', 'tester', 'secret', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$query = $pdo->query('SHOW VARIABLES like "version"');

$row = $query->fetch();

echo 'MySQL version:' . $row['Value'];
phpinfo();