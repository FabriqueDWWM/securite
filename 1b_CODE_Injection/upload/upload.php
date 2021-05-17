<?php

var_dump($_FILES);

$uploadDir = "fichiers/";
$uploadFileName = $uploadDir . $_FILES["fichier"]['name'];

move_uploaded_file($_FILES["fichier"]["tmp_name"], $uploadFileName);
