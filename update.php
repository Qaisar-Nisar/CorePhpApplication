
 <?php 
include 'inc/DBConnect.php';

$obj = new dbconnect();


$book_name =$_POST['book_name'];
$book_price =$_POST['book_price'];
$id=$_POST['id'];

$insert_sql = "UPDATE books SET book_name ='$book_name',price = '$book_price' where  book_id = $id "; 

if($obj->query_pass($insert_sql))
{
	echo "Row Successfully inserted. . . ";
	
	header("Location: ./index.php?status=sucess1");
}
else
{
	echo "Error in query";
}

 ?>