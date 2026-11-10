<?php

require_once(__DIR__ . '/../classes/Pdo_methods.php');

$pdo = new PdoMethods();

$sql = "SELECT * FROM files ORDER BY file_name";

return $pdo->selectNotBinded($sql);