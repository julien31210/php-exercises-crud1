<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exo1</title>
</head>
<body>
	<?php 
	 	$connect = mysqli_connect('localhost', 'root', 'root', 'colyseum')or die("pb de connexion au serveur");
		$result = mysqli_query($connect, 'SELECT * FROM clients');
		While($data = mysqli_fetch_assoc($result)){
		 	echo $data['lastName']." ";
		 	echo $data['firstName']."<br/>";
		 }
		$result2 = mysqli_query($connect, 'SELECT * FROM shows');
		While($data = mysqli_fetch_assoc($result2)){
		 	echo "<br/>".$data['title'].": ";
		 	echo $data['performer'];
		 }
	 ?>
		<!--  

		 mysqli_query($connect, "INSERT INTO Persons(FirstName, LastName, Age)VALUES('Glenn', 'Quagmire', 33)");

		 mysqli_query($connect, "UPDATE login SET column1=value1, column2=value2 WHERE some_column=some_value;"); -->
</body>
</html>