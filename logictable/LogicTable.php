<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@300;400;500;700;900&display=swap"
        rel="stylesheet">
    <title></title>

    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
    }
    
    #container {
        max-width: 1000px;
        margin: 10px auto;
        padding: 20px;
        background-color: #ffffff;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }
    
    h1 {
        color: #333;
    }
    
    /* Styling for the input fields and calculate button */
    label {
        font-size: 16px;
        color: #333;
        margin-right: 10px;
    }
    
    .Q{
        display: flex;
    }
    
    .Q #first, #second{
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        height: 30px;
        width: 50px;
        text-align: center;
    }
    
    .Q p{
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 10px;
    }
    
    #reset {
        font-size: 16px;
        padding: 8px 16px;
        background-color: #0074d9;
        color: #fff;
        border: none;
        height: 80%;
        padding-top: 10px;
        border-radius: 4px;
        margin-top: 18px;
        cursor: pointer;
    }
    
    #check{
        font-size: 16px;
        padding: 8px 16px;
        background-color: #00904a;
        color: #fff;
        border: none;
        height: 80%;
        width:fit-content;
        cursor: pointer;
    }
    
    table{
        width: 100%;
        border-collapse: collapse;
        display: flex-start;
        margin-top: 10px;
    
    }
    
    th, td{
        border: 1px solid #ccc;
        padding: 8px;
        text-align: center;
    }
    
    #con{
        padding: 8px;
        text-align: center;
        border: 1px solid #ffffff;
        width: 100px;
    }
    
    th {
        background-color: #333;
        color: #fff;
        align-items: center;
        align-self: center;
    }
    
    input[type = 'number'],input[type = 'number'],input[type = 'number']{
        width:80%;
        margin: auto;
        font-size: 16px;
        text-align: center;
        border: 1px solid #ccc;
    }
    
    #List{
        width: fit-content;
        font-size: 16px;
    }
    
    #M{
        font-size: 16px;
    }
    
    #result p{
        font-size: 16px;
    }
    
    tr:nth-child(even){
        background-color: #f2f2f2;
    }

    </style>
