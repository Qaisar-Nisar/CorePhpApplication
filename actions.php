<?php 
include 'inc/DBConnect.php';

$obj = new dbconnect();


$book_name =$_POST['bk_name'];
$book_price =$_POST['bk_price'];

$insert_sql = "INSERT into books (book_name,price) values('$book_name','$book_price')";

if($obj->query_pass($insert_sql))
{
	echo "Row Successfully inserted. . . ";
	header("Location: ./index.php?status=sucess");
}
else
{
	echo "Error in query";
}

 ?>