<?php

// require __DIR__.'/../vendor/autoload.php';
// $dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__."/../");
// $dotenv->load();

//Get Heroku Remote connection information
$remotedb_url = parse_url(getenv("REMOTE_DB"));

$remotedb_server = $remotedb_url["host"];
$remotedb_username = $remotedb_url["user"];
$remotedb_password = $remotedb_url["pass"];
$remotedb_db = substr($remotedb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($remotedb_server, $remotedb_username, $remotedb_password, $remotedb_db);  //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}
session_start();

?>
