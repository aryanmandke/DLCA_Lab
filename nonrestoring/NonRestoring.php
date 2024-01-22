<!DOCTYPE html>
<html>
<head>
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

        input[type="number"] {
            width: 40px;
            padding: 6px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        #con{
        padding: 8px;
        text-align: center;
        border: 1px solid #ffffff;
        width: 15%;
        }

        #calculate, #reset {
            font-size: 16px;
            padding: 8px 16px;
            background-color: #0074d9;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 10px;
        }

        /* Styling for the truth table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            display: flex-start;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }

        #check{
        font-size: 16px;
        padding: 8px 16px;
        background-color: #00904a;
        color: #fff;
        border: none;
        border-radius: 4px;
        height: 80%;
        width:fit-content;
        cursor: pointer;
    }

        th {
            background-color: #333;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

    </style>
</head>
<body>
    <div id="container">
        <h1>Non-Restoring Division Algorithm Calculator</h1>
        <h2>Enter the numbers to be divided in decimal format.</h2>

        <label for="first">Dividend: </label>
        <input type="number" id="first">
        <label for="second">Divisor: </label>
        <input type="number" id="second">
        <button id="calculate">Calculate</button>

        <table id="algoTable">
            <thead>
                <tr>
                        <th>Count</th>
                        <th>M</th>
                        <th>AC</th>
                        <th>Q</th>
                        <th>Action</th>
                    </tr>
            </thead>
            <tbody id="confirm"></tbody>
            <tbody id="algoBody">
                <td colspan="5" id="comment"></td>
                <td id="con"><button id="check" disabled="true" style="background: grey;">Check Answer</button></td>
            </tbody>
        </table>
        <div id = "result"></div>
    </div>
        
    </div>
   
    <div><script>
        function po(n) {
    let i = 1;
    for (let k = 0; k < n; k++) {
        i = i * 2;
    }
    return i;
}


function odd(a) {
    if (a % 2 === 0) {
        return 0;
    } else {
        return 1;
    }
}

function bina(N, Cnt) {
    let i, j = 1,loop = 1;
    let ans="";
    i=N%2;
        N=Math.floor(N/2);
            ans="_"+ans;
    while(N!=0){   
        i=N%2;
        N=Math.floor(N/2);
        ans=String(i)+ans;
        j+=1;
    }
    while(j<=Cnt){
    ans="0"+ans;
    j+=1;
    }
    return ans;
}

function binary(N, Cnt) {
    let i, j = 1;
    let ans="";
    while(N!=0){
        i=N%2;
        N=Math.floor(N/2);
        ans=String(i)+ans;
        j+=1;
    }
    while(j<=Cnt){
    ans="0"+ans;
    j+=1;
    }
    return ans;
}

function nonrestoring(Q,M){

var deck = 0;

    let A = 0;;
    let flag = 0;
    let n = 0;
    let b, c, d, e;
    let nQ, nM;
    let loop, count = 1, Cnt;
    let ac,q,r,m;


    while (true) {
        b = po(n);
        if (Q >= b) {
            n += 1;
            count += 1;
        } else {
            break;
        }
    }

    b = po(count - 1);
    c = po(count);
    d = c - 1;
    e = b / 2;
    f = po(count + 1) - 1;

    Cnt = count;

    nM = (d - M) + 1;

let Morg = M, Qorg = Q;
    while (count != 0) {
       
        if(count == Cnt){
            act = "Initialization";
            ac = binary(A, Cnt);
            q = binary(Q, Cnt);
            m = binary(M , Cnt);

                    result[deck]={count,m,ac,q,act};
                     deck +=1;
        }

        A=A*2;
        Q=Q*2;

        if(A > d){
            A = A % c
        }
        if(Q > d){
            A = A + 1;
            Q = Q % c;
        }
            act = "Left Arithmetic Shift";
            ac = binary(A, Cnt);
            q = bina(Q, Cnt);
            m = binary(M , Cnt);
            result[deck]={count,m,ac,q,act};
                     deck +=1;
            if(A >= b){
                A = A + M;
                act="A = A + M"
            }
            else{
                    A = A + nM;
                    act = "A = A - M"

            }

      if(A > d){
            A = A % c
        }

        ac = binary(A, Cnt);
        q = bina(Q, Cnt);
        m = binary(M , Cnt);

        result[deck]={count,m,ac,q,act};
        deck +=1;

    if(A >= b){
        act = "Q[0] = 0";

        ac = binary(A, Cnt);
       q = binary(Q, Cnt);
    m = binary(M , Cnt);

    result[deck]={count,m,ac,q,act};
                     deck +=1;
    }
    else{
        Q = Q + 1;
        act = "Q[0] = 1";
    ac = binary(A, Cnt);
    q = binary(Q, Cnt);
    m = binary(M , Cnt);

    result[deck]={count,m,ac,q,act};
                     deck +=1;
    }

    count-=1;
    }
   
    if(A >= b){
                A = A + M;
                if(A > d){
            A = A % c
        }
            }
            ac = binary(A, Cnt);
   
            result[deck]={count,m,ac,q};
            
}
    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }

    function find_state(cnt){
    let a = result[cnt].act;

    switch(a){
        case "A = A - M":p.innerHTML = `${opt[2]}`; break;
        case "Q[0] = 1":p.innerHTML = `${opt[4]}`; break;
        case "Initialization":p.innerHTML = `${opt[0]}`; break;
        case "Left Arithmetic Shift":p.innerHTML = `${opt[3]}`; break;
        case "Q[0] = 0":p.innerHTML = `${opt[1]}`; break;
    }
}

var result = [];
var opt = ["Initialization","Q[0]=0","A=A-M","LAS","Q[0]=1"];
var cnt = 0;
const re = document.getElementById('result');
const button = document.getElementById('calculate');
const check = document.getElementById('check');
const p = document.getElementById('comment');
const ans = document.getElementById('confirm');
var Q,M;

button.addEventListener('click', async () =>{
    result =[];
    check.style.display = '';
    p.style.display = '';
    con.style.display = '';
    ans.innerHTML = ``;
    cnt = 0;

    opt = ["Initialization","Q[0]=0","A=A-M","LAS","Q[0]=1"];

    M = parseInt(document.getElementById('first').value);
    Q = parseInt(document.getElementById('second').value);

    if (!(isNaN(M) || isNaN(Q))){
        nonrestoring(M,Q);
        var count = result[0].count;
        ans.innerHTML = '';
        p.innerHTML = '';
        re.innerHTML = '';

        const giv = document.createElement('tr');
        giv.innerHTML = `<td>${result[cnt].count}</td>
                    <td>${result[cnt].m}</td>
                    <td>${result[cnt].ac}</td>
                    <td>${result[cnt].q}</td>
                    <td>${result[cnt].act}</td>`;
        ans.appendChild(giv);
        find_state(cnt);
        cnt += 1;

        button.style.background = "grey";
        button.disabled = true;

        await sleep(1000);

        check.disabled = false;
        check.style.background = "#00904a";
        button.style.background = "#0074d9";
        button.disabled = false;
        console.log(result);
    }
    else{
        console.log("Null values detected!");
    }
    });

check.addEventListener('click', async () => {
    if(cnt>=result.length-1){
        check.style.display = 'none';
        p.innerHTML = '';
        p.style.display = 'none';
        con.style.display = 'none';
        re.innerHTML = `<p> Q = (${M})<sub>10</sub> = (${result[0].q})<sub>2</sub><br>
                M = (${Q})<sub>10</sub> = (${result[0].m})<sub>2</sub><br>
                Quotient = (${Math.floor(M/Q)})<sub>10</sub> = (${result[cnt].q})<sub>2</sub><br>
                Remainder = (${M%Q})<sub>10</sub> = (${result[cnt].ac})<sub>2</sub>`;
    }
    else{
        const giv = document.createElement('tr');
        giv.innerHTML = `<td>${result[cnt].count}</td>
                    <td>${result[cnt].m}</td>
                    <td>${result[cnt].ac}</td>
                    <td>${result[cnt].q}</td>
                    <td>${result[cnt].act}</td>`;
        ans.appendChild(giv);
        find_state(cnt);
        cnt += 1;
    }

});
       
    </script>
    </div>
</body>

</html>