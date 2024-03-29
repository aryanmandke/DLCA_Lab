<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Virtual Lab</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            width: 100%;
            background: url("https://kjsit.somaiya.edu.in/assets/kjsieit/images/infra/two.jpg") no-repeat center center fixed;
            background-size: cover;
            justify-content: center;
            margin: 0;
        }

        main {
            font-family: Arial, sans-serif;
            align-items: center;
            margin: auto;
        }

        header {
            display: flex;
            background-color: #971426; 
            padding: 20px;
            color: #ffffff;
            width: 100%;
            box-sizing: border-box;
        }
        
        header h4{
            margin: auto;
            text-align: center;
        }

        header a{
            text-decoration: none;
            font-weight: bold;
            color: #ffffff;
        }
        
        .experiment-container {
            width: 300px;
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

        .logo {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
        .logo img {
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

        .experiment-container ol{
            padding-left: 10px;
            margin-left: 10px;
        }
    </style>
</head>
<body>
   <header>
    <a href="../interface/VLab.php" class="back-button">Back</a>
    <h4>List of Experiments</h4>
    <a style="-ms-user-select: none;user-select: none;color: #971426;" class="white" >Back</a>
</header> 

<main><br><br><br>
    <div class="experiment-container">
        <div class="logo">
            <img src="https://kjsit.somaiya.edu.in/assets/kjsieit/images/Logo/kjsieit-logo.svg" alt="Logo 1">
            <img src="https://somaiya.com/assets/somaiya_com/img/logo.png" alt="Logo 2">
        </div>
        <h2>List of Experiments</h2>
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