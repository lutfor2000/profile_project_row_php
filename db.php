<?php
define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE_NAME","lutfor");
$db_connect = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE_NAME);
if (mysqli_connect_errno()) {
   echo "This is Somthing Worring !!!!";
}

?>