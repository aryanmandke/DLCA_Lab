<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Experiment: Aim, Theory, and Procedure</title>
    <style>
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
        <a href="../interface/List.php" class="back-button">Back</a><h1>Experiment 1: Logic Gates and IC</h1> 
        <a style="-ms-user-select: none;user-select: none;color: #971426;" class="white" >Back</a>
    </header>

    <main>
        <section id="aim">
            <h2>Aim</h2>
            <p>Logic gates are fundamental in digital systems, executing logical operations on binary inputs to produce binary outputs. Their aims include enabling basic computations, information processing, and circuit design. By adhering to Boolean algebra principles, they facilitate error detection and correction, forming the building blocks for complex systems through configurations of these elementary gates.
            </p>
        </section>

        <section id="theory">
            <h2>Theory</h2>
            <p>Logic gates are fundamental building blocks of digital circuits. They perform Boolean functions on one or more binary inputs to produce a single binary output based on certain logical conditions.The basic operation of each Logic Gate are:</p>
            <ol><li><b>AND Gate:</b>
                <ul>
                    <li>Output is '1' only if all inputs are '1'.</li>
                    <li>Boolean expression: Y = A AND B.</li>
                </ul>
                </li><br>
            <li><b>OR Gate:</b>
                <ul>
                    <li>Output is '1' if any input is '1'.</li>
                    <li>Boolean expression: Y = A OR B.</li>
                </ul>
            </li><br>
            <li><b>NOT Gate:</b>
                 <ul>
                    <li>Output is the inverse of the input.</li>
                    <li>Boolean expression: Y = NOT A.</li>
                </ul>
            </li><br>
            <li><b>NOR Gate:</b>
                <ul>
                    <li>Output is '0' only if any input is '1'.</li>
                    <li>Boolean expression: Y = NOT (A OR B).</li>
                </ul>
            </li><br>
            <li><b>XOR Gate:</b>
                 <ul>
                    <li>Output is '1' if inputs differ (one '1', one '0').</li>
                    <li>Boolean expression: Y = A XOR B.</li>
                </ul>
            </li></ol><br>
            </section>
        </section>       
           <section id="Simulation">
            <h2>Simulation</h2>
            <a href = "LogicTable.php"><button class="start-button" id="startButton">Start Simulation</button></a> 
       <br>
       <h2>Quiz</h2>
       <a href = "LogicQuiz.php"><button class="start-button" id="startButton">Start Quiz</button></a> 
       <section id="Simulation">
        <h2>Excerise</h2>
        <a href = "LogicEx.php"><button class="start-button" id="startButton">Start Excerise</button></a> 
      <br><br>
    </section>

        
    </main>
</body>
</html>
