	<?php
	session_start();


	include "php/read.php"; ?>
	<!DOCTYPE html>
	<html>

	<head>
		<title>Create</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

	</head>

	<body>
		<div class="container">
			<div class="box">
				<h4 class="display-4 text-center"><?php echo "Welcome " . $_SESSION['username'] ; ?></h4><br>
				<?php if (isset($_GET['success'])) { ?>
					<div class="alert alert-success" role="alert">
						<?php echo $_GET['success']; ?>
					</div>
				<?php } ?>
				<?php if (mysqli_num_rows($result)) { ?>
					<table class="table table-striped">
						<thead class="titre">
							<tr>
								<th scope="col">#</th>
								<th scope="col">Name</th>
								<th scope="col">Email</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$i = 0;
							while ($rows = mysqli_fetch_assoc($result)) {
								$i++;
							?>
								<tr class="data">
									<th scope="row"><?= $i ?></th>
									<td><?= $rows['name'] ?></td>
									<td><?php echo $rows['email']; ?></td>
									<td><a href="update.php?id=<?= $rows['id'] ?>" class="far fa-edit"></a>
										<a href="php/delete.php?id=<?= $rows['id'] ?>" class="fas fa-trash-alt"></a>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				<?php } ?>
				<div class="link-right">
					<a href="index.php" class="btn btn-primary ">Create</a>
					<hr>
					<a class="btn btn-primary" href="../logout.php">Logout</a>
				</div>
			</div>
		</div>
	</body>

	</html>