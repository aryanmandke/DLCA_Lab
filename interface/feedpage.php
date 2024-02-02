<?php 

include('../databaseinfo/database.php');

$sql = "SELECT * FROM feedback"; 
$result = mysqli_query($conn, $sql);
 $i = 0;
while($row = $result->fetch_array()) { 
	$studentdata[$i] = array( 
		"Username" => $row["user"], 
        "logic" => array("feed" => $row["logic"],"rat" => $row["logicrat"]),
        "booth" => array("feed" => $row["booth"],"rat" => $row["boothrat"]),
        "rest" => array("feed" => $row["rest"],"rat" => $row["restrat"]),
        "nonrest" => array("feed" => $row["nonrest"],"rat" => $row["nonresrat"]),
    );
    $i = $i + 1;
} 

$data = json_encode($studentdata);
$file = '../databaseinfo/data.json';

file_put_contents($file,$data);

mysqli_close($conn); 

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Ratings</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url("https://kjsit.somaiya.edu.in/assets/kjsieit/images/infra/two.jpg") no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            flex-direction: column;
            min-height: 100vh;
        }

        .feedback-container {
            width: 100%;
            margin: auto;
            margin-top: 5%;
            display: flex;
        }

        .userfeedback {
            padding: 10px;
            display: inline-block;
            background-color: rgba(246, 246, 246, 0.8);
            width: 70%;
            margin: auto;
            margin-bottom: 7%;
        }

        .userfeedback h2{
            margin: 10px;
            color: #971426;
            text-align: center;
            border: 0px solid #ccc;
            border-radius: 8px;

        }

        .user{
            font-size: 18px;
            font-weight: bold;
            color:black;
            padding-left: 1px;
            padding-right: 1px;
            display: inline-block;
        }
        
        .one{
            border: 1px solid black;
            border-radius: 8px;
            padding: 10px;
            margin: 10px;
        }
        .rate {
            color: #ff9800; /* Orange color for rating */
            font-size: 18px;
            display: inline-block;
        }

        .exp{
            display: inline-block;
            font-style: italic;
            color: grey;
            font-size: 18px;
            font-weight: 500;
        }

        .feed{
            display: inline-block;
            padding-left: 15px;
            margin-top: 5px;
        }

        .main{
            margin: auto;
            height: 20%;
        }

        .chart1 h2{
            margin: 10px;
            color: #971426;
            text-align: center;
        }


        .chart1{
            color: #971426;
            background-color: rgba(246, 246, 246, 0.8); 
            border-radius: 10px;
            margin: auto;
            width: 60%;
            margin-top: 5%;
            padding: 10px;
        }

        header {
            display: flex;
            background-color: #971426; 
            padding: 20px;
            color: #ffffff;
            width: 100%;
            box-sizing: border-box;
        }
        
        header h4{
            margin: auto;
            text-align: center;
        }

        header a{
            text-decoration: none;
            font-weight: bold;
            color: #ffffff;
        }
        header a:hover{
            text-decoration: none;
            font-weight: bold;
            color: yellowgreen;
            
        }

        #rating{
            padding: 5%;
            margin: auto;
        }
    </style>
</head>

<body>
    <header>
    <a href="../interface/VLab.php" class="back-button">Back</a>
    <h4>Comments</h4>
    <a style="-ms-user-select: none;user-select: none;color: #971426;" class="white" >Back</a>
    </header>
<main>
    <div class="main">
        
    <div class="chart1">
    <h2>Overall Review</h2>
        <canvas id="rating" style="width:70%;max-width:700px">
        </canvas>
    </div>
    <div class="feedback-container">

        <div class="userfeedback">
            <h2>Student FeedBack</h2>
        </div>
    </div>
    </div>
</main>
</body>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script> 


function rate(op,data){
    switch(op){
            case 1:   var sum = 0,k=1,flag=true;  
            for(let i=0; i< data.length; i++){
                console.log(data[i].booth.rat)
                if(parseInt(data[i].booth.rat) != 0){
                    sum += parseInt(data[i].booth.rat);
                    if(flag){
                        flag=false;
                    }
                    else{
                        k+=1;
                    }
                }
            }
            return sum/k;break;

            case 2:   var sum = 0,k=1,flag=true;  
            for(let i=0; i< data.length; i++){
                console.log(data[i].logic.rat)
                if(parseInt(data[i].logic.rat) != 0){
                    sum += parseInt(data[i].logic.rat);
                    if(flag){
                        flag=false;
                    }
                    else{
                        k+=1;
                    }
                }
            }
            return sum/k;break;
            
            case 3:   var sum = 0,k=1,flag=true;  
            for(let i=0; i< data.length; i++){
                console.log(data[i].rest.rat)
                if(parseInt(data[i].rest.rat) != 0){
                    sum += parseInt(data[i].rest.rat);
                    if(flag){
                        flag=false;
                    }
                    else{
                        k+=1;
                    }
                }
            }
            return sum/k;break;

            case 4:   var sum = 0,k=1,flag=true; 
            for(let i=0; i< data.length; i++){
                console.log(data[i].nonrest.rat)
                if(parseInt(data[i].nonrest.rat) != 0){
                    sum += parseInt(data[i].nonrest.rat);
                    if(flag){
                        flag=false;
                    }
                    else{
                        k+=1;
                    }
                }
            }
            return sum/k;break;
        }
}

