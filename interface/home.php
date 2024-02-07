<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome page</title>
  <style>
  *{
    margin: 0;
    padding: 0;
}

body{
    margin: 0;
    padding: 0;
    display: flex;
    height: 100vh;
    font-family: sans-serif;
}

.mid{
    width: 0.5%;
    background-color: rgb(48, 45, 45);
    display: block;
   
}

img.logo{
    position: absolute;
    top: 0px;
    left: 0px;
    margin: 5px;
    border: 2px solid #971426;
    padding: 8px;
    border-radius: 20px;
}

    

.left{
    background-color: #EFE7DA;
    position: relative;
    
    width: 66%;
    display: flex;
    align-items: center;
    justify-content: center;
}

 .container{    
   position: relative;
    text-align: center;
    border-bottom: 3px solid black;
    
    
 }


.text1{
   
    display: block;
    font-size: 100px;
    font-weight: 700;
    letter-spacing: 7px;
    margin-bottom: 20px; 
    background: #EFE7DA;
      
    position: relative;
    animation: text 3s 1;
} 


  @keyframes text {
    0%{
        color: #EFE7DA;
        margin-bottom: -90px;
       
    }
    30%{
        letter-spacing: 25px;
        margin-bottom: -90px;
    } 
    
} 

.text2{
   margin-right: 20px;
    color:#971426;
    font-size: 90px;
    font-weight: 600;
    -webkit-text-stroke-width: 2px;
    -webkit-text-stroke-color: black;
}

.text3{
   
    font-family: Georgia ;
    font-size: 55px;
    font-weight: 400;
   
    
}

.right{
    background-color:  #971426 ;   
    width: 35.5%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}




.get{
    font-family: sans-serif;
    margin-bottom: 35px;
    display: block;
    font-size: 40px;
    font-weight: 600;
    letter-spacing: 5px;
}


       .button {
          align-items: center;
          appearance: none;
          background-color: #fff;
          border-radius: 24px;
          border-style: none;
          box-shadow: rgba(0, 0, 0, .2) 0 3px 5px -1px, rgba(0, 0, 0, .14) 0 6px 10px 0, rgba(0, 0, 0, .12) 0 1px 18px 0;
          box-sizing: border-box;
          color: #3c4043;
          cursor: pointer;
          display: inline-flex;
          fill: currentcolor;
          font-family: "Google Sans", Roboto, Arial, sans-serif;
          font-size: 14px;
          font-weight: 500;
          height: 48px;
          justify-content: center;
          letter-spacing: .25px;
          line-height: normal;
          min-width: 160px; /* Minimum width to ensure consistent size */
          max-width: 100%; /* Adjusts to content */
          overflow: visible;
          padding: 2px 24px;
          position: relative;
          text-align: center;
          text-transform: none;
          transition: box-shadow 280ms cubic-bezier(.4, 0, .2, 1), opacity 15ms linear 30ms, transform 270ms cubic-bezier(0, 0, .2, 1) 0ms;
          user-select: none;
          -webkit-user-select: none;
          touch-action: manipulation;
          width: auto;
          will-change: transform, opacity;
          z-index: 0;
          margin: 10px;
      }

      .button:hover {
          background: #F6F9FE;
          color: #174ea6;
      }

   .container3{
   display: flex;
   justify-content: center;
   align-items: center;
     border: 3px solid black; 
    height: 500px;
   
   }

</style>
</head>
<body>
    
    <div  class="left">
        <img class="logo"  src="https://kjsit.somaiya.edu.in/assets/kjsieit/images/Logo/kjsieit-logo.svg"> 
   <div class="container">
    <span class="text1">Welcome To..</span>
    <span class="text2">DLCOA</span>
    <span class="text3"> Virtual Lab </span>
   </div>


    </div>

   <div class="mid"> </div>
   
    <div  class="right">
        <div class="container3">
       <div class="container2">
     <span class="get"> Get Started</span>
     <a href="../register/register_page.php"><button class="button" id="register" role="button">REGISTER</button></a>
     <a href="../login/login_page.php"><button class="button" id="login" role="button">LOG IN</button></a>
    </div>
    </div>
</div>
</body>
</html>