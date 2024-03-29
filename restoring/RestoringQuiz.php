<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Restoring Division Algorithm Quiz</title>
    <style>
        body {
            font-family: Helvetica, sans-serif;
            font-size: 17px;
            width: 100%;
            background: url("https://kjsit.somaiya.edu.in/assets/kjsieit/images/infra/two.jpg") no-repeat center center fixed;
            background-size: cover;
            justify-content: center;
            margin: 0;
        }

        main {
            font-family: Helvetica, sans-serif;
            font-size: 17px;
            align-items: center;
            margin: auto;
            max-width: 800px;
            /* Adjusted width for the main container */
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

        header a{
            text-decoration: none;
            font-weight: bold;
            color: #ffffff;
        }

        .quiz-container {
            width: 100%;
            /* Adjusted width to 100% for better responsiveness */
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            text-align: left;
            /* Adjusted text alignment to left */
            margin: auto;
            height: fit-content;
            margin-bottom: 30px;
            max-width: 600px;
            /* Adjusted max-width for the main container */
        }

        .quiz-container h2 {
            color: #971426;
        }

        .quiz-container p {
            font-size: 17px;
            margin-bottom: 10px;
            /* Added margin for better spacing */
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

        .white {
            color: #971426;
        }

        main {
            width: 80%;
            margin: auto;
        }

        .quiz-container ol {
            padding-left: 10px;
            margin-left: 10px;
            text-align: left;
            margin-top: 0;
            /* Removed margin-top for better alignment */
        }

        .quiz-container ol li {
            margin-bottom: 10px;
            /* Added margin for better spacing between options */
        }

        .submit-button {
            background-color: #971426;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }

        .feedback {
            font-weight: bold;
            margin-top: 5px;
        }

        .feed-button{
            background-color: #971426;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            display: none;
        }

        .score {
            color: green;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <header>
        <a href="../restoring/RestTheo.php" class="back-button">Back</a>
        <h4>Restoring Division Algorithm Quiz</h4>
        <a style="-ms-user-select: none;user-select: none;color: #971426;" class="white">Back</a>
    </header>

    <main><br><br><br>
        <div class="quiz-container">
            <div class="logo">
                <img src="https://kjsit.somaiya.edu.in/assets/kjsieit/images/Logo/kjsieit-logo.svg" alt="Logo 1">
                <img src="https://somaiya.com/assets/somaiya_com/img/logo.png" alt="Logo 2">
            </div>
            <h2>Restoring Division Algorithm Quiz</h2>
            <ol>
                <li>
                    <p>What is the primary objective of the Restoring Division Algorithm demonstrated in the virtual lab?</p>
                    <input type="radio" name="q1" value="a"> Addition of two decimal numbers<br>
                    <input type="radio" name="q1" value="b"> Subtraction of two decimal numbers<br>
                    <input type="radio" name="q1" value="c"> Multiplication of two decimal numbers<br>
                    <input type="radio" name="q1" value="d"> Division of two decimal numbers<br>
                    <p class="feedback"></p>
                </li><br>
                <li>
                    <p>In the provided truth table for the Restoring Division Algorithm, what does the column "Action" represent?</p>
                    <input type="radio" name="q2" value="a"> Intermediate steps during the calculation<br>
                    <input type="radio" name="q2" value="b"> Input values for the algorithm<br>
                    <input type="radio" name="q2" value="c"> Final result of the division<br>
                    <input type="radio" name="q2" value="d"> Number of bits in the binary representation<br>
                    <p class="feedback"></p>
                </li><br>
                <li>
                    <p>What is the purpose of the "Left Shift" operation in the Restoring Division Algorithm?</p>
                    <input type="radio" name="q3" value="a"> Shifting bits to the left to increase precision<br>
                    <input type="radio" name="q3" value="b"> Shifting bits to the right to decrease precision<br>
                    <input type="radio" name="q3" value="c"> Incrementing the quotient and remainder<br>
                    <input type="radio" name="q3" value="d"> Multiplying the divisor and dividend<br>
                    <p class="feedback"></p>
                </li><br>
                <li>
                    <p>How is the quotient adjusted in the Restoring Division Algorithm when the condition A >= M is met?</p>
                    <input type="radio" name="q4" value="a"> Subtracting the divisor (M) from the accumulator (A)<br>
                    <input type="radio" name="q4" value="b"> Adding the divisor (M) to the accumulator (A)<br>
                    <input type="radio" name="q4" value="c"> Incrementing the quotient by 1<br>
                    <input type="radio" name="q4" value="d"> Leaving the quotient unchanged<br>
                    <p class="feedback"></p>
                </li><br>
                <li>
                    <p>What is the significance of the "Count" column in the truth table of the Restoring Division Algorithm?</p>
                    <input type="radio" name="q5" value="a"> Number of bits in the binary representation<br>
                    <input type="radio" name="q5" value="b"> Number of iterations in the algorithm<br>
                    <input type="radio" name="q5" value="c"> Count of leading zeros in the binary representation<br>
                    <input type="radio" name="q5" value="d"> Count of significant digits in the decimal numbers<br>
                    <p class="feedback"></p>
                </li>

            </ol>
            <button class="submit-button" onclick="submitQuiz()">Submit</button>
            <p class="score"></p>
            <a href="restfeed.php"><button class="feed-button">Submit Feedback</button></a>
        </div>
    </main>

    <script>
        function submitQuiz() {
            const answers = {
                q1: 'd',
                q2: 'a',
                q3: 'a',
                q4: 'd',
                q5: 'b',
            };

            let score = 0;
            Object.keys(answers).forEach(question => {
                const selectedOption = document.querySelector(`input[name=${question}]:checked`);
                if (selectedOption) {
                    const userAnswer = selectedOption.value;
                    const correctAnswer = answers[question];
                    const feedback = selectedOption.parentElement.querySelector('.feedback');
                    if (userAnswer === correctAnswer) {
                        score++;
                        feedback.textContent = 'Correct Answer';
                        feedback.style.color = 'green';
                    } else {
                        feedback.textContent = 'Incorrect Answer';
                        feedback.style.color = 'red';
                    }
                }
            });

            const scoreDisplay = document.querySelector('.score');
            scoreDisplay.textContent = `You scored ${score} out of ${Object.keys(answers).length}`;
            scoreDisplay.style.color = 'green';
            document.querySelector('.feed-button').style.display = 'block';
        }
    </script>

</body>

</html>
