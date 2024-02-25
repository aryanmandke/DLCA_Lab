<!DOCTYPE html>
<html>

<head>
 <meta charset="UTF-8">
 <title>Booth's Algorithm Simulation</title>
 <style>
 body {
 font-family: Arial, sans-serif;
 margin: 0px auto;
 padding: 0px;
 background: url("../images/sim.jpg") no-repeat center center fixed;
 background-size: cover;
 justify-content: center;
 
 align-items: center;
 }

 header a{
            text-decoration: none;
            font-weight: bold;
            color: #ffffff;
        }

 header {
            display: flex;
            background-color: #971426;
            padding: 20px;
            color: #ffffff;
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        header h4 {
            margin: auto;
            text-align: center;
        }
 
 #container {
width: 1000px;
 margin: 10px auto;
 padding: 50px;
 background-color: rgba(255, 255, 255, 0.9);
 box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
 border-radius: 5px;
 text-align: center;
 }
 
 h1 {
 color: #971426;
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
 
 #calculate,
 #reset,
 #check-next,
 #check-back {
 font-size: 14px; /* Adjusted font size */
 padding: 10px 14px; /* Adjusted padding */
 background-color: #0074d9;
 color: #fff;
 border: none;
 border-radius: 4px;
 cursor: pointer;
 margin-top: 10px;
 }
 
 table {
 width: 100%;
 border-collapse: collapse;
 margin-top: 20px;
 }
 
 th,
 td {
 border: 1px solid black;
 padding: 8px;
 text-align: center;
 }
 
 th {
 background-color: #333;
 color: #fff;
 border: 1px solid #ffffff;
 }
 
 tr:nth-child(even) {
 background-color: #f2f2f2;
 }
 
 #comment {
 padding: 8px;
 text-align: center;
 border: 1px solid black;
 width: 200px;
 height: max-content;
 margin: auto;
 }

 .tab{
    width: 100%;
 }
 
 #result {
 margin-top: 20px;
 font-size: 20px;
 }
 
 #con {
 padding: 8px;
 text-align: center;
 border: 0px solid #ffffff;
 width: 100px;
 margin: auto;
 }
 </style>
 
</head>

