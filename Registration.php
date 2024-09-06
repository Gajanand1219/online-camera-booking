<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "camera";

$con = mysqli_connect($server, $username, $password, $dbname);

if (!$con) {
    echo "not connect";
    }
    else
    {
        echo "connect";
    }
// start

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username =$_POST['username'];
    $email = $_POST['email'];
    $password  = $_POST['password'];
    $conformpassword = $_POST['conformpassword'];

    $sql = "INSERT INTO `registration`(`username`, `email`, `password`, `conformpassword`) VALUES
     ('$username','$email','$password','$conformpassword')";
    if (mysqli_query($con, $sql)) {
        echo "Data submitted successfully";
    }
    
}
    
mysqli_close($con);
?>
