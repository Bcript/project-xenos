<?php
# db

try
{
	$database = new PDO("mysql:host=localhost;port=3306;dbname=xenos", "task", "Taski12!");
	$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
    $database->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} 
	
catch (PDOException $error)
{
	error_log($error);
	exit($errmsg . "<h6 style=\"color:red;\">Error: ". $error->getMessage(). "</h6>");
}
catch (exception $error)
{
	error_log($error);
	exit($errmsg . "<h6 style=\"color:red;\">Error: UNKNOWN_ERR</h6>");
}
