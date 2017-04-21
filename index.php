<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exos</title>
</head>
<body>
	<?php 
		echo "EXO 1: "."<br/>";
	 	$connect = mysqli_connect('localhost', 'root', 'root', 'colyseum')or die("pb de connexion au serveur");
		$result = mysqli_query($connect, 'SELECT * FROM clients');
		While($data = mysqli_fetch_assoc($result)){
		 	echo $data['lastName']." ";
		 	echo $data['firstName']."<br/>";
		 }
		 echo "<br/>"."EXO 2: ";
		$result2 = mysqli_query($connect, 'SELECT * FROM showTypes');
		While($data = mysqli_fetch_assoc($result2)){
		 	echo "<br/>".$data['type'];
		 }

		 echo "<br/><br/>"."EXO 3: "."<br/>";
		$result3 = mysqli_query($connect, 'SELECT * FROM clients LIMIT 20');
		While($data = mysqli_fetch_assoc($result3)){
			echo $data['firstName']."<br/>";
		}

	 ?>
		<!--  

		 mysqli_query($connect, "INSERT INTO Persons(FirstName, LastName, Age)VALUES('Glenn', 'Quagmire', 33)");

		 mysqli_query($connect, "UPDATE login SET column1=value1, column2=value2 WHERE some_column=some_value;"); -->
</body>
</html>