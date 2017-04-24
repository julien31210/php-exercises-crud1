<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exos</title>
</head>
<body>
	<?php 
	//EXO 1
	echo "EXO 1: "."<br/>";
	$connect = mysqli_connect('localhost', 'root', 'root', 'colyseum')or die("pb de connexion au serveur");
	$result = mysqli_query($connect, 'SELECT * FROM clients');
	While($data = mysqli_fetch_assoc($result)){
		echo $data['lastName']." ";
		echo $data['firstName']."<br/>";
	}

	//EXO 2
	echo "<br/>"."EXO 2: ";
	$result2 = mysqli_query($connect, 'SELECT * FROM showTypes');
	While($data = mysqli_fetch_assoc($result2)){
		echo "<br/>".$data['type'];
	}

	//EXO 3
	echo "<br/><br/>"."EXO 3: "."<br/>";
	$result3 = mysqli_query($connect, 'SELECT * FROM clients LIMIT 20');
	While($data = mysqli_fetch_assoc($result3)){
		echo $data['lastName'], " ".$data['firstName']."<br/>";
	}

	//EXO 4
	echo "<br/><br/>"."Exo4: "."<br/>";
	$result4 = mysqli_query($connect, 'SELECT clients.firstName as firstName FROM clients JOIN cards ON clients.cardNumber=cards.cardNumber WHERE cards.cardTypesId=1');
	While($data = mysqli_fetch_assoc($result4)){
		echo $data['firstName'], " ".$data['lastName']."<br/>";
	}

	//EXO 5
	echo "<br/><br/>"."Exo5: "."<br/>";
	$result5 = mysqli_query($connect, 'SELECT lastName, firstName FROM clients WHERE lastName  LIKE "M%" ORDER BY lastName ASC');
	While($data = mysqli_fetch_assoc($result5)){
		echo $data['lastName']," ".$data['firstName']."<br/>";
	}

	//EXO 6
	echo "<br/><br/>"."Exo6 "."<br/>";	 
	$result6 = mysqli_query($connect, 'SELECT * FROM shows ORDER BY title ASC');
	While($data = mysqli_fetch_assoc($result6)){
		echo $data['title']," par ".$data['performer'], " le ".$data['date'], " à ".$data['startTime']."<br/>";
	}

	//EXO 7
	echo "<br/><br/>"."Exo7 "."<br/>";
	$result7 = mysqli_query($connect, 'SELECT * FROM clients LEFT OUTER JOIN cards ON clients.cardNumber=cards.cardNumber ORDER BY lastName ASC');
	While($data = mysqli_fetch_assoc($result7)){
		echo "Nom : ".$data['lastName'], "<br/>"."Prénom : ".$data['firstName'], "<br/>"."Date de naissance : ".$data['birthDate'], "<br/>"."Numéro de carte : ".$data['cardNumber']."<br/>"."Carte de fidélité : "; 
		if ($data['cardTypesId']!=1) {
			echo "Non";
		}
		else{
			echo "Oui";
		}
		echo"<br/><br/>";
	}
	?>
</body>
</html>