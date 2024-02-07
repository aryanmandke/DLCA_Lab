<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Booth's Algorithm Quiz</title>
    <style>
        body {
            font-family: Helvetica, sans-serif;
            width: 100%;
            background: url("https://kjsit.somaiya.edu.in/assets/kjsieit/images/infra/two.jpg") no-repeat center center fixed;
            background-size: cover;
            justify-content: center;
            margin: 0;
        }

        main {
            font-family: Helvetica, sans-serif;
            align-items: center;
            margin: auto;
            max-width: 1000px;
        }

        header {
            display: flex;
            background-color: #971426;
            padding: 20px;
            color: #ffffff;
            width: 100%;
            box-sizing: border-box;
        }

        header h4 {
            margin: auto;
            text-align: center;
        }

        header a{
            text-decoration: none;
            font-weight: bold;
            color: #ffffff;
        }

        .quiz-container {
            width: 100%;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            text-align: left;
            /* Adjusted text alignment to left */
            margin: auto;
            height: fit-content;
            margin-bottom: 30px;
            max-width: 600px;
            /* Adjusted max-width for the main container */
        }

        .quiz-container h2 {
            color: #971426;
        }

        .quiz-container p {
            font-size: 16px; /* Adjusted font size to make it consistent */
            margin-bottom: 10px;
            /* Added margin for better spacing */
        }

        .logo {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        table{
        width: 100%;
        border-collapse: collapse;
        display: flex-start;
        font-size: 15px;
    
    }
    
    td{
        border: 1px solid black;
        padding: 8px;
        text-align: center;
    }
    
    th {
        background-color: #333;
        color: #fff;
        align-items: center;
        align-self: center;
        border: 1px solid #ccc;
        padding: 8px;
        text-align: center;
    }
    

    .mn{
        display: none;
        border: 2px solid #ccc;
        padding: 20px;
    }

    .hin{
        width: fit-content;
        display: flex;
        margin: auto;
    }

    #List{
        width: fit-content;
        font-size: 16px;
        padding: 5px;
        border-radius: 16px;
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

    #algoTable{
        width: 100%;
    }

        .logo img {
            max-width: 100px;
            max-height: 50px;
        }

        .white {
            color: #971426;
        }

        main {
            width: 80%;
            margin: auto;
        }

        .quiz-container ol {
            padding-left: 10px;
            margin-left: 10px;
            text-align: left;
            margin-top: 0;
        }

        .quiz-container ol li {
            margin-bottom: 10px;
        }

        .submit-button {
            background-color: #971426;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }

        .tab{
            width: 100%;
        }

        .feed-button{
            background-color: #971426;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            display: none;
        }

        .feedback {
            font-weight: bold;
            margin-top: 5px;
        }


        .feedback {
            font-weight: bold;
            margin-top: 5px;
        }

        .score {
            color: green;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <header>
        <a href="../booth/BoothTheo.php" class="back-button">Back</a>
        <h4>Booth's Algorithm Quiz</h4>
        <a style="-ms-user-select: none;user-select: none;color: #971426;" class="white">Back</a>
    </header>

    <main><br><br><br>
        <div class="quiz-container">
            <div class="logo">
                <img src="https://kjsit.somaiya.edu.in/assets/kjsieit/images/Logo/kjsieit-logo.svg" alt="Logo 1">
                <img src="https://somaiya.com/assets/somaiya_com/img/logo.png" alt="Logo 2">
            </div>
            <h2>Booth's Algorithm Quiz</h2>
            <div class="quiz">
            <ol>
                <div class="tab"></div>
            </ol>
            <button class="submit-button" onclick="submitQuiz()">Check Answer</button>
            <p class="score"></p>
            <a href="boothfeed.php"><button class="feed-button">Submit Feedback</button></a>
        </div>
    </main>

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
            while(N!=0){   
                i=N%2;
                N=Math.floor(N/2);
                ans=String(i)+ans;
                j+=1;
            }
            while(j<Cnt){
            ans="0"+ans;
            j+=1;
            }
            return ans;
        }
        function booth(M,Q){
        
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
        let ac,q,r,m; 
        let carry;
        var result = [];
    
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
        let Morg = M, Qorg = Q;
        if (negM === 1 || negQ === 1) {
            if (negM === 1) {
                M = nM;
            }
            if (negQ === 1) {
                Q = nQ;
            }
        }
        let Morg1 = M, Qorg1 = Q;
        while (count !== 0) {
            loop = 0;
            flag = odd(Q);
            if (flag === 1) {
                Q0 = 1;
            } else {
                Q0 = 0;
            }
            if(count==Cnt){

                ac = binary(A, Cnt);
                q = binary(Q, Cnt);
                m = binary(M , Cnt);
                act="Initialization";

                result[deck]={"count":count, "m":m,"ac":ac,"q":q,"Q1":Q1,"act":act};
                deck +=1;
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
    
                            act="A = A - M";
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
    
                            act="Right Arithmetic Shift";
    
                        }
                        loop += 1;
    
                        ac = binary(A, Cnt);
                        q = binary(Q, Cnt);
                        m = binary(M , Cnt);

                       result[deck]={"count":count, "m":m,"ac":ac,"q":q,"Q1":Q1,"act":act};
                        deck +=1;
             }
            }
             else {
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
    
                            act="A = A + M";
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
    
                            act="Right Arithmetic Shift";
    
                        }
                        loop += 1;
    
                        ac = binary(A, Cnt);
                        q = binary(Q, Cnt);
                        m = binary(M , Cnt);
    
                       result[deck]=result[deck]={"count":count, "m":m,"ac":ac,"q":q,"Q1":Q1,"act":act};
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
    
                act="Right Arithmetic Shift";
    
                         ac = binary(A, Cnt);
                         q = binary(Q, Cnt);
                         m = binary(M , Cnt);
     
                         result[deck]=result[deck]={"count":count, "m":m,"ac":ac,"q":q,"Q1":Q1,"act":act};
                         deck +=1;
                         
                        
             }
            count -= 1;
        }
    
        r=ac+" "+q;
        result[deck]={"count":count,"r":r};

        return result;
}

