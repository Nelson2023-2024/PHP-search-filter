<?php
DEFINE("HOSTNAME", "localhost");
DEFINE("USERNAME", "root");
DEFINE("DBPASS", "");
DEFINE("DBNAME", "crud");

$dbcon = new mysqli(HOSTNAME, USERNAME, DBPASS, DBNAME);
 
if($dbcon->connect_error) echo "connection failed";


?>