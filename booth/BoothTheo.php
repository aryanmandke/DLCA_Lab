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
        <a href="../interface/List.php" class="back-button">Back</a><h1>Experiment 2: Booth's Algorithm</h1> 
        <a style="-ms-user-select: none;user-select: none;color: #971426;" class="white" >Back</a>
    </header>
    </header>

    <main>
        <section id="aim">
            <h2>Aim</h2>
            <p>The aim of Booth's algorithm is to efficiently multiply two signed binary numbers using a technique that reduces the number of additions and/or subtractions needed, thus optimizing the multiplication process.</p>
        </section>

        <section id="theory">
            <h2>Theory</h2>
            <p>Booth's algorithm, established by Andrew Donald Booth in 1951, efficiently multiplies signed binary numbers in two's complement form. It minimizes additions and subtractions by analysing bit pairs in the multiplier. '00' or '11' triggers a shift, '01' prompts an addition, and '10' leads to subtraction. By selectively choosing operations, the algorithm optimizes the multiplication process, significantly reducing arithmetic operations. This approach is particularly effective for larger binary numbers, revolutionizing efficient multiplication with signed binary representations in two's complement notation.</p>
        </section>

        <section id="procedure">
            <h2>Procedure</h2>
            <p><ol>
                <li><b>Registers Setup:</b>
                <ul>
                    <li>Multiplicand (m) is in register A, the multiplier (Q) is in register Q.</li>
                    <li>An additional 1-bit register, Q<sub>-1</sub>, placed after the least significant bit Q<sub>0</sub></li>
                    <li>Both Q<sub>-1</sub> and A are initially set to 0.</li>
                </ul>
                </li><br>
                <li><b>Initialization:</b>
                    <ul>
                        <li>Choose two binary numbers: a multiplier (M) and a multiplicand (Q) in two's complement.</li>
                        <li>Use another register, Count to store the numbers of bits in the multiplicand.</li>
                        <li>Add an extra bit at the left end of the multiplier, initially set to zero.</li>
                    </ul>
                    </li><br>
                    <li><b>Control Logic Operation:</b>
                        <ul>
                            <li>Checks Q<sub>0</sub> and Q<sub>-1</sub> in Q register.</li>
                            <li>If Q<sub>0</sub> and Q<sub>-1</sub> are the same (00 or 11), right-shift all A, Q, and Q<sub>-1</sub>.</li>
                            <li>For 10, subtract the multiplicand from A.</li>
                            <li>For 01, add the multiplicand to A.</li>
                        </ul>
                        </li><br>
                        <li><b>Result Storage and Right Shifting:</b>
                            <ul>
                                <li>Stores additions/subtractions in register A.</li>
                                <li>Right-shifts A, Q, and Q<sub>-1</sub> using arithmetic right shift, preserving the sign.</li>
                                <li>Decreement the value of Count by 1.</li>
                                <li>Iterate through the above process until Count = 0.</li>
                            </ul>
                            </li><br>
                            <li><b>Result Retrieval:</b>
                                <ul> 
                                    <li>Final multiplication result is in registers A and Q.</li>
                                </ul>
                                </li>
            </ol></p>
        </section>
            <section id="flowchart">
            <h2>Flowchart</h2>
           <img src="https://miro.medium.com/v2/resize:fit:1366/1*eZmx_ZWi6VzDVr2ixsPdlQ.png" width = "75%" alt = "Flowchart">
           </section>

           <section id="Simulation">
            <h2>Simulation</h2>
            <a href = "Booth.php"><button class="start-button" id="startButton">Start Simulation</button></a> 
       </section>

       <section id="Simulation">
        <h2>Quiz</h2>
        <a href = "BoothQuiz.php"><button class="start-button" id="startButton">Start Quiz</button></a> 
        <section id="Simulation">
            <h2>Excerise</h2>
            <a href = "BoothEx.php"><button class="start-button" id="startButton">Start Excerise</button></a> 
       <br><br>

        
    </main>
</body>
</html>
