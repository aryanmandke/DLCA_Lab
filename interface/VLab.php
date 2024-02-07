<?php session_start(); ?>
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

        main{
            align-items: center;
        }

        .header {
            display: flex;
            justify-content: space-between;
            width: 80%;
            align-items: center;
            max-width: 1000px;
            background-color: rgba(255, 255, 255, 0.5); /* Main box with reduced opacity */
            padding: 10px;
            border-radius: 10px;
            margin: 10px;
            margin-top: 20px;
        }

        header{
            width: 100%;
            display: flex;
            margin: auto;
            
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
            margin-bottom: 20px;
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



        .nav {
            background-color: white;
            height: min-content;
            width: 100%;
            display: inline-flex;
            height: 100%;
            margin: auto;
  
        }

        .nav1 {
            background-color: white;
            height: min-content;
            width: max-content;
            display: inline-flex;
            padding: 5px;
            padding-left: 5px;
            height: 100%;
            align-self: center;
        }
        .nav2 {
            background-color: white;
            height: min-content;
            display: inline-flex;
            padding: 5px;
            padding-left: 5px;
            height: 100%;
            margin: auto;
            text-align: right;
            margin-top: 10px;
            margin-right: 10px;
        }

        .nav2 h2{
            color: #971426;
            border: 1px solid #971426;
            padding: 5px;
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: right;
            border-radius: 10px;
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

        .logo {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
            margin-left: 5px;
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
        .start-button:hover {
            background-color: #971429;
            color: wheat;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            font-size: 23px;
        }

        .info-box {
            background-color: rgba(246, 246, 246, 0.7); /* Light red/white color palette with increased transparency */
            color: #333; /* Darker text for better visibility */
            padding: 20px;
            border-radius: 5px;
            margin: 20px 0;
            width: 95%;
        }

        .info-box:hover{
            color:white;
            background-color: #971426;
        }

        .info-box h2 {
            margin: 0;
            color: #971426;
            margin-bottom: 10px;
        }

        img.logo{
            height: 80%;
            margin-top: 10px;
        }

        
        .info-box1 {
            background-color: rgba(246, 246, 246, 0.7); /* Light red/white color palette with increased transparency */
            color: #333; /* Darker text for better visibility */
            padding: 20px;
            border-radius: 5px;
            margin: 20px 0;
            width: 95%;
        }

        .info-box1 h2 {
            margin: 0;
            color: #971426;
            margin-bottom: 10px;
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
            font-family: Arial, sans-serif;
            margin-bottom: 20px;
        }

        .info-box ul.objectives-list {
            list-style-type: disc;
            margin-left: 10px;
            color: #333; /* Darker text for better visibility */
        }

        #home a{
            background-color: #971426;
            color: white;
            pointer-events: none;
            border-radius: 10px;
        }

        #home a:hover{
            background-color: #971426;
            color: white;
            text-decoration: none;
            border-radius: 10px;
        }

        #com{
            text-decoration: none;
            width: 100%;
            color: white;
        }

        #com:hover{
            color: white;
        }

        #com-div:hover h2{
            background-color: #971426;
            size: 120%;
            color:white;
        }

        #com1{
            text-decoration: none;
            width: 100%;
            color: white;
        }

        #com1:hover{
            color: white;
        }

        #com-div1:hover h2{
            background-color: #971426;
            size: 120%;
            color:white;
        }
        .Raj{
            text-align: right;
  
            margin-left:0px;
             color: #971426; 
             border: 1px solid #971426 ;
             text-align:right;
             display: flex-start;
        }

        .asd{
            display: inline-block;
        }

    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Welcome to Virtual Lab</title>
</head>
<body>
<div class="nav">
<div class="nav1">
    <img class="logo" src="https://kjsit.somaiya.edu.in/assets/kjsieit/images/Logo/kjsieit-logo.svg" >
    <ul>
       <li id="home"><a href="VLab.php">Home</a></li>
       <li id="prep"><a href="pre.php">Prerequisites</a></li>
       <li id="experiments"><a href="List.php">Experiments</a></li>
       <li id="us"><a href="">About Us</a></li>
       <li id="logout"><a href="logout.php">Logout</a></li>
    </ul>
</div>
<div class="nav2">
   <h2> Welcome! <?php  echo $_SESSION['name'] ?></h2>
</div>
</div>
</header>


<div class="header">
    <div class="img">
    <img class="logo-left" src="https://kjsit.somaiya.edu.in/assets/kjsieit/images/Logo/kjsieit-logo.svg" alt="Logo 1">
    </div>
    <div class="welcome-text">
        <h1>Virtual Lab on Digital Logic and Computer Organization and Architecture
        </h1>
    </div>
    <div class="img">
    <img class="logo-right" src="https://somaiya.com/assets/somaiya_com/img/logo.png" alt="Logo 2" id="k">
</div>
</div><br>

<div class="welcome-container">
    <div class="info-box1">
        <h2>Aim</h2>
        <p>Provide hands-on experience in a virtual lab environment.</p>
    </div>
    <div class="info-box1">
        <h2>Objectives</h2>
        <ul class="objectives-list">
            <li>Learn important concepts through practical simulations.</li>
            <li>Enhance problem-solving skills.</li>
            <li>Explore various scenarios and outcomes.</li>
        </ul>
    </div>

    <a href="feedpage.php" id="com1">
    <div class="info-box" id="com-div1">
        <h2>User Feedback</h2>
        <p>Click to view overall review.</p>
    </div>
    </a>
</div>

<div class="welcome-text contributors">
    <p>Contributors:</p>
    <p>SY A3 Group 3</p>
    <p>63-Raj More</p>
    <p>53-Aryan Mandke</p>
    <p>49-Pranav Lohar</p>
    <p>56-Dhruv Mavani</p>
</div>

</body>
</html>
