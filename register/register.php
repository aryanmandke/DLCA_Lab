<?php
include('../databaseinfo/database.php');

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
        $secret = password_hash($password,PASSWORD_DEFAULT);
    
            $sql = "INSERT INTO `info` (`user`, `email` ,`password`)
                    VALUE ('$username','$email','$secret' )";
            
            try{
                mysqli_query($conn, $sql);
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
