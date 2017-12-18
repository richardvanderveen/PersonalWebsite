<?php include 'database.php'; ?>

<?php

// create a variable
$naam=$_POST['naam'];
$email=$_POST['email'];
$bericht=$_POST['bericht'];

//Execute the query


mysqli_query($connect,"INSERT INTO contact (naam,email,bericht) VALUES ('$name','$email','$bericht')");

	if(mysqli_affected_rows($connect) > 0){
	echo "<p>Bericht opgeslagen</p>";
	echo "<a href="index.php">Ga terug</a>";
} else {
	echo "Bericht niet opgeslagen<br />";
	echo mysqli_error ($connect);
}