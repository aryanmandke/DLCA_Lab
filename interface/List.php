<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
            font-family: Arial, sans-serif;
            background: url("https://kjsit.somaiya.edu.in/assets/kjsieit/images/infra/two.jpg") no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }


        main {
            font-family: Arial, sans-serif;
            align-items: center;
            margin: auto;
        }

        header{
            width: 100%;
            margin: 0 auto;
            display: flex;
        }

        .nav {
            background-color: white;
            height: min-content;
            width: 100%;
            display: inline-block;
            height: 100%;
            position:relative;
            padding: 5px;
        }
        .nav ul{
           display: inline-block;
            height: 100%;
        }
        .nav ul li{
            display: inline-block;
            height: 100%;
            padding: 10px;
            margin-top: 10px;
        }
        .nav ul li a{
            text-decoration: none;
            color: #971426;
            height: 100%;
            width: 100px;
            font-size: 24px;
            padding: 10px;
            
        }

        .nav ul li a:hover{
            text-decoration: underline;
            text-decoration-style: 3px;
        }

        .experiment-container {
            width: 400px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            margin: auto;
            height: fit-content;
            margin-bottom: 30px;
        }
        .experiment-container h2 {
            color: #971426;
            font-weight: bold;
        }

        .experiment-container p {
            font-size: 14px;
        }

        .experiment-container a {
            font-size: 17px;
            text-decoration: none;
            font-weight: bold;
            color: #971426;
        }

        .experiment-container a:hover {
            font-size: 22px;
            text-decoration: none;
            font-weight: bold;
            color: purple;
        }

        
        .logo1 {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        .logo {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
            margin-top: 10px;
            margin-left: 5px;
        }

        .logo1 img {
            max-width: 100px;
            max-height: 50px;
        }

        .white{
            color:#971426;
        }

        main {
            width: 80%;
            margin: auto;
        }

        #experiments a{
            background-color: #971426;
            color: white;
            pointer-events: none;
        }

        #experiments a:hover{
            background-color: #971426;
            color: white;
            text-decoration: none;
        }

        .experiment-container ol{
            padding-left: 10px;
            margin-left: 10px;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<header>
<div class="nav">
    <img class="logo" src="https://kjsit.somaiya.edu.in/assets/kjsieit/images/Logo/kjsieit-logo.svg" >
    <ul>
       <li id="home"><a href="VLab.php">Home</a></li>
       <li id="experiments"><a href="List.php">Experiments</a></li>
       <li id="us"><a href="">About Us</a></li>
       <li id="logout"><a href="logout.php">Logout</a></li>
    </ul>
</div>
</header>

<main><br><br><br>
    <div class="experiment-container">
        <div class="logo1">
            <img src="https://kjsit.somaiya.edu.in/assets/kjsieit/images/Logo/kjsieit-logo.svg" alt="Logo 1">
            <img src="https://somaiya.com/assets/somaiya_com/img/logo.png" alt="Logo 2">
        </div>
        <h2>List of Experiments</h2><br>
        <ol>
            <li>
                <a href="../logictable/LogicTheo.php">Logic Gates and IC</a>
                <p>This experiment aims to produce the desired output by using two inputs in a logic gate</p>
            </li><br>
            <li>
                <a href="../booth/BoothTheo.php">Booths Algorithm</a>
                <p>This experiment aims to calculate the multiplication of two numbers using Booths Algorithm</p>
            </li><br>
            <li>
                <a href="../restoring/RestTheo.php">Restoring Division Algorithm</a>
                <p>This experiment aims to calculate the division of two numbers using Restoring Division Algorithm</p>
            </li><br>
            <li>
                <a href="../nonrestoring/NonRestoTheo.php">Non-Restoring Division Algorithm</a>
                <p>This experiment aims to calculate the division of two numbers using Non-Restoring Division Algorithm</p>
            </li>
        </ol>
    </div>
</main>
</body>
</html>