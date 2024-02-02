<?php
include('../databaseinfo/database.php');

    header("Location: login_page.php?");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];

            $username = mysqli_real_escape_string($conn, $username); // Sanitize input
            $password = mysqli_real_escape_string($conn, $password); // Sanitize input

            $sql = "SELECT * FROM info WHERE user = '$username'";
            $result = mysqli_query($conn, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                $row_user = mysqli_fetch_assoc($result);
                 
                // Check if username and password match
                if ($row_user['user'] === $username && password_verify($password, $row_user['password'])) {
                    session_start();
                    $_SESSION['user'] = $row_user['user'];
                    $_SESSION['name'] = $row_user['name'];
                    $_SESSION['email'] = $row_user['email'];

                    $path = '../interface/Vlab.php';
                    header("Location: $path");
                    
                } else if ($row_user['user'] === $username || password_verify($password, $row_user['password'])){
                    header("Location: login_page.php? error=Incorrect Username or Password!");
                }}
             else {
                header("Location: login_page.php? error= User not found!");
            }
        
    }
    mysqli_close($conn);

?>