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
            display: flex;
            margin: auto;
            padding: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
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
            font-family: Arial, sans-serif;
            margin-top: 20px;
            height: 100%;
        }

        #experiments a{
            background-color: #971426;
            color: white;
            pointer-events: none;
            border-radius: 10px;
        }

        #experiments a:hover{
            background-color: #971426;
            color: white;
            text-decoration: none;
            border-radius: 10px;
        }

        .experiment-container ol{
            padding-left: 10px;
            margin-left: 10px;
        }

        .style-1 {
 position: fixed;
 z-index: 19;
 right: 20px;
 top: auto;
 bottom: 0px;
 transform: none;
 margin-bottom: 20px;
 }

 .style-2 {
 font-family: Montserrat, sans-serif;
 width: 50px;
 height: 50px;
 display: flex;
 -webkit-box-pack: center;
 justify-content: center;
 -webkit-box-align: center;
 align-items: center;
 cursor: pointer;
 outline: rgb(0, 0, 0) none 0px;
 visibility: hidden;
 opacity: 0;
 transition: opacity 0.2s ease 0s, visibility 0.2s ease 0s;
 background: rgba(0, 0, 0, 0) linear-gradient(rgb(255, 255, 255) 0%, rgb(255, 255, 255) 100%) no-repeat scroll 0% 0% / auto padding-box border-box;
 border: 1px solid rgb(255, 255, 255);
 border-radius: 10px;
 box-shadow: rgba(153, 4, 4, 0.15) 0px 4px 8px 0px;
 }

 .style-3 {
 display: flex;
 width: 2rem;
 height: 32px;
 }

 .style-4 {
 flex-shrink: 0;
 fill: rgb(241, 37, 37);
 pointer-events: none;
 width: 100%;
 height: 32px;
 max-width: 32px;
 max-height: 32px;
 }

 .style-5 {
 position: relative;
 }

 .style-6 {
 position: relative;
 }

 .style-7 {
 position: absolute;
 visibility: hidden;
 width: 0px;
 height: 0px;
 top: -121px;
 left: 756.5px;
 }

 .style-8 {
 position: absolute;
 visibility: hidden;
 width: 0px;
 height: 0px;
 top: -121px;
 left: 756.5px;
 }

 .style-9 {
 flex-direction: column;
 padding: 0px;
 position: relative;
 overflow: hidden;
 word-break: break-word;
 display: flex;
 }

 .style-10 {
 position: absolute;
 top: 0px;
 width: 100%;
 height: 796px;
 background-image: linear-gradient(rgba(153, 4, 4, 0), rgba(153, 4, 4, 0)), url('https://hosting.renderforestsites.com/23709306/1145181/media/13e801226c90236c5c5cb3c3dc234cea.png');
 background-size: auto, cover;
 background-repeat: repeat, no-repeat;
 background-origin: padding-box, padding-box;
 -webkit-background-clip: border-box, border-box;
 background-color: rgba(0, 0, 0, 0);
 background-position: 50% 50%, 50% 50%;
 background-attachment: fixed, fixed;
 }

 .style-11 {
 width: 100%;
 background: white none repeat scroll 0% 0% / auto padding-box border-box;
 padding-top: 0px;
 box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px 0px;
 z-index: 9;
 top: 0px;
 left: 0px;
 right: 0px;
 position: fixed;
 border-bottom: 4px solid #971426;
 }

 .style-12 {
 font-family: Poppins;
 font-weight: 300;
 width: 100%;
 max-width: 1500px;
 position: relative;
 padding: 0px 20px;
 margin: 0px auto;
 z-index: 19;
 display: flex;
 -webkit-box-align: center;
 align-items: center;
 -webkit-box-pack: justify;
 justify-content: space-between;
 box-sizing: border-box;
 
 }

 .style-13 {
 transition: padding 0.3s linear 0s;
 padding: 10px 0px;
 }

 .style-14 {
 margin: 0px;
 padding: 0px;
 }

 .style-15 {
 display: flex;
 align-items: center;
 position: relative;
 }

 .style-16 {
 color: rgb(0, 0, 0);
 text-decoration: none solid rgb(0, 0, 0);
 }

 .style-17 {
 margin: 0px;
 padding: 0px;
 font-size: 0px;
 height: 49.9844px;
 width: 100%;
 overflow: hidden;
 position: relative;
 }

 .style-18 {
 height: auto;
 object-fit: contain;
 border-right: 2px solid #971426;
 padding: 3px;
 position: relative;
 opacity: 1;
 }

 .style-19 {
 display: flex;
 visibility: hidden;
 opacity: 1;
 position: absolute;
 top: 0px;
 left: 0px;
 width: 100%;
 height: 49.9844px;
 -webkit-box-align: center;
 align-items: center;
 -webkit-box-pack: center;
 justify-content: center;
 background: rgba(255, 255, 255, 0.6) none repeat scroll 0% 0% / auto padding-box border-box;
 box-sizing: border-box;
 }

 .style-20 {
 display: flex;
 flex-direction: column;
 -webkit-box-align: center;
 align-items: center;
 -webkit-box-pack: center;
 justify-content: center;
 }

 .style-21 {
 display: flex;
 -webkit-box-align: center;
 align-items: center;
 -webkit-box-pack: end;
 justify-content: flex-end;
 width: 100%;
 margin: 0px 20px;
 }

 .style-22 {
 display: flex;
 -webkit-box-align: center;
 align-items: center;
 padding: 10px 0px;
 }

 .style-23 {
 display: block;
 position: relative;
 }

 .style-24 {
 display: flex;
 align-items: center;
 position: relative;
 }

 .style-25 {
 color: #971426;
 text-decoration: none solid #971426;
 
 text-overflow: ellipsis;
 max-width: 250px;
 display: block;
 overflow: hidden;
 width: 100%;
 padding: 10px;
 white-space: nowrap;
 transition: all ease 0.3s;
 font-size: 23px;
 }

 .style-25:hover{
    font-size:25px;
    border-radius: 6px;
    background-color: rgba(162, 161, 161, 0.484);
 }

 .style-26 {
 display: block;
 position: relative;
 }

 .style-27 {
 display: flex;
 align-items: center;
 position: relative;
 }

 .style-28 {
 color: #971426;
 text-decoration: none solid #971426;
 cursor: pointer;
 text-overflow: ellipsis;
 max-width: 250px;
 display: block;
 overflow: hidden;
 width: 100%;
 padding: 10px;
 white-space: nowrap;
 transition: all ease 0.3s;
 font-size: 23px;
 }

 .style-28:hover{
    font-size: 25px;
    border-radius: 6px;
    background-color: rgba(162, 161, 161, 0.484);
 }
 .style-29 {
 display: block;
 position: relative;
 }

 .style-30 {
 display: flex;
 align-items: center;
 position: relative;
 }

 .style-31 {
 color: #971426;
 text-decoration: none solid #971426;
 cursor: pointer;
 text-overflow: ellipsis;
 max-width: 250px;
 display: block;
 overflow: hidden;
 width: 100%;
 padding: 10px;
 white-space: nowrap;
 transition: all ease 0.3s;
 font-size: 23px;
 }

 .style-31:hover{
    font-size: 25px;
    border-radius: 6px;
    background-color: rgba(162, 161, 161, 0.484);
 }
 .style-32 {
 display: block;
 position: relative;
 }

 .style-33 {
 display: flex;
 align-items: center;
 position: relative;
 }

 .style-34 {
 color: #971426;
 text-decoration: none solid #971426;
 cursor: pointer;
 text-overflow: ellipsis;
 max-width: 250px;
 display: block;
 overflow: hidden;
 width: 100%;
 padding: 10px;
 white-space: nowrap;
 transition: all ease 0.3s;
 font-size: 23px;
 }

 .style-34:hover{
    font-size: 25px;
    border-radius: 6px;
    background-color: rgba(162, 161, 161, 0.484);
 }

 .style-35 {
 display: block;
 position: relative;
 }

 .style-36 {
 display: flex;
 align-items: center;
 position: relative;
 }

 .style-37 {
 color: #971426;
 text-decoration: none solid #971426;
 cursor: pointer;
 text-overflow: ellipsis;
 max-width: 250px;
 display: block;
 overflow: hidden;
 width: 100%;
 padding: 10px;
 white-space: nowrap;
 transition: all ease 0.3s;
 font-size: 23px;
 }

 .style-37:hover{
    font-size: 25px;
    border-radius: 6px;
    background-color: rgba(162, 161, 161, 0.484);
 }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<header>

 <div class="style-1"><button class="style-2">
 <div data-name="arrow_small_top" class="style-3"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" class="style-4">
 <path d="M24.567 20.862a1.619 1.619 0 000-2.283l-7.417-7.433a1.618 1.618 0 00-2.3 0l-7.417 7.433a1.619 1.619 0 000 2.283 1.619 1.619 0 002.283 0l6.283-6.283 6.283 6.283a1.619 1.619 0 002.283 0z" class=""></path>
 </svg></div>
 </button></div>
 <div class="style-5">

 <div class="style-6">
 <div class="style-7"></div>
 <div class="style-8"></div>
 <div class="style-9">
 <div class="style-10"></div>
 <div class="style-11">
 <div type="header" class="style-12">
 <div class="style-13">
 <figure class="style-14">
 <div class="style-15"><a class="style-16" href="/website-maker/preview/lang/site/1145181/">
 <figure class="style-17"><img color="default" width="231.4814814814815" class="style-18" alt="Navbar logo" sizes="[object Object]" src="https://hosting.renderforestsites.com/23709306/1145181/media/b7ecf7f6fdf95b8bb92e3b9212ff33b3.png" /></figure>
 <div class="style-19">
 <div class="style-20"></div>
 </div>
 </a></div>
 </figure>
 </div>
 <div class="style-21">
 <nav class="style-22">
 <div class="style-23">
 <div class="style-24"><a class="style-25"  href="VLab.php">Home</a></div>
 </div>
 <div class="style-26">
 <div class="style-27"><a class="style-28" href="pre.php">Prerequisites</a></div>
 </div>
 <div class="style-26">
 <div class="style-27"><a class="style-28" href="List.php">Experiments</a></div>
 </div>
 <div class="style-29">
 <div class="style-30"><a class="style-31" href="feedpage.php">Feedback</a></div>
 </div>
 <div class="style-32">
 <div class="style-33"><a class="style-34" href="">About Us</a></div>
 </div>
 <div class="style-35">
 <div class="style-36"><a class="style-37" href="logout.php">Logout</a></div>
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