</head>
<body>
    <div id="container">
        <h1>Booth's Algorithm Excerise</h1>
        <h2>Solve the given problem in a step-wise manner.</h2>
    <div class="Q">
        <p>First Gate:
            <select id="gateSelector1">
            <option value="AND Gate">AND Gate</option>
            <option value="OR Gate">OR Gate</option>
            <option value="NOT Gate">NOT Gate</option>
            <option value="NOR Gate">NOR Gate</option>
            <option value="XOR Gate">XOR Gate</option>
        </select></p>
        <p>Second Gate:
            <select id="gateSelector2">
                <option value="-">None</option>
                <option value="AND Gate">AND Gate</option>
                <option value="OR Gate">OR Gate</option>
                <option value="NOT Gate">NOT Gate</option>
                <option value="NOR Gate">NOR Gate</option>
                <option value="XOR Gate">XOR Gate</option>
        </select></p>
        <button id="reset">Finalize</button>
    </div>
        <table id="algoTable">
            <thead>
                <tr>
                    <th>Input A</th>
                    <th>Input B</th>
                    <th>Input C</th>
                    <th>Gate 1</th>
                    <th>Gate 2</th>
                    <th>Output</th>
                </tr>
            </thead>
            <tbody id="confirm"></tbody>
            <tbody id="algoBody">
                <td><input type="number" id="A" min="0" max="1" required disabled="true"></td>
                <td><input type="number" id="B" min="0" max="1" required disabled="true"></td>
                <td><input type="number" id="C" min="0" max="1" required disabled="true"></td>
                <td id="g1">-</td>
                <td id="g2">-</td>
                <td id="out">-</td>
            <td id="con"><button id="check" disabled="true" style="background: grey;">Check Answer</button></td>
            </tbody>
        </table>
 
        <div id = "result"></div>
    </div>
    
    <div>
        <script>
                        function gate2(a,inputValA,inputValB){
                let output;
                switch (a) {
                    case "AND Gate":
                        output = (inputValA && inputValB);
                        break;
                    case "OR Gate":
                        output = (inputValA || inputValB);
                        break;
                    case "NOT Gate":
                        output = !inputValA;
                        break;
                    case "NOR Gate":
                        output = !(inputValA || inputValB);
                        break;
                    case "XOR Gate":
                        output = ((inputValA || inputValB) && !(inputValA && inputValB));
                        break;
                    default:
                        break;
                }

                if(output){
                    output = 1;
                }
                else{
                    output = 0;
                }
                console.log(output);
                return output;
                
            }

            function gate3(a,b,inputValA,inputValB,inputValC){
                let output;
                
                output = gate2(a,inputValA,inputValB);
                console.log(output);

                let out = gate2(b,output,inputValC);
console.log(out);
                return out;
            }

            function gatecheck(a,b,inputA,inputB,inputC){
                if(a=='NOT Gate'){
                    inputB.disabled = true;
                    console.log("b");
                }
                else{
                    inputB.disabled = false;
                }

                if(b=='NOT Gate' || b=='-'){
                    inputC.disabled = true;
                    console.log("c");
                }
                else{
                    inputC.disabled = false;
                }

                inputA.disabled = false;
            }

            function dash(a){
                if(a.disabled){
                    return '-'
                }
                else{
                    return parseInt(a.value);
                }
            }

            const gateSelector1 = document.getElementById('gateSelector1');
            const gateSelector2 = document.getElementById('gateSelector2');
            const button = document.getElementById('reset');
            const check = document.getElementById("check");

            const Confirm = document.getElementById('confirm');
            var inputA = document.getElementById('A');
            var inputB = document.getElementById('B');
            var inputC = document.getElementById('C');

            const truthTableBody = document.querySelector('#truthTable tbody');
            const gateContainer = document.getElementById('gateContainer');

            const g1 = document.getElementById('g1');
            const g2 = document.getElementById('g2');
            const out = document.getElementById('out');

            var A_flag,B_flag,C_flag,gate2_flag;
            var flag = true;

            var gate_1,gate_2;


            
            button.addEventListener('click', () => {
                if(flag){
                    gate_1 = gateSelector1.value;
                    gate_2 = gateSelector2.value;
                    gateSelector1.disabled = true;
                    gateSelector2.disabled = true;
                    console.log(gate_1,gate_2);
                    check.disabled = false;
                    check.style.background = 'green';
                    check.style.cursor = "pointer";
                    button.innerHTML = "Change Logic Gates";
                    gatecheck(gate_1,gate_2,inputA,inputB,inputC);
                    g1.innerHTML=`${gate_1}`;
                    g2.innerHTML=`${gate_2}`;
                    flag = false;
                }
                else{
                    Confirm.innerHTML = ``;
                    check.disabled = true;
                    Confirm.innerHTML = ``;
                    gateSelector1.disabled = false;
                    gateSelector2.disabled = false;
                    check.style.background = 'grey';
                    check.style.cursor = "default";
                    inputA.disabled = "true";
                    inputB.disabled = "true";
                    inputC.disabled = "true";
                    button.innerHTML = "Finalize";
                    flag = true;
                }
            });

            check.addEventListener('click', () => {

                var inputValA = parseInt(inputA.value);
                var inputValB = parseInt(inputB.value);
                var inputValC = parseInt(inputC.value);
                var output = true;

                if(gate_2 == '-'){
                    output = gate2(gate_1,inputValA,inputValB);
                }
                else{
                    output = gate3(gate_1,gate_2,inputValA,inputValB,inputValC);
                }

                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${dash(inputA)}</td>
                    <td>${dash(inputB)}</td>
                    <td>${dash(inputC)}</td>
                    <td>${gate_1}</td>
                    <td>${gate_2}</td>
                    <td>${output}</td>`;
                Confirm.appendChild(row);


                out.innerHTML = `${output}`;

                console.log(output);




            });


        </script>
    </div>
</body>

</html>
