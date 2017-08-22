<?php
include('Database.php');
class index 
{
	
	function __construct()
	{
		$da = new \Database();
		echo $da->connectDatabase("localhost","root","","test");
	}
}

$call  = new index();

?>