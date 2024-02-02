<?php
include('../databaseinfo/database.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
        $secret = password_hash($password,PASSWORD_DEFAULT);
    
            $sql = "INSERT INTO `info` (`user`, `email` ,`password`,`name`)
                    VALUE ('$username','$email','$secret','$name' )";
            $sql1 = "INSERT INTO `feedback` (`user`)
                     VALUE ('$username')";
            
            try{
                mysqli_query($conn, $sql);
                mysqli_query($conn, $sql1);
                header("Location: register_page.php? error=You have registered successfully");
                exit();
            }
            catch(mysqli_sql_exception){
                header("Location: register_page.php? error=That username is already taken!");
                exit();
            }
        }

    mysqli_close($conn);
?>
