
<?php
 include('config/constants.php');
?>


<html>
	<head>
		<title>Task manager with PHP and MySQL</title>
	</head>
<body>

	<h1>Task Manager</h1>	

	<a href= "<?php echo SITEURL; ?>">Home</a>
	<a href="<?php echo SITEURL; ?>manage-list.php">Manage List</a>


	<h3>Add List Page</h3>

	<!-- Form to add list starts here -->
	
<form method="POST" action="add-list.php">
	
	<table>
		<tr>
			<td>List Name: </td>
			<td><input type="text" name="list_name" placeholder="type list name here" /></td>
		</tr>
		<tr>
			<td>List Description</td>
			<td><textarea name="list_description" placeholder="type list Description here"></textarea></td>

		</tr>

		<tr>
			<td><input type="submit" name="submit" value="SAVE"></td>

		</tr>
	</table>

</form>


	<!-- Form to add list ends here -->
</body>
</html>


<?php

//check whether the form is submitted or not
	if(isset($_POST['submit']))
	{
		// echo "Form Submitted!";

		//get the values from form and save it in variables

		$list_name = $_POST['list_name'];
		$list_description = $_POST["list_description"];

		//connect the database
$servername = "localhost";	
$username = "mdavis";
$password = "davis132";

		$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());

		//check database connection
		/*
		if ($conn=true)
		{
			echo "database connected";
		}
	}
	*/

	// select database connection 

	$db_select = mysqli_select_db($conn, DB_NAME);

	//check database connection
/*
	if($db_select==true)
	{
		echo "database selected";
	}

*/
	//sql query to insert data into database
$sql = "INSERT INTO tbl_lists set
list_name = '$list_name',
list_decsription = '$list_description'
";

//execute query and insert into databse


$res = mysqli_query($conn, $sql);

//check query execution

if (mysqli_query($conn, $sql)){
	echo "new record created";
} else {
	echo "error.";
	mysqli_error($conn);
}

}
?>