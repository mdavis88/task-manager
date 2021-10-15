<?php
include('config/constants.php');
?>


<html>
	<head>
		<title> Task Manager with PHP and MySQL </title>
	</head>
	<body>
		
		<h1>TASK MANAGER</h1>

		<a href="<?php echo SITEURL; ?>">Home</a>

		<h3>Manage Lists Page</h3> 

		<!-- Table to display list starts here -->
		<div class="all-lists">
			<a href="<?php echo SITEURL; ?>add-list.php">Add List</a>

		<table>
			<tr>	
			<th>S.N.</th>
			<th>List Name</th>
			<th>Action</th>
			</tr>

			<tr>
				<td>1. </td>
				<td>To Do</td>
				<td>
					<a href="#">update</a>
					<a href="#">delete</a>
				</td>
			</tr>

				<tr>
				<td>2. </td>
				<td>Doing</td>
				<td>
					<a href="#">update</a>
					<a href="#">delete</a>
				</td>
			</tr>
			
		</table>
	</div>
		<!-- Table to display list ends here -->

	</body>
</html>




