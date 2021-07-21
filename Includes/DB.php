<?php

//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
// $DSN="mysql:host='.$cleardb_server';dbname='.$cleardb_db.';";
$ConnectingDB = new PDO("mysql:host=$cleardb_server; dbname=$cleardb_db;",$cleardb_username,$cleardb_password);

$DSN='mysql:host = localhost; dbname=cms4.2.1';
$ConnectingDB = new PDO($DSN,'root','');
?>
