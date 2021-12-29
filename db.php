<?php

//Your Mysql Config
$servername = "localhost";
$username = "preeti";
$password = "preeti24";
// $dbname = "git_repos_jobportal";
$dbname = "employeehunt";

//Create New Database Connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check Connection
if($conn->connect_error) {
	die("Connection Failed: ". $conn->connect_error);
}