function pep(op,data){
    switch(op){
            case 1:   var sum = 0;  
            for(let i=0; i< data.length; i++){
                console.log(data[i].booth.rat)
                if(parseInt(data[i].booth.rat) != 0){
                    sum += 1;
                }
            }
            return sum;break;

            case 2:   var sum = 0;  
            for(let i=0; i< data.length; i++){
                console.log(data[i].logic.rat)
                if(parseInt(data[i].logic.rat) != 0){
                    sum += 1;
                }
            }
            return sum;break;
            
            case 3:   var sum = 0;  
            for(let i=0; i< data.length; i++){
                console.log(data[i].rest.rat)
                if(parseInt(data[i].rest.rat) != 0){
                    sum += 1;
                }
            }
            return sum;break;

            case 4:   var sum = 0;  
            for(let i=0; i< data.length; i++){
                console.log(data[i].nonrest.rat)
                if(parseInt(data[i].nonrest.rat) != 0){
                    sum += 1;
                }
            }
            return sum;break;
        }
}

    var data;
            fetch('../databaseinfo/data.json').then((response) => response.json())
             .then((json) => {
                    data = json;

        var boothrat=rate(1,data),restrat=rate(3,data),nonrestrat=rate(4,data),logicrat=rate(2,data);


        
        var sum=0;


        console.log(data,boothrat,nonrestrat,restrat,logicrat);
        var logic = "Logic Gates: "+String(pep(2,data));
        var booth = "Booth's Algorithm: "+String(pep(1,data));
        var rest = "Restoring Division Algorithm: "+String(pep(3,data));
        var nonrest = "Non-Restoring Division Algorithm: "+String(pep(4,data));

        var xValues = [logic,booth,rest,nonrest];


new Chart("rating", {
  type: "bar",
  data: {
    labels: ["Rating"],
    datasets: [{
      backgroundColor: 'red',
      data: [logicrat],
      label: logic
    },{
      backgroundColor: 'green',
      data: [boothrat],
      label: booth
    },{
      backgroundColor: 'blue',
      data: [restrat],
      label: rest
    },{
      backgroundColor: 'orange',
      data: [nonrestrat],
      label: nonrest
    }]
  },
  options: {
            layout: {padding: {top:10}},
            legend: { display: true, position: 'top', fontsize: '22px', fontS: 'bold' },
            responsive: true,
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Experiments',
                        fontColor: '#911',
                        fontFamily: 'Comic Sans MS',
                        fontSize: 25,
                        fontStyle: 'bold',

                    },
                    ticks: {
                        autoskip: false,
                        beginAtZero: true

                    },
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Ratings',
                        fontColor: '#191',
                        fontFamily: 'Comic Sans MS',
                        fontSize: 25,
                        fontStyle: 'bold',
                    },

                    ticks: {
                        autoskip: false,
                        beginAtZero: true
                    },
                }]
            }
        }
});





const userfeed = document.querySelector('.userfeedback');

for(let i=0; i<data.length; i++){
    if(data[i].booth.rat != 0){
        app(data[i].Username,data[i].booth.rat,"Booth's Algorithm",data[i].booth.feed,userfeed);
    }

    if(data[i].logic.rat != 0){
        app(data[i].Username,data[i].logic.rat,"Logic Gates",data[i].logic.feed,userfeed);
    }

    if(data[i].rest.rat != 0){
        app(data[i].Username,data[i].rest.rat,"Restoring Division Algorithm",data[i].rest.feed,userfeed);
    }

    if(data[i].nonrest.rat != 0){
        app(data[i].Username,data[i].nonrest.rat,"Non-Restoring Division Algorithm",data[i].nonrest.feed,userfeed);
    }

}


function app(user,rate,exp,feed,one){
    const row = document.createElement('div');
    row.className = 'one';

    if(feed==""){
    row.innerHTML = `
                    <div class="user">${user}: </div>
                    <div class="rate">${rate}★</div>
                    <div class="exp">${exp}</div><br>`;
    }
    else{
    row.innerHTML = `
                    <div class="user">${user} </div>
                    <div class="rate">${rate}★</div>
                    <div class="exp">${exp}</div><br>
                    <div class="feed">${feed}</div>`;
    }

    one.appendChild(row);

}


});
   </script>
</body>
</html>


