<?php
/*
Author: VINEET KUMAR
 */
# var_dump(getenv('MY_ENVVAR'));
# $admin = getenv("mysql_db_name");
#    echo $admin;
define('DB_USERNAME',getenv('MYSQL_USERNAME'));
define('DB_PASSWORD',getenv('MYSQL_PASSWORD'));
define('DB_HOST',getenv('MYSQL_HOST'));
define('DB_PORT',getenv('MYSQL_PORT'));
define('DB_DATABASE',getenv('MYSQL_DATABASE'));
#$host = GETENV('MYSQL_HOST');
#$port = getenv('MYSQL_PORT');
#$db   = $_ENV['MYSQL_USERNAME'];
#$username = getenv('MYSQL_USERNAME');
#echo $username;
#$password = getenv('MYSQL_PASSWORD');
#echo $host."<\br>".$db."<\br>".DB_USERNAME."<\br>".$password;
$con = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
#$con = mysqli_connect(localhost,tests,tests,register);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
