<?php
include('database.php');

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
                if ($row_user['user'] === $username && $row_user['password'] === $password) {
                    $_SESSION['user'] = $row_user['user'];
                    $_SESSION['password'] = $row_user['password'];
                    
                    header("Location: Vlab.html");
                    exit();
                    
                } else if ($row_user['user'] === $username || $row_user['password'] === $password){
                    header("Location: login_page.php? error=Incorrect username or password");
                    exit();
                }}
             else {
                header("Location: login_page.php? error= User not found!");
                    exit();
            }
        
    }

?>