<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        #container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h1 {
            color: #333;
        }

        label {
            font-size: 16px;
            color: #333;
            margin-right: 10px;
        }

        input[type="number"] {
            width: 40px;
            padding: 6px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        select {
            font-size: 16px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        #submit, #nextQuestion {
            font-size: 16px;
            padding: 8px 16px;
            background-color: #0074d9;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .gate-container {
            position: relative;
            display: inline-block;
        }

        .gate {
            width: 100px;
            height: 100px;
            background-color: #e0e0e0;
            border: 2px solid #333;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
        }

        .input-circle {
            width: 20px;
            height: 20px;
            background-color: white;
            border: 2px solid #333;
            border-radius: 50%;
            position: absolute;
            top: 40px;
        }

        .input-circle.input-1 {
            left: -10px;
        }

        .output-circle {
            width: 20px;
            height: 20px;
            background-color: white;
            border: 2px solid #333;
            border-radius: 50%;
            position: absolute;
            top: 40px;
            bottom: 0;
            right: -10px;
        }

        .correct {
            color: green;
        }

        .incorrect {
            color: red;
        }
    </style>
    <title>Logic Gates Exercise</title>
</head>
<body>
    <div id="container">
        <h1>Logic Gates Exercise</h1>

        <label for="inputA">Input A:</label>
        <input type="number" id="inputA" min="0" max="1" disabled>

        <label for="inputB">Input B:</label>
        <input type="number" id="inputB" min="0" max="1" disabled>

        <label for="gateSelector">Select a Gate:</label>
        <select id="gateSelector" disabled>
            <option value="and">AND Gate</option>
            <option value="or">OR Gate</option>
            <option value="not">NOT Gate</option>
            <option value="nor">NOR Gate</option>
            <option value="xor">XOR Gate</option>
        </select>

        <label for="output">Calculated Output:</label>
        <input type="number" id="output" min="0" max="1" placeholder="Enter 0 or 1">

        <button id="submit" onclick="checkAnswer()">Submit</button>
        <button id="nextQuestion" onclick="generateRandomValues()">Next Question</button>

        <table id="truthTable">
            <thead>
                <tr>
                    <th>Input A</th>
                    <th>Input B</th>
                    <th>Gate</th>
                    <th>Output</th>
                    <th>Your Output</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>

        <div id="gateContainer"></div>

        <script>
            function generateRandomValues() {
                const randomInputA = Math.floor(Math.random() * 2);
                const randomInputB = Math.floor(Math.random() * 2);
                const randomGateIndex = Math.floor(Math.random() * 5);
                const gates = ['and', 'or', 'not', 'nor', 'xor'];
                const randomGate = gates[randomGateIndex];

                document.getElementById('inputA').value = randomInputA;
                document.getElementById('inputB').value = randomInputB;
                document.getElementById('gateSelector').value = randomGate;
                document.getElementById('output').value = '';

                document.getElementById('gateContainer').innerHTML = '';

                switch (randomGate) {
                    case 'and':
                        document.getElementById('gateContainer').innerHTML = `
                            <div class="gate-container">
                                <div class="gate">AND</div>
                                <div class="input- input-1"></div>
                                <div class="input- input-2"></div>
                                <div class="output-"></div>
                            </div>
                        `;
                        break;
                    case 'or':
                        document.getElementById('gateContainer').innerHTML = `
                            <div class="gate-container">
                                <div class="gate">OR</div>
                                <div class="input- input-1"></div>
                                <div class="input- input-2"></div>
                                <div class="output-"></div>
                            </div>
                        `;
                        break;
                    case 'not':
                        document.getElementById('gateContainer').innerHTML = `
                            <div class="gate-container">
                                <div class="gate">NOT</div>
                                <div class="input- input-1"></div>
                                <div class="output-"></div>
                            </div>
                        `;
                        break;
                    case 'nor':
                        document.getElementById('gateContainer').innerHTML = `
                            <div class="gate-container">
                                <div class="gate">NOR</div>
                            </div>
                        `;
                        break;
                    case 'xor':
                        document.getElementById('gateContainer').innerHTML = `
                            <div class="gate-container">
                                <div class="gate">XOR</div>
                                <div class="input- input-1"></div>
                                <div class="input- input-2"></div>
                                <div class="output-"></div>
                            </div>
                        `;
                        break;
                    default:
                        break;
                }
            }

            function checkAnswer() {
                const inputValA = parseInt(document.getElementById('inputA').value);
                const inputValB = parseInt(document.getElementById('inputB').value);
                const selectedGate = document.getElementById('gateSelector').value;
                const userOutput = parseInt(document.getElementById('output').value);

                let correctOutput = false;

                switch (selectedGate) {
                    case 'and':
                        correctOutput = inputValA && inputValB;
                        break;
                    case 'or':
                        correctOutput = inputValA || inputValB;
                        break;
                    case 'not':
                        correctOutput = !inputValA;
                        break;
                    case 'nor':
                        correctOutput = !(inputValA || inputValB);
                        break;
                    case 'xor':
                        correctOutput = (inputValA || inputValB) && !(inputValA && inputValB);
                        break;
                    default:
                        break;
                }

                const newRow = document.createElement('tr');
                newRow.innerHTML = `
                    <td>${inputValA}</td>
                    <td>${inputValB}</td>
                    <td>${selectedGate.toUpperCase()}</td>
                    <td>${correctOutput ? 1 : 0}</td>
                    <td>${userOutput}</td>
                    <td class="${correctOutput === userOutput ? 'correct' : 'incorrect'}">${correctOutput === userOutput ? 'Correct' : 'Incorrect'}</td>
                `;
                document.querySelector('#truthTable tbody').appendChild(newRow);

                generateRandomValues();
            }

            // Initialize with the first random question
            generateRandomValues();
        </script>
    </div>
</body>
</html>