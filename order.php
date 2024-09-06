<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "camera";

$con = mysqli_connect($server, $username, $password, $dbname);

if (!$con) {
    echo "not connect";
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $order = $_POST['order'];
    $return = $_POST['return'];
    $address = $_POST['address'];
    $paymentMethod = $_POST['paymentMethod'];

    $sql = "INSERT INTO `order`(`name`, `mobile`, `email`, `order`, `return`, `address`, `paymentMethod`) VALUES 
    ('[$name]','[$mobile]','[$email]','[$order]','[$return]','[$address]','[$paymentMethod]')";
    

    if (mysqli_query($con, $sql)) {
        echo "Data submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}



mysqli_close($con);
?>