<body>
<header>
        <a href="../booth/BoothTheo.php" class="back-button">Back</a>
        <h4>Booth's Algorithm Simulation</h4>
        <a style="-ms-user-select: none;user-select: none;color: #971426;" class="white">Back</a>
    </header>
    <main>
 <div id="container">
 <h1>Booth's Algorithm Simulation</h1>
 <h2>Enter the numbers to be multiplied in decimal format.</h2>

 <label for="first">First Number: </label>
 <input type="number" id="first" required>
 <label for="second">Second Number: </label>
 <input type="number" id="second" required>
 <button id="calculate">Calculate</button>

 <table id="algoTable">
 <thead id="head">
 <tr>
 <th style="border-left: 1px solid black">Count</th>
 <th>M</th>
 <th>AC</th>
 <th>Q</th>
 <th>Q<sub>-1</sub></th>
 <th style="border-right: 1px solid black">Action</th>
 </tr>
 </thead>
 <tbody id="confirm"></tbody>
 <tbody id="algoBody">
 <td colspan="6" id="comment"></td>
 <td id="con">
 <div class="control">
 <button id="check-next" disabled="true" style="background: grey;">Next Step</button><button
 id="check-back" disabled="true" style="background: grey;">Previous Step</button>
 </div>
 </td>
 </tbody>
 </table>
 <div id="result">
 </div>
 

 <div>
 <script>
 function po(n) {
 let i = 1;
 for (let k = 0; k < n; k++) {
 i = i * 2;
 }
 return i;
 }

 function ab(c) {
 if (c >= 0) {
 return c;
 } else {
 return -c;
 }
 }

 function less(c) {
 if (c < 0) {
 return 1;
 } else {
 return 0;
 }
 }

 function odd(a) {
 if (a % 2 === 0) {
 return 0;
 } else {
 return 1;
 }
 }

 function binary(N, Cnt) {
 let i, j = 1;
 let ans = "";
 while (N != 0) {
 i = N % 2;
 N = Math.floor(N / 2);
 ans = String(i) + ans;
 j += 1;
 }
 while (j <= Cnt) {
 ans = "0" + ans;
 j += 1;
 }
 return ans;
 }

 function booth(M, Q) {

 let deck = 0;
 let A = 0;
 let Q1 = 0;
 let flag = 0;
 let n = 0;
 let b, c, d, e;
 let Q0 = 0;
 let abM, abQ;
 let negQ, negM;
 let nQ, nM;
 let loop, count = 1, Cnt;
 let ac, q, r, m;
 let carry;

 abM = ab(M);
 abQ = ab(Q);
 negM = less(M);
 negQ = less(Q);

 while (true) {
 b = po(n);
 if (abM >= b) {
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
 Cnt = count;

 nM = (d - abM) + 1;
 nQ = (d - abQ) + 1;
 let Morg = M,
 Qorg = Q;
 if (negM === 1 || negQ === 1) {
 if (negM === 1) {
 M = nM;
 }
 if (negQ === 1) {
 Q = nQ;
 }
 }
 while (count != 0) {
 let Morg1 = M,
 Qorg1 = Q;
 loop = 0;
 flag = odd(Q);
 if (flag === 1) {
 Q0 = 1;
 } else {
 Q0 = 0;
 }
 if (count == Cnt) {

 ac = binary(A, Cnt);
 q = binary(Q, Cnt);
 m = binary(M, Cnt);
 act = "Initialization";

 result[deck] = {
 "count": count,
 "m": m,
 "ac": ac,
 "q": q,
 "Q1": Q1,
 "act": act
 };
 deck += 1;
 }

 if (Q1 !== Q0) {
 if (Q0 === 1 && Q1 === 0) {
 while (loop !== 2) {
 if (loop === 0) {
 if (negM === 1) {
 A = A + abM;
 } else {
 A = A + (d - M) + 1;
 }

 if (A > d) {
 A = A % c;
 }

 act = "A = A - M";
 }

 if (loop === 1) {
 flag = odd(A);
 Q1 = odd(Q);
 Q = Math.floor(Q / 2);
 A = Math.floor(A / 2);
 if (flag === 1) {
 Q += b;
 }

 if (A >= e) {
 A += b;
 }

 act = "Right Arithmetic Shift";

 }
 loop += 1;

 ac = binary(A, Cnt);
 q = binary(Q, Cnt);
 m = binary(M, Cnt);

 result[deck] = {
 "count": count,
 "m": m,
 "ac": ac,
 "q": q,
 "Q1": Q1,
 "act": act
 };
 deck += 1;
 }
 } else {
 while (loop !== 2) {
 if (loop === 0) {
 if (negM === 1) {
 A = A + nM;
 } else {
 A = A + M;
 }
 if (A > d) {
 A = A % c;
 }

 act = "A = A + M";
 }

 if (loop === 1) {
 flag = odd(A);
 Q1 = odd(Q);
 Q = Math.floor(Q / 2);
 A = Math.floor(A / 2);
 if (flag === 1) {
 Q += b;
 }

 if (A >= e) {
 A += b;
 }

 act = "Right Arithmetic Shift";

 }
 loop += 1;

 ac = binary(A, Cnt);
 q = binary(Q, Cnt);
 m = binary(M, Cnt);

 result[deck] = result[deck] = {
 "count": count,
 "m": m,
 "ac": ac,
 "q": q,
 "Q1": Q1,
 "act": act
 };
 deck += 1;

 }
 }
 } else {
 Q1 = odd(Q);
 flag = odd(A);
 Q = Math.floor(Q / 2);
 A = Math.floor(A / 2);
 if (flag === 1) {
 Q += b;
 }

 if (A >= e) {
 A += b;
 }

 act = "Direct Right Arithmetic Shift";

 ac = binary(A, Cnt);
 q = binary(Q, Cnt);
 m = binary(M, Cnt);

 result[deck] = result[deck] = {
 "count": count,
 "m": m,
 "ac": ac,
 "q": q,
 "Q1": Q1,
 "act": act
 };
 deck += 1;
 }
 count -= 1;
 }

 r = ac + " " + q;
 result[deck] = result[deck] = {
 "count": count,
 "r": r
 };
 }

 function sleep(ms) {
 return new Promise(resolve => setTimeout(resolve, ms));
 }

 function find_state(cnt) {
 let a = result[cnt].act;

 switch (a) {
 case "A = A - M":
 p.innerHTML = `${opt[2]}`;
 break;
 case "A = A + M":
 p.innerHTML = `${opt[1]}`;
 break;
 case "Initialization":
 p.innerHTML = `${opt[0]}`;
 break;
 case "Right Arithmetic Shift":
 p.innerHTML = `${opt[3]}`;
 break;
 case "Direct Right Arithmetic Shift":
 p.innerHTML = `${opt[4]}`;
 break;
 }
 }

 function buttonEnabled(next) {
 next.disabled = false;
 next.style.background = "#00904a";
 next.style.cursor = 'pointer';
 }

 function buttondisnabled(next) {
 next.disabled = true;
 next.style.background = "grey";
 next.style.cursor = 'default';
 }

 var result = [];
 var opt = ["Initialization", "As Q<sub>0</sub> = 0 and Q<sub>-1</sub> = 1, we add <b>M</b> (Multiplicand) into <b>A</b> (Accumulator). Thus A → A + M.",
 "As Q<sub>0</sub> = 1 and Q<sub>-1</sub> = 0, we subtract <b>M</b> (Multiplicand) from <b>A</b> (Accumulator). Thus A → A - M.",
 "We now perform Right Arithmetic Shift on <b>A</b>, <b>Q</b> and <b>Q<sub>-1</sub></b>. Additionally we decrement the <b>Count</b> by 1.",
 "As both Q<sub>0</sub> and Q<sub>-1</sub> are the same, we perform Right Arithmetic Shift on <b>A</b>, <b>Q</b> and <b>Q<sub>-1</sub></b>. Additionally, we decrement the <b>Count</b> by 1."
 ];

 var cnt = 0;
 const button = document.getElementById('calculate');
 const back = document.getElementById('check-back');
 const next = document.getElementById('check-next');
 const p = document.getElementById('comment');
 const ans = document.getElementById('confirm');
 const re = document.getElementById('result');
 const con = document.getElementById('con');
 var Q, M;

 button.addEventListener('click', async () => {
 result = [];
 buttondisnabled(next);
 buttondisnabled(back);
 next.style.display = '';
 back.style.display = '';
 p.style.display = '';
 con.style.display = '';
 ans.innerHTML = ``;
 re.innerHTML = ``;
 cnt = 0;

 M = parseInt(document.getElementById('first').value);
 Q = parseInt(document.getElementById('second').value);

 if (!(isNaN(M) || isNaN(Q))) {
 booth(M, Q);
 var count = result[0].count;
 ans.innerHTML = '';
 p.innerHTML = '';

 const giv = document.createElement('tr');
 giv.className = "row";
 giv.innerHTML = `<td>${result[0].count}</td>
 <td>${result[0].m}</td>
 <td>${result[0].ac}</td>
 <td>${result[0].q}</td>
 <td>${result[0].Q1}</td>
 <td>${result[0].act}</td>`;
 ans.appendChild(giv);
 find_state(cnt);

 button.style.background = "grey";
 button.disabled = true;

 await sleep(1000);

 buttonEnabled(next);
 button.style.background = "#0074d9";
 button.disabled = false;
 console.log(result);
 } else {
 console.log("Null values detected!");
 }
 });

 next.addEventListener('click', async () => {
 cnt += 1;
 const giv = document.createElement('tr');
 giv.innerHTML = `<td>${result[cnt].count}</td>
 <td>${result[cnt].m}</td>
 <td>${result[cnt].ac}</td>
 <td>${result[cnt].q}</td>
 <td>${result[cnt].Q1}</td>
 <td>${result[cnt].act}</td>`;
 ans.appendChild(giv);
 find_state(cnt);

 buttonEnabled(back);

 if (cnt >= result.length - 2) {
 buttondisnabled(next);
 re.innerHTML = `<h1>Final Answer</h1><p> M = (${M})<sub>10</sub> = (${result[0].m})<sub>2</sub><br>
 Q = (${Q})<sub>10</sub> = (${result[0].q})<sub>2</sub><br>
 Result = (${M*Q})<sub>10</sub> = (${result[result.length-1].r})<sub>2</sub></p>`;
 }
 });

 back.addEventListener('click', async () => {

 if (cnt >= result.length - 2) {
 re.innerHTML = ``;
 }

 cnt -= 1;
 ans.removeChild(ans.lastChild);
 find_state(cnt);

 if (cnt < 1) {
 buttondisnabled(back);
 
 }
 buttonEnabled(next);

 });
 </script>
 </div>
</main>
</body>

</html>
