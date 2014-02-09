<?php
//connect.php
$server	= 'localhost';
$username	= 'vpopuri';
$password	= 'vaishu1813';
$database	= 'vpopuri';

if(!mysql_connect($server, $username,  $password))
{
 	exit('Error: could not establish database connection:'. mysql_error());
}
if(!mysql_select_db($database))
{
 	exit('Error: could not select the database');
}
?>	