function load(r){
    var j = 0;
    var a = [];
    for(let i=0;i<r.length;i++){
            if(check(r[i],a)){
                        a[j] = r[i]; j += 1
            }
    }
    console.log(a);
    return a;
}

function check(r,a){;
    for(let i = 0;i<a.length;i++){
        if(a[i]==r){
            return false;
        }
    }
    return true;
}

function random(){
    let x = Math.floor(Math.random()*20 - 9);
    let y = Math.floor(Math.random()*20 - 9);
    var list = [];

    while(x==0){
        x = Math.floor(Math.random()*20 - 9);
    }
    while(y==0){
        y = Math.floor(Math.random()*20 - 9);
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

var result;
var count = [];
var questionOption=["What is the value of <b>AC</b> next step to be taken in the below given Booth's Algorithm?",
"What is the value of <b>Q</b> next step to be taken in the below given Booth's Algorithm?",
"What is next step to be taken in the below given Booth's Algorithm?"];

var index = 0;

function pool(r,c){
    var p = [];
    console.log(r);
    switch(c){
    case 0: for(let i=0;i<r.length-1;i++){
                p[i] = r[i].ac;
            }
            break;
    case 1: for(let i=0;i<r.length-1;i++){
                p[i] = r[i].q;
            }
            break;
    case 2: for(let i=0;i<r.length-1;i++){
                p[i] = ["A = A - M","A = A + M ","Right Arithmetic Shift"];
            }
            break;
    }

    return p;
}


function createOption(r,c,cnt){
    var p = pool(r,c);
    var k =0;
    var i = 0;

    if(c!=2){
    var q = load(p);
    var answer = p[cnt];
    for(i=0;i<q.length;i++){
        if(q[i]==answer){
            break;
        }
    }

    if(i==q.length-1){
        c0=-1;
        c1=-2;
    }
    else if(i==0){
        c0=1;
        c1=2;
    }
    else{
        c0=-1;
        c1=1;
    }

    console.log(q);
    console.log(answer);
    }

    k=i;
    
    var flag = true;

    if(c!=2){
    i=Math.floor(Math.random()*6);
    switch(i){
        case 0: ans=[answer,q[k+c0],q[k+c1]];break;
        case 1: ans=[q[k+c0],answer,q[k+c1]];break;
        case 2: ans=[q[k+c1],q[k+c0],answer];break;
        case 3: ans=[answer,q[k+c1],q[k+c0]];break;
        case 4: ans=[q[k+c1],answer,q[k+c0]];break;
        case 5: ans=[q[k+c0],q[k+c1],answer];break;
    }    
    }
    else{
        i=Math.floor(Math.random()*6);
        switch(i){
        case 0: ans=["A = A + M ","Right Arithmetic Shift","A = A - M"];break;
        case 1: ans=["A = A - M ","Right Arithmetic Shift","A = A + M"];break;
        case 2: ans=["A = A - M","A = A + M ","Right Arithmetic Shift"];break;
        case 3: ans=["A = A + M","A = A - M ","Right Arithmetic Shift"];break;
        case 4: ans=["Right Arithmetic Shift","A = A - M","A = A + M "];break;
        case 5: ans=["Right Arithmetic Shift","A = A + M","A = A - M "];break;
        }
    }

    return ans;
}

function  randomQuestion(i,answer,c,result){
    option = createOption(result,c,answer);
    console.log(option);
    opt = `<input type="radio" name="q${i}" value="${option[0]}"> ${option[0]} <br>
                    <input type="radio" name="q${i}" value="${option[1]}"> ${option[1]} <br>
                    <input type="radio" name="q${i}" value="${option[2]}"> ${option[2]} <br>
                    <p class="feedback"></p>`;
    return opt;
   
}

function createquestion(){
    var i=0;
    var index=0;
            while(i<3){
                var list = random();
            var result = booth(list[0],list[1]);
            var cnt = Math.floor(Math.random()*(result.length-4)+2);
            const li = document.createElement('li');
            li.innerHTML = `<p>${questionOption[index]}</p>
                    <table id="algoTable">
            <thead>
                <tr>
                    <th style="border-left: 1px solid black">Count</th>
                    <th>M</th>
                    <th>AC</th>
                    <th>Q</th>
                    <th>Q<sub>-1</sub></th>
                    <th style="border-right: 1px solid black">Action</th>
                </tr>
            </thead>
            <tbody id="algoBody"><td>${result[cnt].count}</td>
                <td>${result[cnt].m}</td>
                <td>${result[cnt].ac}</td>
                <td>${result[cnt].q}</td>
                <td>${result[cnt].Q1}</td>
                <td>${result[cnt].act}</td>
        </tbody></table><br>
        <div class="option">
            ${randomQuestion(i,cnt+1,i,result,opt)}
                </div>`;
                var opt = document.querySelector('.option');
            randomQuestion(i,cnt+1,i,result);

                tab.appendChild(li);
                count[i] = result[cnt+1];
                i+=1;
                index+=1;
    }  
}
const tab = document.querySelector('.tab');
createquestion();
        function submitQuiz() {
            const answers = {
                q0: count[0].ac,
                q1: count[1].q,
                q2: count[2].act
            };
            let score = 0;
            Object.keys(answers).forEach(question => {
                const selectedOption = document.querySelector(`input[name=${question}]:checked`);
                const selectedOption1 = document.querySelector(`input[name=${question}]`);
                const feedback = selectedOption1.parentElement.querySelector('.feedback');
                if (selectedOption) {
                    const userAnswer = selectedOption.value;
                    const correctAnswer = answers[question];
    
                    console.log(userAnswer);
                    if (userAnswer === correctAnswer) {
                        score++;
                        feedback.textContent = 'Correct Answer';
                        feedback.style.color = 'green';
                    } else {
                        feedback.textContent = 'Incorrect Answer';
                        feedback.style.color = 'red';
                    }
                 
                }
                else{
                        feedback.textContent = 'No Answer Selected';
                        feedback.style.color = 'red';
                    }

            });

            const scoreDisplay = document.querySelector('.score');
            scoreDisplay.textContent = `You scored ${score} out of ${Object.keys(answers).length}`;
            scoreDisplay.style.color = 'green';
            if(score>2){
            document.querySelector('.feed-button').style.display = 'block';
        }
        else{
            document.querySelector('.feed-button').style.display = 'none';
        }
            
        }


        
    </script>

</body>

</html>
