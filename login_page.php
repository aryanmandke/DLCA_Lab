<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url("https://kjsit.somaiya.edu.in/assets/kjsieit/images/infra/two.jpg") no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .error{
            background: #F2DEDE;
            color: #a94442;
            padding: 10px;
            width: 95%;
            border-radius: 5px;
        }
        .login-container {
            width: 300px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Adding transparency to the login box background */
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .login-container h2 {
            color: #971426;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #a70b21;
            border-radius: 3px;
        }
        .login-container input[type="submit"] {
            width: 90%;
            padding: 10px;
            background-color: #971426;
            border: none;
            border-radius: 3px;
            color: white;
            cursor: pointer;
        }
        .login-container input[type="submit"]:hover {
            background-color: #a70b21;
        }
        .logo {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .logo img {
            max-width: 100px;
            max-height: 50px;
        }
        .signup {
            margin-top: 10px;
        }
        .signup a {
            color: #971426;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <img src="https://kjsit.somaiya.edu.in/assets/kjsieit/images/Logo/kjsieit-logo.svg" alt="Logo 1">
            <img src="https://somaiya.com/assets/somaiya_com/img/logo.png" alt="Logo 2">
        </div>
        <h2>Login</h2>
        <form action="login.php" method="post"?>
            <input type="text" id="username" name="username" placeholder="Username" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <?php if(isset($_GET['error'])) { ?>
        <p class="error">
            <?php echo $_GET['error']; ?><?php } ?><p>
            <input type="submit" value="Submit">
        </form>
        
        <div class="signup">
            <p>New user? <a href="register_page.php">Sign Up</a></p>
        </div>
    </div>
</body>
</html>

