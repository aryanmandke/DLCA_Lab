<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Logic Gates Quiz</title>
    <style>
        body {
            font-family: Helvetica, sans-serif;
            width: 100%;
            background: url("https://kjsit.somaiya.edu.in/assets/kjsieit/images/infra/two.jpg") no-repeat center center fixed;
            background-size: cover;
            justify-content: center;
            margin: 0;
        }

        main {
            font-family: Helvetica, sans-serif;
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
            font-size: 16px; /* Adjusted font size to make it consistent */
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

        .score {
            color: green;
            font-weight: bold;
            margin-top: 20px;
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
    </style>
</head>

<body>
    <header>
        <a href="../logictable/LogicTheo.php" class="back-button">Back</a>
        <h4>Logic Gates Quiz</h4>
        <a style="-ms-user-select: none;user-select: none;color: #971426;" class="white">Back</a>
    </header>

    <main><br><br><br>
        <div class="quiz-container">
            <div class="logo">
                <img src="https://kjsit.somaiya.edu.in/assets/kjsieit/images/Logo/kjsieit-logo.svg" alt="Logo 1">
                <img src="https://somaiya.com/assets/somaiya_com/img/logo.png" alt="Logo 2">
            </div>
            <h2>Logic Gates Quiz</h2>
            <ol>
                <li>
                    <p>Which gate is known as the universal gate?</p>
                    <input type="radio" name="q1" value="a"> NAND<br>
                    <input type="radio" name="q1" value="b"> OR<br>
                    <input type="radio" name="q1" value="c"> AND<br>
                    <input type="radio" name="q1" value="d"> None<br>
                    <p class="feedback"></p>
                </li><br>
                <li>
                    <p>How does a logic gate function?</p>
                    <input type="radio" name="q2" value="a"> Using the flow of electric current<br>
                    <input type="radio" name="q2" value="b"> Spontaneously<br>
                    <input type="radio" name="q2" value="c"> By using energy from a chemical reaction <br>
                    <input type="radio" name="q2" value="d"> None of the above<br>
                    <p class="feedback"></p>
                </li><br>
                <li>
                    <p>Which of the following are the arithmetic logic gates?</p>
                    <input type="radio" name="q3" value="a"> X-OR <br>
                    <input type="radio" name="q3" value="b"> X-NOR <br>
                    <input type="radio" name="q3" value="c"> Both<br>
                    <input type="radio" name="q3" value="d"> None <br>
                    <p class="feedback"></p>
                </li><br>
                <li>
                    <p>Which of the following signifies a NOT gate?</p>
                    <input type="radio" name="q4" value="a"> 1 (input) -> 0 (output) <br>
                    <input type="radio" name="q4" value="b"> 1,0 (input) -> 1 (output) <br>
                    <input type="radio" name="q4" value="c"> 0,0 (input) -> 0 (output) <br>
                    <input type="radio" name="q4" value="d"> None <br>
                    <p class="feedback"></p>
                </li><br>
                <li>
                    <p>What is the boolean operation performed by an OR gate?</p>
                    <input type="radio" name="q5" value="a"> Equivalent of addition <br>
                    <input type="radio" name="q5" value="b"> Equivalent of multiplication <br>
                    <input type="radio" name="q5" value="c"> Equivalent of division <br>
                    <input type="radio" name="q5" value="d"> Equivalent of subtraction <br>
                    <p class="feedback"></p>
                </li><br>

            </ol>
            <button class="submit-button" onclick="submitQuiz()">Submit</button>
            <p class="score"></p>
            <a href="logicfeed.php"><button class="feed-button">Submit Feedback</button></a>
        </div>
    </main>

    <script>
        function submitQuiz() {
            const answers = {
                q1: 'a',
                q2: 'a',
                q3: 'c',
                q4: 'a',
                q5: 'a',
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
