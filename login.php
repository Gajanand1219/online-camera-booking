<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "camera";


$con = mysqli_connect($server, $username, $password, $dbname);

if (!$con) {
    echo "not connect";
    }
// start
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `login`(`email`, `password`) 
    VALUES ('[$email]','[$password]')";
    


    if (mysqli_query($con, $sql)) {
        echo "Data submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}


// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $email = $_POST['email'];
//     $password  = $_POST['password'];

//     $sql = "INSERT INTO `login`(`email`, `password`) VALUES ('$email','$password')";
//     if (mysqli_query($con, $sql)) {
//         echo "Data submitted successfully";
//     }
    
// }
    
mysqli_close($con);
?>



