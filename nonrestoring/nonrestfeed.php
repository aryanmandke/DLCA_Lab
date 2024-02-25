<?php  
session_start();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0px;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: 0.6s ease-out;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        #username, #email, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        header a{
            text-decoration: none;
            font-weight: bold;
            color: #ffffff;
        }

        .sub{
            margin: auto;
            display: flex;
            width: 80%;
            padding-top: 10px;
        }

        header {
            display: flex;
            background-color: #971426;
            padding: 20px;
            color: #ffffff;
            width: 100%;
            box-sizing: border-box;
        }

        header h4 {
            margin: auto;
            text-align: center;
        }

        input[type="submit"] {
            background-color: #971426;
            color: #ffffff;
            padding: 10px 20px;
            width: 100%;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            margin: auto;
        }

        #error{
            margin: auto;
            text-align: center;
            width: 100%;
            padding: 8px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .rating {
            margin: 5px;
            text-align: justify;
            display: flex;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
            margin: 0;
        }

        .star{
            margin: 5px;
            text-align: justify;
            display: flex;
            padding: 10px;
            margin: 0;
        }

        .rating {
            display: inline-block;
        }

        .star input[type="radio"] {
            display: none;
        }

        .star input[type="radio"] {
            display: none;
        }

        .star label {
            font-size: 20px;
            color: #ccc;
            cursor: pointer;
            display: inline-block; 
            text-align: center;
            margin: 5px;
            -ms-user-select: none;user-select: none;
        }

        .star label:before {
            content: '\2605'; 
            display: block;
        }

        .star input[type="radio"]:checked + label {
            color: gold;
        }
    </style>
</head>
<body>
<header>
        <a href="NonRestoringQuiz.php" class="back-button">Back</a>
        <h4>Non-Restoring Division Algorithm</h4>
        <a style="-ms-user-select: none;user-select: none;color: #971426;" class="white">Back</a>
    </header><main><br><br><br>

    <form action="feed-nr.php" method="post" id="feedbackForm" onsubmit="return validate();">
        <label for="name">Username:</label>
        <p id= "username"> <?php echo $_SESSION['user']?></p>

        <label for="name">Email:</label>
        <p id = "email"><?php echo $_SESSION['email'] ?></p>

        <label for="feed">Feedback</label>
        <div class="rating">
            <ol>
                <li>
                    <p>How would you rate your overall experience with this virtual lab experiment?</p>
                    <div class="star">
                        <input type="radio" name="q1" value="5" id="s1"> <label for="s1"> Excellent</label>
                        <input type="radio" name="q1" value="4" id="s2"> <label for="s2"> Good</label>
                        <input type="radio" name="q1" value="3" id="s3"> <label for="s3"> Average </label>
                        <input type="radio" name="q1" value="2" id="s4"> <label for="s4"> Below Average</label>
                        <input type="radio" name="q1" value="1" id="s5"> <label for="s5"> Poor </label>
                    </div>
                </li><br>
                <li>
                    <p>Were you able to understand each steps of the given algorithm?</p>
                    <input type="radio" name="q2" value="5"> Yes, I understood each step clearly.<br>
                    <input type="radio" name="q2" value="4"> I understood the steps, but some parts were unclear.<br>
                    <input type="radio" name="q2" value="3"> I found it somewhat challenging to understand the steps.<br>
                    <input type="radio" name="q2" value="2"> No, I had difficulty understanding most of the steps.<br>
                    <input type="radio" name="q2" value="1"> I did not understand any of the steps.<br>
                </li><br>
                <li>
                    <p>Were you able to solve the excerise provided with the experiment?</p>
                    <input type="radio" name="q3" value="5"> Yes, was able to solve the excerise without any diffculty.<br>
                    <input type="radio" name="q3" value="4"> Yes, was able to solve the excerise some diffculty.<br>
                    <input type="radio" name="q3" value="3"> Yes, was able to solve the excerise  with some aid .<br>
                    <input type="radio" name="q3" value="2"> No, was not able to solve the excerise.<br>
                    <input type="radio" name="q3" value="1"> Didn't attempted the excerise.<br>
                </li><br>
            </ol>
    </div><br>

        <label for="feedback">Additional Feedback:</label>
        <textarea id="feedback" name="feedback" rows="4" maxlength="250"></textarea>
        <div class = "sub">
        <input type="submit" value="Submit" id="submit"></div><br>
        <?php if(isset($_GET['error'])) 
            {
           ?> <p id="error"> <?php echo $_GET['error'];} ?></p>

    </form>
</main>

<script>
        function validate() {
            var radios1 = document.getElementsByName("q1");
            var radios2 = document.getElementsByName("q2");
            var radios3 = document.getElementsByName("q3");
            var formValid = false;

            for (var i = 0; i < radios1.length; i++) {
                if (radios1[i].checked) {
                    formValid = true;
                    break;
                }
            }

            for (var i = 0; i < radios2.length; i++) {
                if (radios2[i].checked) {
                    formValid = true;
                    break;
                }
            }

            for (var i = 0; i < radios3.length; i++) {
                if (radios3[i].checked) {
                    formValid = true;
                    break;
                }
            }

            if (!(formValid)) {
                alert("Please select a option!.");
            }

            return formValid;
        }
    </script>
</body>
</html>

       
