<?php

function get_price($product, $price)
{

		$host = "tcp:localhost17.database.windows.net,1433";
		$user = "patels18@localhost17";
		$pwd  = "Cloudif9bre";
		$db   = "patels18_db";
	    	$conn = new PDO("sqlsrv:Server = $host; Database = $db", $user, $pwd);
	    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql = ("SELECT price FROM products WHERE product = '$product'");
	$result = $conn->query($sql);
	$exe = $result->rowcount();
	$row = $result->fetch();

        if ($exe == 0) 
	{
		$p = null;
		return NULL;
    	}
	 else
		{
                    $p = $row["price"];	
        	}
	$conn = NULL;

	if ($p == $price) 
  	{
    		return true;
  	}
	else 
 	{
  		return false;

	}

}
?>


