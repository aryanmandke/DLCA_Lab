<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sign Up Page</title>
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
        .signup-container {
            width: 300px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Adding transparency to the signup box background */
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .signup-container h2 {
            color: #971426;
        }
        .signup-container input[type="text"],
        .signup-container input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #a70b21;
            border-radius: 3px;
        }
        .signup-container input[type="submit"] {
            width: 90%;
            padding: 10px;
            background-color: #971426;
            border: none;
            border-radius: 3px;
            color: white;
            cursor: pointer;
        }
        .signup-container input[type="submit"]:hover {
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
        .error-message {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <div class="logo">
            <img src="https://kjsit.somaiya.edu.in/assets/kjsieit/images/Logo/kjsieit-logo.svg" alt="Logo 1">
            <img src="https://somaiya.com/assets/somaiya_com/img/logo.png" alt="Logo 2">
        </div>
        <h2>Create an Account</h2>
        <form action="register.php" method="post" onsubmit="return validateForm()">
            <input type="text" id="username" name="username" placeholder="Create Username" required>
            <input type="text" id="email" name="email" placeholder="Email ID" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password" required>
            <span id="password-match-error" class="error-message"></span>
            <?php if(isset($_GET['error'])) { ?>
        <p class="error">
            <?php echo $_GET['error']; ?><?php } ?><p>
            <input type="submit" value="Sign Up">
        </form>
        <div class="signup">
            <p>Already have an account? <a href="login_page.php">Log In</a></p>
        </div>
    </div>

    <script>
        var passwordInput = document.getElementById("password");
        var confirmPasswordInput = document.getElementById("confirm-password");
        var passwordMatchError = document.getElementById("password-match-error");

        function validateForm() {
            if (passwordInput.value !== confirmPasswordInput.value) {
                passwordMatchError.textContent = "Passwords do not match!";
                return false; // Prevent form submission
            } else {
                passwordMatchError.textContent = ""; // Clear the error message
                return true; // Allow form submission
            }
        }

        // Add an event listener to check password match while typing
        confirmPasswordInput.addEventListener("keyup", function () {
            if (passwordInput.value !== confirmPasswordInput.value) {
                passwordMatchError.textContent = "Passwords do not match!";
            } else {
                passwordMatchError.textContent = "";
            }
        });
    </script>
</body>
</html>

