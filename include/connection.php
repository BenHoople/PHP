<?php

    // PHP Data Objects(PDO) Sample Code:
    
	try{
    	$conn = new PDO("mysql:host=127.0.0.1:54567;dbname=localdb", "azure", "6#vWHD_$");
    }catch(PDOExceotion $e){
    	echo "<p>Connection failed :( </p>";
    	echo $e;
    }


    //$conn = new PDO('mysql:host=localhost;dbname=assignment_part_one', 'root', 'root');
     
    // PHP Data Objects(PDO) Sample Code:
    // $conn = new PDO("sqlsrv:server = tcp:konnecting.database.windows.net,1433; Database = 	assignment_part_one", "Hoople", "Riley_212");
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo {$conn};
?>