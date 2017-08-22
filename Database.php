<?php

     class Database  
    {
    	
    	function __construct()
    	{
    		# code...
    	}

    	     public function connectDatabase($host,$user,$pass,$Database)
		    {
		    	return mysqli_connect($host,$user,"",$Database) or false;
		    }
    

    }
    
/*$da = new Database();
echo $da->connectDatabase("localhost","root","","test");*/
    
?>