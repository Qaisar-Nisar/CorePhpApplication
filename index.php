
<!-- NAV BAR 
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>  -->
<?php include "inc/header.php"; ?>
<div class="container bg-info" style="padding-top: 30px;padding-bottom: 30px">
	<h1>CRUD Application</h1>
	<hr>

	<div class="row">
		<div class="col-sm-4">
			<h1>Insert Books Form</h1>
			<form role="form" action="actions.php" method="post">
				<div class="form-group">
					<label>Book Name:</label>
					<input type="text" name="bk_name" class="form-control">
				</div>
				<div class="form-group">
					<label>Book Price:</label>
					<input type="text" name="bk_price" class="form-control">
				</div>
				<div>
					<button type="submit" class="btn btn-primary btn-block">
					Add Book</button>
				</div>
			</form>
			
		</div>
		<div class="col-sm-8 ">
			<h1>Display Books Record Table</h1>
			<table class="table">
				<thead>
					<tr>
						<th>Book Name</th>
						<th>Price</th>
						<th>CRUD Action</th>
					</tr>
				</thead>
				<tbody>
<!--PHP -->
<?php 					  $select_sql= "SELECT * from books";
					      $result = $obj->query_pass($select_sql);

                     while($row = mysqli_fetch_array($result)) {
   						 echo "<tr>";
   						 echo "<td>" . $row['book_name'] . "</td>";
   						 echo "<td>" . $row['price'] . "</td>";
 ?>
						<td>
							<a href="editform.php?id=<?php echo $row['book_id']; ?>" class="btn btn-success" role="button">Edit Book</a>
							<a href="#" class="btn btn-danger" role="button">Delete Book</a>
						</td>
				
 <?php 
    					echo "</tr>";
						}
?>
					
				</tbody>
			</table>
			
		</div>
	</div>
	
</div>
</body>
</html>