<?php

function get_price($product, $price)
{

		$host = "tcp:localhost17.database.windows.net,1433";
		$user = "patels18@localhost17";
		$pwd  = "Cloudif9bre";
		$db   = "patels18_db";
	    	$conn = new PDO("sqlsrv:Server = $host; Database = $db", $user, $pwd);
	    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql = "SELECT price FROM products WHERE product = '$product'";
       $result = $conn->query($sql);

        if ($result->num_rows > 0) 
	{

             while($row = $result->fetch_assoc()) 
	 	 {
                      $p = $row["price"];
      	  	}
    	}
	 else
		 {
                     $p = null;
		     return NULL;	
        	}

    $conn->close();

if ($p == $price) 
  {
    return "true";
  }
else 
 {
  return "false";

 }

}



?>


