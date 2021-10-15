<?php

	include('config/constants.php');

?>
<html>
<head>
<body>
	<title>Manger with PHP and MySQL</title>


</body>

<h1> Task Manager </h1>


<!-- menu starts here -->
<div class="menu">

	<a href="<?php echo SITEURL; ?>">home</a>

	<a href ="#"> To Do </a>
	<a href="#">doing</a>
	<a href="#"done></a>


	<a href="<?php echo SITEURL; ?>manage-list.php">Manage List</a>
</div>
<!-- menu ends here -->

<!-- task starts here -->

<div class="all-task">
	<a href="#"> Add Task </a> 
	<table>

		<tr>
			<th>S.N.</th>
			<th>Task Name</th>
			<th>Priorirty</th>
			<th>Deadline</th>
			<th>Actions</th>
		</tr>

		<tr>
			<td>1. </td>
			<td>Design a website </td>
			<td>Medium</td>
			<td>18/10/22</td>
			<td>
				<a href="#">Update</a>

				<a href="#">Delete</a>

			</td>

		</tr>


	<table>


<!-- task ends here -->


</head>
</html>
