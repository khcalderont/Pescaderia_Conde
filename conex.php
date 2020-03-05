

<?php

	$base = new PDO('mysql:host=localhost; dbname=pescaderia', 'root', '');
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base ->exec("SET CHARACTER SET utf8");

?>