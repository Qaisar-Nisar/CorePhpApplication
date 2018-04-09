<?php 
   include "inc/header.php";

   $id =$_GET['id'];

   echo $id;

   $SelectQuery = "SELECT * from books where book_id=$id";

    $result = $obj->query_pass($SelectQuery);
   ?>

  <div class="container bg-info " style="padding-top: 20px;padding-top: 20px">

  	<h1>Edit Book Form</h1>
  	
  	<form role="form" action="update.php" method="post">
<?php 

    while ($row = mysqli_fetch_assoc($result)) {
      # code...
    ?>
  		<input type="hidden" name="id" value="<?php echo $row['book_id']; ?>">
  		<div class="form-group">
  			<label>Book Name</label>
  			<input type="text" name="book_name" class="form-control" placeholder="<?php echo $row['book_name']; ?>">
  		</div>
  		<div class="form-group">
  			<label>Price</label>
  			<input type="text" name="book_price" class="form-control" placeholder="<?php echo $row['price']; } ?>">
  		</div>
  		<button type="submit" class="btn bg-success btn-block">Update</button>
  	</form>


  </div>

</body>
</html>