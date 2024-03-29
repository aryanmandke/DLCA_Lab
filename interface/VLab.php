<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles.css">
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

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 80%;
            max-width: 800px;
            background-color: rgba(255, 255, 255, 0.5); /* Main box with reduced opacity */
            padding: 10px;
            border-radius: 10px;
        }

        .welcome-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            background-color: rgba(246, 246, 246, 0.7); /* Main container with reduced opacity */
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            width: 80%;
            max-width: 800px;
            margin-top: 20px;
            margin-bottom: 20px; /* Add margin bottom for spacing */
        }

        .welcome-text {
            text-align: center;
            color: #971426;
            width: 33%;
        }

        .img{
            width: 33%;
            margin: auto;
        }

        .img img{
            width:80%;
            margin-right: 10px;
            padding: 10px;
            align-self: center;
        }

        #k{
            width:50%;
            align-self: center;
            margin-left: 25%;
        }

        .start-button {
            background-color: #971426;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
        }

        .info-box {
            background-color: rgba(246, 246, 246, 0.7); /* Light red/white color palette with increased transparency */
            color: #333; /* Darker text for better visibility */
            padding: 20px;
            border-radius: 5px;
            margin: 20px 0;
            width: 95%;
        }

        .info-box h2 {
            margin: 0;
            color: #971426;
        }

        .objectives-list {
            list-style-type: disc;
            margin-left: 20px;
        }

        .contributors {
            color: #971426;
            background-color: rgba(246, 246, 246, 0.7); /* Light red/white color palette with increased transparency */
            font-weight: bold;
            padding: 10px;
            border-radius: 10px;
        }

        .info-box ul.objectives-list {
            list-style-type: disc;
            margin-left: 10px;
            color: #333; /* Darker text for better visibility */
        }

        .exit {
            width: 300px;
            padding: 20px;
            margin-top: 10px;

            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .exit input[type="submit"] {
            width: 90%;
            padding: 10px;
            background-color: #971426;
            border: none;
            border-radius: 3px;
            color: white;
            cursor: pointer;
        }
    </style>
    <title>Welcome to Virtual Lab</title>
</head>
<body><br>

<div class="header">
    <div class="img">
    <img class="logo-left" src="https://kjsit.somaiya.edu.in/assets/kjsieit/images/Logo/kjsieit-logo.svg" alt="Logo 1">
    </div>
    <div class="welcome-text">
        <h1>Welcome! <?php  echo $_SESSION['name'] ?></h1>
        <h1>Virtual Lab on Digital Logic and Computer Organization and Architecture
        </h1>
    </div>
    <div class="img">
    <img class="logo-right" src="https://somaiya.com/assets/somaiya_com/img/logo.png" alt="Logo 2" id="k">
</div>
</div><br>

<a href="List.php"><button class="start-button" id="startButton">Start Lab</button></a>

<div class="welcome-container">
    <div class="info-box">
        <h2>Aim</h2>
        <p>Provide hands-on experience in a virtual lab environment.</p>
    </div>
    <div class="info-box">
        <h2>Objectives</h2>
        <ul class="objectives-list">
            <li>Learn important concepts through practical simulations.</li>
            <li>Enhance problem-solving skills.</li>
            <li>Explore various scenarios and outcomes.</li>
        </ul>
    </div>
    <div class="info-box">
        <h2>Comments</h2>
        <p>Users have found this virtual lab very informative and engaging.</p>
    </div>
</div>

<div class="welcome-text contributors">
    <p>Contributors:</p>
    <p>SY A3 Group 3</p>
    <p>63-Raj More</p>
    <p>53-Aryan Mandke</p>
    <p>49-Pranav Lohar</p>
    <p>56-Dhruv Mavani</p>
</div>

<div class="exit">
<form action="logout.php" method="post">
    <input type="submit" id="startButton" value="Log Out">
</form>
</div>
</body>
</html>
