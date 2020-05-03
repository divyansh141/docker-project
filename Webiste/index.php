<?php
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $mobilenumber = $_POST['mobilenumber'];
    $password = $_POST['password'];

    //Database connection
    $conn = mysqli_connect('172.23.0.2','root','redhat','project') or die(mysqli_error($conn));
    $sqlquery = "INSERT INTO registration(fullname, email, mobilenumber, password) VALUES ('$fullname', '$email', '$mobilenumber', '$password')";
    $user_submit = mysqli_query($conn, $sqlquery) or die(mysqli_error($conn));
    echo "Registration Sucessfully...Redirecting to Login Page in 2 seconds....";
    header("refresh:2; url=Login.html");
?>
