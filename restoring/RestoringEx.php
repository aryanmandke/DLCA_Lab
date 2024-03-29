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
    }
    
    th {
        background-color: #333;
        color: #fff;
        align-items: center;
        align-self: center;
    }
    
    input[type = 'text'],input[type = 'number']{
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
        <h1>Restoring Division Algorithm Excerise</h1>
        <h2>Solve the given problem in a step-wise manner.</h2>
    <div class="Q">
        <p>Dividend: <p id = "first"></p></p>
        <p>Divisor: <p id = "second"></p></p>
        <button id="reset">Get a Question!</button>
    </div>
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
            <tbody id="algoBody"><td><input type="number" id="count" min="1"></td>
                <td id="M"></td>
                <td><input type="text" id="AC" required></td>
                <td><input type="text" id="Q" required></td>
                <td>
                    <select id="List">
                        <option>A = A - M</option>
                        <option>Q[0] = 0, A = A + M </option>
                        <option>Q[0] = 1</option>
                        <option>Left Arithmetic Shift</option>
                    </select>
                </td>
            <td id="con"><button id="check" disabled="true" style="background: grey;">Check Answer</button></td>
        </tbody>
        </table>
 
        <div id = "result"></div>
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
        
        function bina(N, Cnt) {
            let i, j = 1,loop = 1;
            let ans="";
            i=N%2;
                N=Math.floor(N/2);
                    ans="_"+ans;
                    j+=1;
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
        
function restoring(Q,M){
   
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

           A = A + nM

         if(A > d){
               A = A % c
           }

           act = "A = A - M";
           ac = binary(A, Cnt);
           q = bina(Q, Cnt);
           m = binary(M , Cnt);

           result[deck]={count,m,ac,q,act};
           deck +=1;
       if(A >= b){
           A = A - nM;
           act = "Q[0] = 0, A = A + M";

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

       result[deck]={count,m,ac,q};
}

        function sleep(ms) {
            return new Promise(resolve => setTimeout(resolve, ms));
        }
        
        function random(){
            let x = Math.floor(Math.random()*10);
            let y = Math.floor(Math.random()*10);
            var list = [];
        
            while(x==0){
                x = Math.floor(Math.random()*10);
            }
            while(y==0){
                y = Math.floor(Math.random()*10);
            }
        
            if(Math.abs(x)>Math.abs(y)){
                list[1] = y;
                list[0] = x;
            }
            else{
                list[0] = y;
                list[1] = x;
            }
        
            return list;
        }
        
        var click = 0;
        var button = document.getElementById('reset');
        var check = document.getElementById('check');
        var M = document.getElementById('M');
        const re = document.getElementById('result');
        var final_result;
        var flag = true;
        var result = [];
        var Cnt = 1;
        var list;
        
        button.addEventListener('click', async () => {
                const ques = document.getElementById('algoBody');
                const ans = document.getElementById('confirm');
                const max = document.getElementById('count');
                var place1 = document.getElementById('first');
                var place2 = document.getElementById('second');
                ques.style.display = '';
                var count = document.getElementById('count');
                var AC = document.getElementById('AC');
                var Q = document.getElementById('Q');
                var act = document.getElementById('List');
                Cnt = 1;
                result = [];
        
                if (flag) {
                    list = random();
                    restoring(list[0],list[1]);
                    console.log(result);
        
                    place1.innerHTML = `${list[0]}`;
                    place2.innerHTML = `${list[1]}`;
                    max.max = `${result[0].count}`;
                    M.innerHTML = `${result[0].m}`;
            
                    const giv = document.createElement('tr');
                    giv.innerHTML = `<td>${result[0].count}</td>
                    <td>${result[0].m}</td>
                    <td>${result[0].ac}</td>
                    <td>${result[0].q}</td>
                    <td>${result[0].act}</td>`;
                    ans.appendChild(giv); 
                    
                    button.disabled = true;
                    button.style.background = 'grey';
                    await sleep(1000);
                   
                    button.innerHTML = `Another Question?`;
                    check.style.display = 'block';
                    check.disabled = false;
                    check.style.background = '#00904a';
        
                    flag = false;
            
                    button.disabled = true;
                    button.style.background = 'grey';
            
                    button.disabled = false;
                    button.style.background = '#0074d9';
                } 
                else {
                    button.disabled = true;
                    button.style.background = 'grey';
        
                    ans.innerHTML = '';
                    place1.innerHTML = ``;
                    place2.innerHTML = ``;
                    M.innerHTML = ``;
                    re.innerHTML = ``;
                    count.value ='';
                    AC.value = '';
                    Q.value = '';
                    check.disabled = true;
                    check.style.background = 'grey';
        
                    act.style.background = 'white';
                    Q.style.background = 'white'; AC.style.background = 'white'; 
                    max.style.background = 'white';
        
                    await sleep(1000);
        
                    button.disabled = false;
                    button.style.background = '#0074d9';
                    button.innerHTML = `Get Question!`;
                    flag = true;
        
                }
        });
        
        check.addEventListener('click', async () => {
            var count = document.getElementById('count');
            var M = document.getElementById('M');
            var AC = document.getElementById('AC');
            var Q = document.getElementById('Q');
            var act = document.getElementById('List');
            const ans = document.getElementById('confirm');
            let flag = 0;
            let dum = result;
        
            if(result[Cnt].count == count.value){
                count.style.background = 'green';
                flag += 1;
            }
            else{
                count.style.background = 'red';
            }
        
            if(result[Cnt].ac == AC.value){
                AC.style.background = 'green';
                flag += 1;
            }
            else{
                AC.style.background = 'red';
            }
        
            if(result[Cnt].q == Q.value){
                Q.style.background = 'green';
                flag += 1;
            }
            else{
                Q.style.background = 'red';
            }
        

            if(result[Cnt].act == act.value){
                act.style.background = 'green';
                flag += 1;
            }
            else{
                act.style.background = 'red';
            }

            await sleep(1000);

            act.style.background = 'white';
                 Q.style.background = 'white'; AC.style.background = 'white'; 
                 count.style.background = 'white';
        
            if(flag==4){
                const giv = document.createElement('tr');
                giv.innerHTML = `<td>${result[Cnt].count}</td>
                <td>${result[Cnt].m}</td>
                <td>${result[Cnt].ac}</td>
                <td>${result[Cnt].q}</td>
                <td>${result[Cnt].act}</td>`;
                ans.appendChild(giv); 
                Cnt += 1;
             
        
                await sleep(1000);

                count.value ='';
                    AC.value = '';
                    Q.value = '';
        
                act.style.background = 'white';
                 Q.style.background = 'white'; AC.style.background = 'white'; 
                 count.style.background = 'white';
            }
        
            console.log(dum.length);
        
            if(Cnt>=result.length-1){
                ques = document.getElementById('algoBody');
                ques.style.display = 'none';
        
                const re = document.getElementById('result');
        
                re.innerHTML = `<p> Q = (${list[0]})<sub>10</sub> = (${result[0].q})<sub>2</sub><br>
                M = (${list[1]})<sub>10</sub> = (${result[0].m})<sub>2</sub><br>
                Quotient = (${Math.floor(list[0]/list[1])})<sub>10</sub> = (${result[Cnt].q})<sub>2</sub><br>
                Remainder = (${list[0]%list[1]})<sub>10</sub> = (${result[Cnt].ac})<sub>2</sub>`;
            }
        });
        </script>
    </div>
</body>

</html>
