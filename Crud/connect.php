<?php

 $dbhost = "localhost:3306";
 $dbuser = "root";
 $dbpass = "1234";
 $db = "crudoperation";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
    if ($conn) 
        echo  "connection received ... "
    

 
   
?>