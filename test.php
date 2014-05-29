<?php
//Getting the org_ids from tbl_org
$db_hostname="localhost";
$db_username="root";
$db_password="";
$db_databasename="test";

echo "hello";


$con=mysql_connect($db_hostname,$db_username,$db_password);
if(!$con)
{
	die("Database connection failed miserably: " . mysql_error());
}
$db=mysql_select_db($db_databasename,$con);
if(!$db)
{
	die("Database selection also failed miserably: " . mysql_error());
}
$result = mysql_query("INSERT INTO test (id) values (1)", $con);
if(!$result)
{

	die("mysql query failed miserably: " . mysql_error());
}



mysql_close();
?>
