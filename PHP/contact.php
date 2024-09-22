<?php
$server ="localhost";
$password ="";
$username ="root";
$dbname ="camera";
$con = mysqli_connect($server, $username, $password, $dbname);

if (!$con) {
    echo "not connect";
    }
    else
    {
        echo "connect";
    }
// start..!

if($_SERVER["REQUEST_METHOD"] =="POST"){
    $name =$_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

// inser in data database 
$sql="INSERT INTO `contact`(`name`, `email`, `message`) VALUES
 ('$name','$email','$message')";

if (mysqli_query($con, $sql)) {
    echo "Data submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
// Close connection
mysqli_close($con);
?>
