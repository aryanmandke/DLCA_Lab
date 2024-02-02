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
        margin: auto;
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
    
    #algoTable{
        width: 100%;
        border-collapse: collapse;
        display: flex-start;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    
    #algoTable th, td{
        border: 1px solid #ccc;
        padding: 8px;
        text-align: center;
    }
    
    #algoTable th {
        background-color: #333;
        color: #fff;
        align-items: center;
        border: 1px solid;
        align-self: center;
    }
    
    #algoTable input[type = 'number'],input[type = 'number'],input[type = 'number']{
        width:80%;
        margin: auto;
        font-size: 16px;
        text-align: center;
        border: 1px solid #ccc;
    }

    #M{
        font-size: 16px;
    }

    #confirm th,td{
        border: 1px solid #ccc;
    }

    #con{
        padding: 8px;
        text-align: center;
        border: 1px solid #ffffff;
        width: 100px;
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

    #algoBody td,th{
        border: 1px solid #ccc;
        width: 10px;
    }

    #sim table{
        height: 100px;
    }

    #tab th,td {
        border: 0px solid #ccc;
        width: 10px;
    }
    
    #result p{
        font-size: 16px;
    }
    
    #algoTable tr:nth-child(even){
        background-color: #f2f2f2;
    }


    </style>
</head>
<body>
    <div id="container">
        <h1>Logic Gates Simulation</h1>
        <h2>Solve the given problem in a step-wise manner.</h2>
    <div class="Q">
        <p>First Gate:
            <select id="gateSelector1">
                <option value="AND Gate">AND Gate</option>
                <option value="OR Gate">OR Gate</option>
                <option value="NOT Gate">NOT Gate</option>
                <option value="NOR Gate">NOR Gate</option>
                <option value="XOR Gate">XOR Gate</option>
                <option value="XNOR Gate">XNOR Gate</option>
                <option value="NAND Gate">NAND Gate</option>
        </select></p>
        <p>Second Gate:
            <select id="gateSelector2">
                <option value="-">None</option>
                <option value="AND Gate">AND Gate</option>
                <option value="OR Gate">OR Gate</option>
                <option value="NOT Gate">NOT Gate</option>
                <option value="NOR Gate">NOR Gate</option>
                <option value="XOR Gate">XOR Gate</option>
                <option value="XNOR Gate">XNOR Gate</option>
                <option value="NAND Gate">NAND Gate</option>
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
                <td><input type="number" id="A" min="0" max="1" required disabled="true" value="0"></td>
                <td><input type="number" id="B" min="0" max="1" required disabled="true" value="0"></td>
                <td><input type="number" id="C" min="0" max="1" required disabled="true" value="0"></td>
                <td id="g1">-</td>
                <td id="g2">-</td>
                <td id="out">-</td>
            <td id="con" style="border: 0px solid white"><button id="check" disabled="true" style="background: grey;">Check Answer</button></td>
            </tbody>
        </table>
 
        <div id = "result"></div>
    <div class = "T">
    <div id ="sim"></div>
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
                    case "NAND Gate":
                        output = (!(inputValA && inputValB));
                        break;
                    case "XNOR Gate":
                        output =(!((inputValA || inputValB) && !(inputValA && inputValB)));
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

            function gatesdisplay1(A,B,Output,g1){
                if(g1 == 'not'){
                    sim.innerHTML = `        <table id="tab">
            <tr>
                <th rowspan="3"><p id="A1" style="padding-top: 0px;">${A}</p></th>
                <th rowspan="3"><img id ="img1" src ="../images/gates/gates/${g1}/${A}${B}.png" height="150px" width="250px" style="margin-right: 5x;"></th>
                <th rowspan="3"><p id="out1" style="padding-top: 0px;">${Output}</p></th>
            </tr>
        </table>`;

                }
                else{
                sim.innerHTML = `<table id="tab">
            <tr>
                <th rowspan="1"><p id="A1" style="padding-top: 20px;">${A}</p></th>
                <th rowspan="3"><img id ="img1" src ="../images/gates/${g1}/${A}${B}.png" height="150px" width="250px" style="margin-right: 5x;"></th>
                <th rowspan="3"><p id="out1" style="padding-top: 0px;">${Output}</p></th>
            </tr>
            <tr>
                <th><p id="B1" style="padding-top: 10px;">${B}</p></th>
            </tr>
            <tr>
                <th style="-ms-user-select: none;user-select: none;color: white;">1</th>
            </tr>

        </table>`;
        }

                var A1 = document.getElementById('A1');
                var B1 = document.getElementById('B1');
                var out1 = document.getElementById('out1');

                colorchange(A,A1);
                colorchange(B,B1);
                colorchange(Output,out1);

            }

            function gatesdisplay2(A,B,ab,C,Output,g1,g2){

                sim.innerHTML = `<table id="tab">
                <tr>
                    <th><p id="A1" style="margin-top: 65px;">${A}</p></th>
                    <th rowspan="3"><img id ="img1" src ="../images/gates/${g1}/${A}${B}.png" height="150px" width="250px" style="margin-right: -20px;"></th>
                    <th style="-ms-user-select: none;user-select: none;color: white;">1</th>
                    <th rowspan="3"><img id="img2" src ="../images/gates/${g2}/${ab}${C}.png" height="150px" width="250px" style="padding-top: 65px"  ></th>
                    <th rowspan="3"><p id="out1" style="padding-top: 60px;">${Output}</p></th>
                </tr>
                <tr>
                    <th><p id="B1" style="margin-top: 3px;">${B}</p></th>
                    <th rowspan="2"><p id="C1" style="padding-top: 24px;">${C}</p></th>
                </tr>
                <tr>
                    <th style="-ms-user-select: none;user-select: none;color: white;">1</th>
                </tr>
    
            </table>`;



            var A1 = document.getElementById('A1');
                var B1 = document.getElementById('B1');
                var C1 = document.getElementById('C1');

                var img1 = document.getElementById('img1');
                var img2 = document.getElementById('img2');

                var out1 = document.getElementById('out1');

            if(g2 == 'nor'){
                        img2.style.paddingTop = "60px";
                        C1.style.paddingTop = "15px";
                        console.log("change");
                }

                if(g1 == 'not'){
                        A1.style.marginTop = "100px";
                        B1.style.userSelect = "none";
                        B1.style.color = "white";
                        C1.style.paddingTop = "0px";
                        C1.style.marginTop = "6px";
                        console.log("change");

                        if(g2 == 'nor'){
                            A1.style.marginTop = "96px";
                        C1.style.paddingTop = "5px";
                        C1.style.marginTop = "-5px";
                        console.log("change");
                }
                }

                if (g2 == 'not'){
                    A1.style.marginTop = "16px";
                    A1.style.paddingTop = "20px";
                    B1.style.marginTop = "25px";
                    img2.style.paddingTop = "0px";
                    out1.style.paddingTop = "0px";
                    out1.style.marginTop = "13px";
                    out1.style.marginBottom = "16px";

                    C1.style.display = 'none';
                    console.log("change");

                    if(g1 == 'not'){
                        A1.style.marginTop = "80px";
                        B1.style.userSelect = "none";
                        B1.style.color = "white";
                        console.log("change");
                    }
                }
                
                colorchange(A,A1);
                colorchange(B,B1);
                colorchange(C,C1);
                colorchange(Output,out1);
            }

            function colorchange(Aval,A){

                if(A.style.color != "white"){

                if(Aval == 1){
                    A.style.color = "green";
                }
                else{
                    A.style.color = "red";
                }
            }
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

            function confirminsert(inputA,inputB,inputC,gate_1,gate_2,output){
                    row = document.createElement('tr');
                    row.innerHTML = `
                                    <td style="border: 1px solid #ccc">${dash(inputA)}</td>
                                    <td style="border: 1px solid #ccc">${dash(inputB)}</td>
                                    <td style="border: 1px solid #ccc">${dash(inputC)}</td>
                                    <td style="border: 1px solid #ccc">${gate_1}</td>
                                    <td style="border: 1px solid #ccc">${gate_2}</td>
                                    <td style="border: 1px solid #ccc">${output}</td>`;
                Confirm.appendChild(row);
                out.innerHTML = `${output}`;
                cnt += 1;

                if(cnt>7){
                    Confirm.removeChild(Confirm.firstChild);
                }
            }

            const gateSelector1 = document.getElementById('gateSelector1');
            const gateSelector2 = document.getElementById('gateSelector2');
            const button = document.getElementById('reset');
            const check = document.getElementById("check");
            const sim = document.getElementById('sim');

            const Confirm = document.getElementById('confirm');
            var cnt = 0;

            const truthTableBody = document.querySelector('#truthTable tbody');
            const gateContainer = document.getElementById('gateContainer');

            const g1 = document.getElementById('g1');
            const g2 = document.getElementById('g2');
            const out = document.getElementById('out');

            var inputA = document.getElementById('A');
                var inputB = document.getElementById('B');
                var inputC = document.getElementById('C');

            var A_flag,B_flag,C_flag,gate2_flag;
            var flag = true;

            var gate_1,gate_2;
            var fgate,sgate;


            
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
                    cnt = 0;
                    fgate = gate_1.split(" ");
                    fgate = fgate[0];
                    fgate = fgate.toLowerCase();
                    sgate = gate_2.split(" ");
                    sgate = sgate[0];
                    sgate = sgate.toLowerCase();
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
                    cnt = 0;
                    sim.style.display = 'none';
                }
            });

            check.addEventListener('click', () => {
                inputA = document.getElementById('A');
                inputB = document.getElementById('B');
                inputC = document.getElementById('C');

                var row = document.createElement('tr');

                var inputValA = parseInt(inputA.value);
                var inputValB = parseInt(inputB.value);
                var inputValC = parseInt(inputC.value);
                var output = true;
                var out = true;
                const gate = [];
                sim.style.display = 'none';

                if(gate_2 == '-'){
                    output = gate2(gate_1,inputValA,inputValB);
                    confirminsert(inputA,inputB,inputC,gate_1,gate_2,output);
                    gatesdisplay1(inputValA,inputValB,output,fgate);

                }
                else{
                    if(gate_2 == 'NOT Gate'){
                            out = gate2(gate_1,inputValA,inputValB);
                            output = gate3(gate_1,gate_2,inputValA,inputValB,inputValC);
                            gatesdisplay2(inputValA,inputValB,out,inputValC,output,fgate,sgate);
                            confirminsert(inputA,inputB,inputC,gate_1,gate_2,output);
                    }
                    else{
                            out = gate2(gate_1,inputValA,inputValB);
                            output = gate3(gate_1,gate_2,inputValA,inputValB,inputValC);
                            gatesdisplay2(inputValA,inputValB,out,inputValC,output,fgate,sgate);
                            confirminsert(inputA,inputB,inputC,gate_1,gate_2,output);
                    }
                }

                sim.style.display = 'block';

                

                console.log(output);
            });


        </script>
    </div>
</body>

</html>
