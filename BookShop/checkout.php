<?php

session_start();

if(!isset($_SESSION['productid']))
{
	require('dbcontroller.php');
	


}
$page_title ='Checkout';
include('header.html');


if (isset($_GET['item_total'])
		&& ($_GET['item_total'] > 0)
		&& (!empty($_SESSION['cart_item'])))
		{
			require('RegisterData/connect_db.php');
			
			$q=
			"INSERT INTO orders(userid,item_total,orderdate)VALUES("
			.$_SESSION['orderid'].",".$_GET['item_total']."NOW())";
			$r= mysqli_query($con,$q);
			$orderid = mysqli_insert_id($con);
			
			$q = "SELECT * FROM tblproduct WHERE productid IN(";
			foreach($_SESSION['cart_item']as $productid => $value)
			{$q .= $id .',';}
			$q = substr($q,0,-1).') ORDER BY id ASC';
			$r = mysqli_query ($con,$q);
			
			while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC))
		{
			$query = "INSERT INTO order_contents
			(orderid,item_id,quantity,price)
			VALUES($orderid,".$row['id'].",".
			$_SESSION['cart_item'][$row['id']]['quantity'].",".
			$_SESSION['cart_item'][$row['id']]['price'].")";
			$result = mysqli_query($con,$query);
		mysqli_close($con);	
		
		}
		
		echo "<h1>Thanks for your order.
				Your Order Number is " .$orderid. "</h1>";
				
				$_SESSION['cart_item']=NULL;
		
		
		
		}
		else
		{echo'<h1>There are no items in the cart.</h1>';}
		
		echo '<p><a href="EBook.php">Shop</a> |

<a href="index.php"> Home</a> |
<a href="logout.php">Logout</a></p>';

include('footer.html'); 