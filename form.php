
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1 style=" text-align: center;"> Successfully submitted!!!</h1>
    
<?php


echo "Dont worry I m there </br>";

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

$name = $_POST['name'];
$email = $_POST['email'];
$type = $_POST['type'];
$checkin = $_POST[ 'checkin'];
$checkout = $_POST['checkout'];
$pax = $_POST['pax']; 

            


//connecting to the database
$servername = "localhost";
$username = "root";
$password = ""; // remember not to give space, it is an empty string
$database= "xthrill";

//Create a connection object

$conn = mysqli_connect($servername, $username, $password, $database);


// Die if connection was successful

if ($conn){



echo "Connection was successful </br>";

}

else {
die("sory we failed to connect: ". mysqli_connect_error());
}




$sql = "INSERT INTO `contact-form` ( `name`, `email`, `type`, `checkin`, `checkout`, `pax`) VALUES ( '$name', '$email', '$type', '$checkin', '$checkout', '$pax')";
//$sql1 = "DELETE FROM `employees` WHERE `employees`.`sno` = 7";

//Execution of the sql query
$result = mysqli_query( $conn, $sql);
//$result = mysqli_query($conn, $sql1);



if ($result) {
echo "The query was inserted successfully ";


}

else 
echo "The query was not inserted successfully";
}

?>

</body>
</html>

    
