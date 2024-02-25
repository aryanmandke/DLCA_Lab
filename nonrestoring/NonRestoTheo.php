<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Experiment: Aim, Theory, and Procedure</title>
    <style>
        /* CSS Styles */
        body, h1, h2, p {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #971426; 
            width: 100%;
            padding: 20px;
            color: #ffffff;
        }


        header a{
            text-decoration: none;
            font-weight: bold;
            color: #ffffff;
        }


        main {
            width: 80%;
            margin: 0 auto;
        }

        section {
            margin-top: 30px;
        }

        h2 {
            border-bottom: 1px solid #333;
            padding-bottom: 5px;
        }

        p {
            margin-top: 10px;
        }

        #flowchart {
            text-align: left;
            flex-direction: column;
            align-items: flex-start;
        }

        #flowchart h2 {
            margin-bottom: 10px;
        }

        #flowchart img {
            max-width: 110%;
            padding-top: 20px;
            align-self: flex-start;
            margin-left: 13%;
        }

        #Simulation button {
            background-color: #971426;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 10px 20px;
            font-size: 18px;
            width: 75%;
            max-width: 100%;
            cursor: pointer;
            margin-left: 13%;
            margin-top: 2%;
        }

    </style>
</head>
<body>
    <header>        
        <a href="../interface/List.php" class="back-button">Back</a><h1>Experiment 4: Non-Restoring Division Algorithm</h1> 
        <a style="-ms-user-select: none;user-select: none;color: #971426;" class="white" >Back</a>
    </header>

    <main>
        <section id="aim">
            <h2>Aim</h2>
            <p>The aim of the non-restoring division algorithm is to perform integer division without restoring a partial remainder. It efficiently finds the quotient and remainder through iterative subtractions and comparisons between the dividend and divisor, aiming to achieve faster and less hardware-intensive division operations compared to other algorithms.</p>
        </section>

        <section id="theory">
            <h2>Theory</h2>
            <p>Non - Restoring division algorithm computes binary division via systematic subtraction, shifting, and bit comparisons between dividend and divisor. In this approach, the divisor is repeatedly subtracted from the dividend while tracking the sign of the result. If the result is positive, the subtraction proceeds, and the quotient digit is set; otherwise, the addition takes place. This method continues until the entire dividend is processed, resulting in the quotient and remainder. The non-restoring division offers a hardware-efficient and faster alternative to restoring division algorithms.
            </p>
        </section>

        <section id="procedure">
            <h2>Procedure</h2>
            <p><ol>
                <li><b>Initialization:</b>
                <ul>
                    <li>Identify the dividend (Q) and divisor (M).</li>
                    <li>Initialize a variable called as 0.</li>
                    <li>A counter variable (n) should be set to the number of bits in the dividend.</li>
                </ul>
                </li><br>
                <li><b>Iterative Process:</b>
                    <ul>
                        <li>Start a loop that iterates n times (number of bits in the dividend).</li>
                        <li>Shift the accumulator A left by 1 bit, setting the least significant bit to the next bit of the dividend.</li>
                        <ol>
                            <li>Shift both A and Q left by one bit.</li>
                            <li>Compare the leftmost bits of A and the divisor:</li>
                            <ul>
                                <li>If A is positive or zero, subtract the divisor from A ans set he least significant bit of the quotient to 0.</li>
                                <li>If the result is negative, add the divisor to A and set the least significant bit of the quotient to 1.</li>
                            </ul>
                        </ol>
                    </ul>
                    </li><br>
                    <li><b>Finalization:</b>
                        <ul>
                            <li>After completing iterations, the value in the A after the iteration represents the remainder and the value in Q is the quotient.
                            </li>
                        </ul>
                        </li>

            </ol></p>
        </section>
            <section id="flowchart">
            <h2>Flowchart</h2>
           <img src="../images/Flow-Chart-for-Non-Restoring-division.png" width = "70%" alt = "Flowchart">
           </section>

           <section id="Simulation">
            <h2>Simulation</h2>
            <a href = "NonRestoring.php"><button class="start-button" id="startButton">Start Simulation</button></a> 
       </section> <section id="Simulation">
        <h2>Quiz</h2>
        <a href = "NonRestoringQuiz.php"><button class="start-button" id="startButton">Start Quiz</button></a> 
        <section id="Simulation">
            <h2>Excerise</h2>
            <a href = "NonRestoringEx.php"><button class="start-button" id="startButton">Start Excerise</button></a> 
       <br><br>

        
    </main>
</body>
</html>
