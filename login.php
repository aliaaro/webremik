<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "remik";

$conn = mysqli_connect($server, $user, $pass, $database);

$email = $_POST['email'];
$password = $_POST['password'];

if (!$conn){
    die("<script>alert('Connection Failed.')</script>");
} else{
    $stmt = $conn->prepare("select * from user where email = ? ");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows > 0){
        $data = $stmt_result->fetch_assoc();
        if($data['password'] === $password){
            echo "<div align='center'><h1> Menuju Halaman Admin... </h1></div>";
            echo "<meta http-equiv='refresh' content='1;url=home.php'>";
           //header("Location: adminpage.php");
        }else {
            echo "<h2?> Invalid Email Or Password </h2>";
        }
    }else{
        echo "<h2?> Invalid Email Or Password </h2>";
    }
}

?>