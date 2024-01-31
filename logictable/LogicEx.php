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
            margin-top: 10px;
            margin-right: 10px;
            padding: 8px 16px;
            background-color: #0074d9;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        #truthTable {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        #truthTable th {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
            background-color: #333;
            color: #fff;
        }

        #table1 td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }


        tr:nth-child(even) {
            background-color: #f2f2f2;
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

        
    #sim table{
        height: 100px;
    }

    #tab th,td {
        border: 0px solid #ccc;
        background-color: #ffffff;
        width: 10px;
    }

        .T{
        display: flex;
        margin: 20px auto;
    }

    #sim{
        width: fit-content;
        display: none;
        padding: 20px;
        border: 1px solid #ccc;
        margin: auto;
    }

        .incorrect {
            color: red;
        }

        .correct{
            color: green;
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
        <input type="number" id="output" min="0" max="1"><br>

        <button id="submit" onclick="checkAnswer()">Submit</button>
        <button id="nextQuestion" onclick="generateRandomValues(true)">Next Question</button>

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
            <tbody id="table1"></tbody>
        </table>

        <div class = "T">
    <div id ="sim"></div>
    </div>

        <script>
                        function gatesdisplay1(A,B,Output,g1){
                if(g1 == 'not'){
                    sim.innerHTML = `        <table id="tab">
            <tr>
                <th rowspan="3"><p id="A1" style="padding-top: 0px;">${A}</p></th>
                <th rowspan="3"><img id ="img1" src ="../images/${g1}.png" height="150px" width="250px" style="margin-right: 5x;"></th>
                <th rowspan="3"><p id="out1" style="padding-top: 0px;">${Output}</p></th>
            </tr>
        </table>`;

        var A1 = document.getElementById('A1');
                var out1 = document.getElementById('out1');

                colorchange(A,A1);
                colorchange(Output,out1);

                }
                else{
                sim.innerHTML = `<table id="tab">
            <tr>
                <th rowspan="1"><p id="A1" style="padding-top: 20px;">${A}</p></th>
                <th rowspan="3"><img id ="img1" src ="../images/${g1}.png" height="150px" width="250px" style="margin-right: 5x;"></th>
                <th rowspan="3"><p id="out1" style="padding-top: 0px;">${Output}</p></th>
            </tr>
            <tr>
                <th><p id="B1" style="padding-top: 10px;">${B}</p></th>
            </tr>
            <tr>
                <th style="-ms-user-select: none;user-select: none;color: white;">1</th>
            </tr>

        </table>`;

        var A1 = document.getElementById('A1');
                var B1 = document.getElementById('B1');
                var out1 = document.getElementById('out1');

                colorchange(A,A1);
                colorchange(B,B1);
                colorchange(Output,out1);
        }

               

            }
            function generateRandomValues(A) {
                const randomInputA = Math.floor(Math.random() * 2);
                const randomInputB = Math.floor(Math.random() * 2);
                const randomGateIndex = Math.floor(Math.random() * 5);
                const gates = ['and', 'or', 'not', 'nor', 'xor'];
                const randomGate = gates[randomGateIndex];

                document.getElementById('inputA').value = randomInputA;
                document.getElementById('inputB').value = randomInputB;
                document.getElementById('gateSelector').value = randomGate;

                if(A){
                sim.style.display = 'none';
                document.getElementById('table1').innerHTML = ``;
                }

            }

            var count = 0;

            function checkAnswer() {
                var inputValA = parseInt(document.getElementById('inputA').value);
                var inputValB = parseInt(document.getElementById('inputB').value);
                var inputValA1;
                var inputValB1;
                var table1 = document.getElementById('table1');
                var selectedGate = document.getElementById('gateSelector').value;
                

                if(inputValA1==1){
                    inputValA1 = true;
                }

                else{
                    inputValA1 = false;
                }

                if(inputValB1==1){
                    inputValB1 = true;
                }

                else{
                    inputValB1 = false;
                }

                let correctOutput = false;
                let correctOutput1 = 0;

                switch (selectedGate) {
                    case 'and':
                        correctOutput = (inputValA1 && inputValB1);
                        break;
                        case 'or':
                            correctOutput = (inputValA1 || inputValB1);
                        break;
                        case 'not':
                            correctOutput = !inputValA1;
                        break;
                        case 'nor':
                            correctOutput = !(inputValA1 || inputValB1);
                        break;
                        case 'xor':
                            correctOutput = ((inputValA1 || inputValB1) && !(inputValA1 && inputValB1));
                        break;
                    default:
                        break;
                }

                if(correctOutput){
                    correctOutput1 = 1;
                }

                else{
                    correctOutput1 = 0;
                }

                var userOutput = parseInt(document.getElementById('output').value);

                
                if(!(isNaN(userOutput))){
                    sim.style.display = 'none';

                    gatesdisplay1(inputValA,inputValB,correctOutput1,selectedGate);
                const newRow = document.createElement('tr');
                if(selectedGate == 'not'){
                    inputValB = '-';
                }
                newRow.innerHTML = `
                    <td>${inputValA}</td>
                    <td>${inputValB}</td>
                    <td>${selectedGate.toUpperCase()}</td>
                    <td>${correctOutput ? 1 : 0}</td>
                    <td>${userOutput}</td>
                    <td class="${correctOutput1 === userOutput ? 'correct' : 'incorrect'}">${correctOutput1 === userOutput ? 'Correct' : 'Incorrect'}</td>
                `;
                table1.appendChild(newRow);
                generateRandomValues(false);
                count+=1;

                }

                if(count>10){
                    table1.removeChild(table1.firstChild);
                }
            }

            function colorchange(Aval,A){


if(Aval == 1){
    A.style.color = "green";
}
else{
    A.style.color = "red";
}

}

            // Initialize with the first random question
            generateRandomValues(true);
        </script>
    </div>
</body>
</html>