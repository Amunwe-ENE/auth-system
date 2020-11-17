<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = 'EAN@afm123';
$db = 'flossycakes';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
