<?php include 'database.php'; ?>

<?php
$connect=mysqli_connect('localhost','root','usbw','database_richard');
if(mysqli_connect_errno($connect))
  {
		echo 'Failed to connect';
  }
//create a variable
$naam = (isset($_POST["naam"])) ? $_POST["naam"] : "" ;
$email = (isset($_POST["email"])) ? $_POST["email"] : "" ;
$bericht = (isset($_POST["bericht"])) ? $_POST["bericht"] : "" ;


//Execute the query

	mysqli_query($connect,"INSERT INTO contact (naam,email,bericht) VALUES ('$naam','$email','$bericht')");

	if(!mysqli_affected_rows($connect) > 0){
		echo "test";
  			}
else {
	echo "niet bewaard<br />";
	echo mysqli_error ($connect);
		}
?>
