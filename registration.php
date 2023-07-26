<?php
    $name = $_POST['u_name'];
    $email = $_POST['u_email'];
    $number = $_POST['u_number'];
    $password = $_POST['u_pass'];

    // Database connection
    $conn = new mysqli('localhost','root','','registration');
    if ($conn->connect_error) {
        die('Connection Failed : '.$conn->connect_error);
    }
    else {
        $stmt = $conn->prepare("INSERT INTO registration(name, email, phone, password)
        values(?, ?, ?, ?)");
        $stmt->bind_param("ssis", $name, $email, $number, $password);
        $stmt->execute();
        echo "Registration Successfully...";
        $stmt->close();
        $conn->close();
    }
?>