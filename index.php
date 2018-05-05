<?php 
	$con = new PDO('mysql:dbname=query;host=localhost','root','');
	$statement = $con->prepare("select * from customers");
	if (isset($_GET['q'])) {
	$q = $_GET['q'];
	//$statement = $con->prepare("select * from customers where name like '%q%'");
	$statement = $con->prepare("
    select * from customers where
    name like '%$q%' or
    email like '%$q%'

    ");

}
	$statement->execute();
	$customer = $statement->fetchAll();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
		<div class="container mt-3">
			<div class="card">
				<div class="card-header">
					<h2>All Customer</h2>
				</div>
				<div class="card-body">
					<form class="col-md-6 my-3 mx-auto" >
						<div class="input-group">
							<input type="text" name="q" class="form-control" placeholder="search.........">
							<div class="input-group-append">
								<button type="submit" class="btn btn-outline-primary">Search</button>
							</div>
						</div>
					</form>


					<table class="table table-borderd">
						<tr>
							<th>Name</th>
							<th>Email</th>
						</tr>
						<?php foreach ($customer as $result): ?>
							<tr>
								<td><?php echo $result['name'];?></td>
								<td><?php echo $result['email'];?></td>
							</tr>
						<?php endforeach ?>
					</table>
				</div>
			</div>
		</div>
</body>
</html>