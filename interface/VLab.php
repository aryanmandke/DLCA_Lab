<?php session_start(); ?>

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
<html>

<head>
 <style>
 .style-0 {
 cursor: auto;
 margin: 0px;
 padding: 0px;
 min-width: 320px;
 font-family: Montserrat, sans-serif;
 font-weight: 400;
 }

 .style-1 {
 position: fixed;
 z-index: 19;
 right: 20px;
 top: auto;
 bottom: 0px;
 transform: none;
 margin-bottom: 20px;
 }

 .style-2 {
 font-family: Montserrat, sans-serif;
 width: 50px;
 height: 50px;
 display: flex;
 -webkit-box-pack: center;
 justify-content: center;
 -webkit-box-align: center;
 align-items: center;
 cursor: pointer;
 outline: rgb(0, 0, 0) none 0px;
 visibility: hidden;
 opacity: 0;
 transition: opacity 0.2s ease 0s, visibility 0.2s ease 0s;
 background: rgba(0, 0, 0, 0) linear-gradient(rgb(255, 255, 255) 0%, rgb(255, 255, 255) 100%) no-repeat scroll 0% 0% / auto padding-box border-box;
 border: 1px solid rgb(255, 255, 255);
 border-radius: 10px;
 box-shadow: rgba(153, 4, 4, 0.15) 0px 4px 8px 0px;
 }

 .style-3 {
 display: flex;
 width: 2rem;
 height: 32px;
 }

 .style-4 {
 flex-shrink: 0;
 fill: rgb(241, 37, 37);
 pointer-events: none;
 width: 100%;
 height: 32px;
 max-width: 32px;
 max-height: 32px;
 }

 .style-5 {
 position: relative;
 }

 .style-6 {
 position: relative;
 }

 .style-7 {
 position: absolute;
 visibility: hidden;
 width: 0px;
 height: 0px;
 top: -121px;
 left: 756.5px;
 }

 .style-8 {
 position: absolute;
 visibility: hidden;
 width: 0px;
 height: 0px;
 top: -121px;
 left: 756.5px;
 }

 .style-9 {
 flex-direction: column;
 padding: 0px;
 position: relative;
 overflow: hidden;
 word-break: break-word;
 display: flex;
 }

 .style-10 {
 position: absolute;
 top: 0px;
 width: 100%;
 height: 796px;
 background-image: linear-gradient(rgba(153, 4, 4, 0), rgba(153, 4, 4, 0)), url('https://hosting.renderforestsites.com/23709306/1145181/media/13e801226c90236c5c5cb3c3dc234cea.png');
 background-size: auto, cover;
 background-repeat: repeat, no-repeat;
 background-origin: padding-box, padding-box;
 -webkit-background-clip: border-box, border-box;
 background-color: rgba(0, 0, 0, 0);
 background-position: 50% 50%, 50% 50%;
 background-attachment: fixed, fixed;
 }

 .style-11 {
 width: 100%;
 background: white none repeat scroll 0% 0% / auto padding-box border-box;
 padding-top: 0px;
 box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 8px 0px;
 z-index: 9;
 top: 0px;
 left: 0px;
 right: 0px;
 position: fixed;
 border-bottom: 4px solid #971426;
 }

 .style-12 {
 font-family: Poppins;
 font-weight: 300;
 width: 100%;
 max-width: 1500px;
 position: relative;
 padding: 0px 20px;
 margin: 0px auto;
 z-index: 19;
 display: flex;
 -webkit-box-align: center;
 align-items: center;
 -webkit-box-pack: justify;
 justify-content: space-between;
 box-sizing: border-box;
 
 }

 .style-13 {
 transition: padding 0.3s linear 0s;
 padding: 10px 0px;
 }

 .style-14 {
 margin: 0px;
 padding: 0px;
 }

 .style-15 {
 display: flex;
 align-items: center;
 position: relative;
 }

 .style-16 {
 color: rgb(0, 0, 0);
 text-decoration: none solid rgb(0, 0, 0);
 }

 .style-17 {
 margin: 0px;
 padding: 0px;
 font-size: 0px;
 height: 49.9844px;
 width: 100%;
 overflow: hidden;
 position: relative;
 }

 .style-18 {
 height: auto;
 object-fit: contain;
 border-right: 2px solid #971426;
 padding: 3px;
 position: relative;
 opacity: 1;
 }

 .style-19 {
 display: flex;
 visibility: hidden;
 opacity: 1;
 position: absolute;
 top: 0px;
 left: 0px;
 width: 100%;
 height: 49.9844px;
 -webkit-box-align: center;
 align-items: center;
 -webkit-box-pack: center;
 justify-content: center;
 background: rgba(255, 255, 255, 0.6) none repeat scroll 0% 0% / auto padding-box border-box;
 box-sizing: border-box;
 }

 .style-20 {
 display: flex;
 flex-direction: column;
 -webkit-box-align: center;
 align-items: center;
 -webkit-box-pack: center;
 justify-content: center;
 }

 .style-21 {
 display: flex;
 -webkit-box-align: center;
 align-items: center;
 -webkit-box-pack: end;
 justify-content: flex-end;
 width: 100%;
 margin: 0px 20px;
 }

 .style-22 {
 display: flex;
 -webkit-box-align: center;
 align-items: center;
 padding: 10px 0px;
 }

 .style-23 {
 display: block;
 position: relative;
 }

 .style-24 {
 display: flex;
 align-items: center;
 position: relative;
 }

 .style-25 {
 color: #971426;
 text-decoration: none solid #971426;
 
 text-overflow: ellipsis;
 max-width: 250px;
 display: block;
 overflow: hidden;
 width: 100%;
 padding: 10px;
 white-space: nowrap;
 transition: all ease 0.3s;
 font-size: 23px;
 }

 .style-25:hover{
    font-size:25px;
    border-radius: 6px;
    background-color: rgba(162, 161, 161, 0.484);
 }

 .style-26 {
 display: block;
 position: relative;
 }

 .style-27 {
 display: flex;
 align-items: center;
 position: relative;
 }

 .style-28 {
 color: #971426;
 text-decoration: none solid #971426;
 cursor: pointer;
 text-overflow: ellipsis;
 max-width: 250px;
 display: block;
 overflow: hidden;
 width: 100%;
 padding: 10px;
 white-space: nowrap;
 transition: all ease 0.3s;
 font-size: 23px;
 }

 .style-28:hover{
    font-size: 25px;
    border-radius: 6px;
    background-color: rgba(162, 161, 161, 0.484);
 }
 .style-29 {
 display: block;
 position: relative;
 }

 .style-30 {
 display: flex;
 align-items: center;
 position: relative;
 }

 .style-31 {
 color: #971426;
 text-decoration: none solid #971426;
 cursor: pointer;
 text-overflow: ellipsis;
 max-width: 250px;
 display: block;
 overflow: hidden;
 width: 100%;
 padding: 10px;
 white-space: nowrap;
 transition: all ease 0.3s;
 font-size: 23px;
 }

 .style-31:hover{
    font-size: 25px;
    border-radius: 6px;
    background-color: rgba(162, 161, 161, 0.484);
 }
 .style-32 {
 display: block;
 position: relative;
 }

 .style-33 {
 display: flex;
 align-items: center;
 position: relative;
 }

 .style-34 {
 color: #971426;
 text-decoration: none solid #971426;
 cursor: pointer;
 text-overflow: ellipsis;
 max-width: 250px;
 display: block;
 overflow: hidden;
 width: 100%;
 padding: 10px;
 white-space: nowrap;
 transition: all ease 0.3s;
 font-size: 23px;
 }

 .style-34:hover{
    font-size: 25px;
    border-radius: 6px;
    background-color: rgba(162, 161, 161, 0.484);
 }

 .style-35 {
 display: block;
 position: relative;
 }

 .style-36 {
 display: flex;
 align-items: center;
 position: relative;
 }

 .style-37 {
 color: #971426;
 text-decoration: none solid #971426;
 cursor: pointer;
 text-overflow: ellipsis;
 max-width: 250px;
 display: block;
 overflow: hidden;
 width: 100%;
 padding: 10px;
 white-space: nowrap;
 transition: all ease 0.3s;
 font-size: 23px;
 }

 .style-37:hover{
    font-size: 25px;
    border-radius: 6px;
    background-color: rgba(162, 161, 161, 0.484);
 }
 .style-38 {
 display: block;
 position: relative;
 }

 .style-39 {
 display: flex;
 align-items: center;
 position: relative;
 }

 

 .style-41 {
 display: flex;
 padding: 10px 0px;
 }

 .style-42 {
 display: flex;
 box-sizing: border-box;
 }

 .style-43 {
 display: flex;
 align-items: center;
 position: relative;
 }

 .style-44 {
 color: rgb(0, 0, 0);
 text-decoration: none solid rgb(0, 0, 0);
 width: 22px;
 height: 36px;
 display: flex;
 -webkit-box-pack: center;
 justify-content: center;
 -webkit-box-align: center;
 align-items: center;
 margin: 5px;
 fill: rgb(255, 255, 255);
 }

 .style-45 {
 display: flex;
 width: 1.2rem;
 height: 19.1875px;
 }

 .style-46 {
 pointer-events: none;
 width: 100%;
 height: 19.1875px;
 max-width: 19.2px;
 max-height: 19.2px;
 }

 .style-47 {
 display: flex;
 align-items: center;
 position: relative;
 }

 .style-48 {
 color: rgb(0, 0, 0);
 text-decoration: none solid rgb(0, 0, 0);
 width: 22px;
 height: 36px;
 display: flex;
 -webkit-box-pack: center;
 justify-content: center;
 -webkit-box-align: center;
 align-items: center;
 margin: 5px;
 fill: rgb(255, 255, 255);
 }

 .style-49 {
 display: flex;
 width: 1.2rem;
 height: 19.1875px;
 }

 .style-50 {
 pointer-events: none;
 width: 100%;
 height: 19.1875px;
 max-width: 19.2px;
 max-height: 19.2px;
 }

 .style-51 {
 display: flex;
 align-items: center;
 position: relative;
 }

 .style-52 {
 color: rgb(0, 0, 0);
 text-decoration: none solid rgb(0, 0, 0);
 width: 22px;
 height: 36px;
 display: flex;
 -webkit-box-pack: center;
 justify-content: center;
 -webkit-box-align: center;
 align-items: center;
 margin: 5px;
 fill: rgb(255, 255, 255);
 }

 .style-53 {
 display: flex;
 width: 1.2rem;
 height: 19.1875px;
 }

 .style-54 {
 pointer-events: none;
 width: 100%;
 height: 19.1875px;
 max-width: 19.2px;
 max-height: 19.2px;
 }

 .style-55 {
 display: none;
 }

 .style-56 {
 margin: 10px 0px 10px auto;
 z-index: 2;
 display: block;
 color: rgb(255, 255, 255);
 }

 .style-57 {
 display: flex;
 width: 1.5rem;
 height: 24px;
 }

 .style-58 {
 pointer-events: none;
 width: 100%;
 height: 100%;
 max-width: 24px;
 max-height: 24px;
 fill: rgb(255, 255, 255);
 }

 .style-59 {
 min-width: 100%;
 position: relative;
 padding-left: 0px;
 padding-right: 0px;
 padding-top: 621px;
 width: 95%;
 max-width: 1400px;
 margin: 0px auto;
 box-sizing: border-box;
 }

 .style-60 {
 position: relative;
 margin-right: auto;
 margin-left: auto;
 }

 .style-61 {
 position: absolute;
 z-index: 1;
 top: -185px;
 left: 0px;
 right: 0px;
 }

 .style-62 {
 width: 100%;
 filter: drop-shadow(rgba(255, 255, 255, 0.3) 1px 1px 2px);
 }

 .style-63 {
 fill: rgb(153, 4, 4);
 }

 .style-64 {
 width: 100%;
 position: relative;
 z-index: 2;
 padding-bottom: 80px;
 background-color: rgb(153, 4, 4);
 }

 .style-65 {
 display: flex;
 -webkit-box-align: center;
 align-items: center;
 -webkit-box-pack: justify;
 justify-content: space-between;
 width: 95%;
 max-width: 1400px;
 position: relative;
 margin: 0px auto;
 box-sizing: border-box;
 }

 .style-66 {
 margin-right: 40px;
 width: 50%;
 max-width: 600px;
 }

 .style-67 {
 margin: 0px;
 padding: 0px;
 position: relative;
 white-space: pre-line;
 color: rgb(255, 255, 255);
 width: 100%;
 max-width: 1300px;
 text-align: left;
 margin-bottom: 0px;
 padding-top: 0px;
 font-family: Poppins;
 font-weight: 700;
 font-size: 46.6px;
 }

 .style-68 {
 margin: 0px;
 padding: 20px 0px 0px;
 position: relative;
 white-space: pre-line;
 color: rgb(255, 255, 255);
 line-height: 29.76px;
 padding-top: 20px;
 width: 100%;
 max-width: 1300px;
 text-align: left;
 font-family: Poppins;
 font-weight: 300;
 font-size: 19.84px;
 }

 .style-69 {
 margin-top: 20px;
 }

 .style-70 {
 display: flex;
 align-items: center;
 position: relative;
 }

 .style-71 {
 color: rgb(249, 249, 249);
 text-decoration: none solid rgb(249, 249, 249);
 font-family: Poppins;
 font-weight: 500;
 -webkit-box-align: center;
 align-items: center;
 display: flex;
 font-size: 16px;
 }

 .style-72 {
 margin-left: 0px;
 padding-left: 5px;
 min-width: 24px;
 transition: transform 0.15s linear 0s;
 display: flex;
 width: 1.5rem;
 height: 24px;
 }

 .style-73 {
 fill: rgb(249, 249, 249);
 pointer-events: none;
 width: 100%;
 height: 24px;
 max-width: 24px;
 max-height: 24px;
 }

 .style-74 {
 display: flex;
 flex-direction: column;
 -webkit-box-align: center;
 align-items: center;
 -webkit-box-pack: center;
 justify-content: center;
 width: 60%;
 max-width: 660px;
 }

 .style-75 {
 margin-right: -20px;
 display: flex;
 flex-wrap: wrap;
 width: 100%;
 max-width: 810px;
 -webkit-box-pack: center;
 justify-content: center;
 }

 .style-76 {
 margin-top: 20px;
 margin-right: 20px;
 margin-left: 20px;
 width: 180px;
 min-width: 180px;
 display: flex;
 flex-direction: column;
 -webkit-box-align: center;
 align-items: center;
 outline: rgb(0, 0, 0) none 0px;
 box-sizing: border-box;
 }

 .style-77 {
 position: relative;
 width: 100%;
 flex-direction: column;
 -webkit-box-align: center;
 align-items: center;
 box-sizing: border-box;
 display: flex;
 }

 .style-78 {
 min-width: 100%;
 display: flex;
 margin-top: 0px;
 }

 .style-79 {
 margin: 0px;
 padding: 0px;
 position: relative;
 white-space: pre-line;
 min-width: 100%;
 width: 100%;
 color: rgb(255, 255, 255);
 margin-bottom: 0px;
 text-align: center;
 font-family: Poppins;
 font-weight: 700;
 font-size: 46.6px;
 }

 .style-80 {
 min-width: 100%;
 visibility: hidden;
 margin-bottom: 0px;
 font-family: Poppins;
 font-weight: 700;
 font-size: 46.6px;
 }

 .style-81 {
 margin: 10px 0px 0px;
 padding: 0px;
 word-break: break-word;
 position: relative;
 white-space: pre-line;
 width: 100%;
 color: rgb(255, 255, 255);
 text-align: center;
 margin-top: 10px;
 font-family: Poppins;
 font-weight: 300;
 font-size: 19.84px;
 line-height: 27.776px;
 }

 .style-82 {
 margin-top: 20px;
 margin-right: 20px;
 margin-left: 20px;
 width: 180px;
 min-width: 180px;
 display: flex;
 flex-direction: column;
 -webkit-box-align: center;
 align-items: center;
 outline: rgb(0, 0, 0) none 0px;
 box-sizing: border-box;
 }

 .style-83 {
 position: relative;
 width: 100%;
 flex-direction: column;
 -webkit-box-align: center;
 align-items: center;
 box-sizing: border-box;
 display: flex;
 }

 .style-84 {
 min-width: 100%;
 display: flex;
 margin-top: 0px;
 }

 .style-85 {
 margin: 0px;
 padding: 0px;
 position: relative;
 white-space: pre-line;
 min-width: 100%;
 width: 100%;
 color: rgb(255, 255, 255);
 margin-bottom: 0px;
 text-align: center;
 font-family: Poppins;
 font-weight: 700;
 font-size: 46.6px;
 }

 .style-86 {
 min-width: 100%;
 visibility: hidden;
 margin-bottom: 0px;
 font-family: Poppins;
 font-weight: 700;
 font-size: 46.6px;
 }

 .style-87 {
 margin: 10px 0px 0px;
 padding: 0px;
 word-break: break-word;
 position: relative;
 white-space: pre-line;
 width: 100%;
 color: rgb(255, 255, 255);
 text-align: center;
 margin-top: 10px;
 font-family: Poppins;
 font-weight: 300;
 font-size: 19.84px;
 line-height: 27.776px;
 }

 .style-88 {
 margin-top: 20px;
 margin-right: 20px;
 margin-left: 20px;
 width: 180px;
 min-width: 180px;
 display: flex;
 flex-direction: column;
 -webkit-box-align: center;
 align-items: center;
 outline: rgb(0, 0, 0) none 0px;
 box-sizing: border-box;
 }

 .style-89 {
 position: relative;
 width: 100%;
 flex-direction: column;
 -webkit-box-align: center;
 align-items: center;
 box-sizing: border-box;
 display: flex;
 }

 .style-90 {
 min-width: 100%;
 display: flex;
 margin-top: 0px;
 }

 .style-91 {
 margin: 0px;
 padding: 0px;
 position: relative;
 white-space: pre-line;
 min-width: 100%;
 width: 100%;
 color: rgb(255, 255, 255);
 margin-bottom: 0px;
 text-align: center;
 font-family: Poppins;
 font-weight: 700;
 font-size: 46.6px;
 }

 .style-92 {
 min-width: 100%;
 visibility: hidden;
 margin-bottom: 0px;
 font-family: Poppins;
 font-weight: 700;
 font-size: 46.6px;
 }

 .style-93 {
 margin: 10px 0px 0px;
 padding: 0px;
 word-break: break-word;
 position: relative;
 white-space: pre-line;
 width: 100%;
 color: rgb(255, 255, 255);
 text-align: center;
 margin-top: 10px;
 font-family: Poppins;
 font-weight: 300;
 font-size: 19.84px;
 line-height: 27.776px;
 }

 .style-94 {
 width: 100%;
 bottom: 0px;
 display: flex;
 flex-direction: column;
 z-index: 20;
 }

 .style-95 {
 opacity: 0;
 visibility: hidden;
 background: rgba(0, 0, 0, 0.6) none repeat scroll 0% 0% / auto padding-box border-box;
 height: 100%;
 left: 0px;
 position: fixed;
 top: 0px;
 width: 100%;
 z-index: 104;
 display: none;
 }

 .style-96 {
 background-color: rgb(255, 255, 255);
 border-radius: 20px;
 display: flex;
 left: 50%;
 min-height: 526px;
 position: absolute;
 top: 50%;
 width: 880px;
 z-index: 10;
 box-shadow: rgba(56, 125, 255, 0.3) 0px 6px 12px 0px;
 max-width: 90%;
 transform: none;
 box-sizing: border-box;
 }

 .style-97 {
 border-radius: 20px 0px 0px 20px;
 box-sizing: border-box;
 flex: 1 1 0%;
 max-width: 490px;
 padding: 44px 36px 32px;
 }

 .style-98 {
 display: flex;
 flex-direction: column;
 height: 100%;
 max-width: 100%;
 position: relative;
 z-index: 1;
 }

 .style-99 {
 color: rgb(37, 46, 72);
 font-size: 20px;
 font-weight: 700;
 line-height: 28px;
 margin-bottom: 45px;
 text-align: center;
 margin: 0px 0px 45px;
 padding: 0px;
 word-break: break-word;
 }

 .style-100 {
 background: rgba(0, 0, 0, 0) -webkit-linear-gradient(0deg, rgb(118, 109, 232) 0px, rgb(255, 0, 137) 80%, rgb(255, 0, 107) 100%) repeat scroll 0% 0% / auto padding-box;
 -webkit-background-clip: text;
 -webkit-text-fill-color: rgba(0, 0, 0, 0);
 -webkit-box-decoration-break: clone;
 }

 .style-101 {
 display: flex;
 flex-direction: column;
 flex-grow: 1;
 }

 .style-102 {
 text-align: center;
 width: 100%;
 }

 .style-103 {
 object-fit: contain;
 user-select: none;
 display: inline-block;
 width: auto !important;
 }

 .style-104 {
 color: rgb(37, 46, 72);
 font-size: 18px;
 font-weight: 600;
 margin: 0px auto 8px;
 max-width: 290px;
 padding: 0px;
 word-break: break-word;
 }

 .style-105 {
 color: rgb(118, 131, 168);
 font-size: 12px;
 font-weight: 400;
 text-decoration: line-through solid rgb(118, 131, 168);
 margin: 0px;
 padding: 0px;
 word-break: break-word;
 }

 .style-106 {
 text-align: center;
 width: 100%;
 }

 .style-107 {
 object-fit: contain;
 user-select: none;
 display: inline-block;
 width: auto !important;
 }

 .style-108 {
 color: rgb(37, 46, 72);
 font-size: 18px;
 font-weight: 600;
 margin: 0px auto 8px;
 max-width: 290px;
 padding: 0px;
 word-break: break-word;
 }

 .style-109 {
 color: rgb(118, 131, 168);
 font-size: 12px;
 font-weight: 400;
 text-decoration: line-through solid rgb(118, 131, 168);
 margin: 0px;
 padding: 0px;
 word-break: break-word;
 }

 .style-110 {
 text-align: center;
 width: 100%;
 }

 .style-111 {
 object-fit: contain;
 user-select: none;
 display: inline-block;
 width: auto !important;
 }

 .style-112 {
 color: rgb(37, 46, 72);
 font-size: 18px;
 font-weight: 600;
 margin: 0px auto 8px;
 max-width: 290px;
 padding: 0px;
 word-break: break-word;
 }

 .style-113 {
 text-align: center;
 width: 100%;
 }

 .style-114 {
 object-fit: contain;
 user-select: none;
 display: inline-block;
 width: auto !important;
 }

 .style-115 {
 color: rgb(37, 46, 72);
 font-size: 18px;
 font-weight: 600;
 margin: 0px auto 8px;
 max-width: 290px;
 padding: 0px;
 word-break: break-word;
 }

 .style-116 {
 color: rgb(118, 131, 168);
 font-size: 12px;
 font-weight: 400;
 text-decoration: line-through solid rgb(118, 131, 168);
 margin: 0px;
 padding: 0px;
 word-break: break-word;
 }

 .style-117 {
 text-align: center;
 width: 100%;
 }

 .style-118 {
 object-fit: contain;
 user-select: none;
 display: inline-block;
 width: auto !important;
 }

 .style-119 {
 color: rgb(37, 46, 72);
 font-size: 18px;
 font-weight: 600;
 margin: 0px auto 8px;
 max-width: 290px;
 padding: 0px;
 word-break: break-word;
 }

 .style-120 {
 color: rgb(118, 131, 168);
 font-size: 12px;
 font-weight: 400;
 text-decoration: line-through solid rgb(118, 131, 168);
 margin: 0px;
 padding: 0px;
 word-break: break-word;
 }

 .style-121 {
 text-align: center;
 width: 100%;
 }

 .style-122 {
 object-fit: contain;
 user-select: none;
 display: inline-block;
 width: auto !important;
 }

 .style-123 {
 color: rgb(37, 46, 72);
 font-size: 18px;
 font-weight: 600;
 margin: 0px auto 8px;
 max-width: 290px;
 padding: 0px;
 word-break: break-word;
 }

 .style-124 {
 color: rgb(37, 46, 72);
 font-size: 12px;
 font-weight: 400;
 margin: 0px;
 padding: 0px;
 word-break: break-word;
 }

 .style-125 {
 text-align: center;
 width: 100%;
 }

 .style-126 {
 object-fit: contain;
 user-select: none;
 display: inline-block;
 width: auto !important;
 }

 .style-127 {
 color: rgb(37, 46, 72);
 font-size: 18px;
 font-weight: 600;
 margin: 0px auto 8px;
 max-width: 290px;
 padding: 0px;
 word-break: break-word;
 }

 .style-128 {
 color: rgb(37, 46, 72);
 font-size: 12px;
 font-weight: 400;
 margin: 0px;
 padding: 0px;
 word-break: break-word;
 }

 .style-129 {
 bottom: 0px;
 display: none;
 left: 0px;
 margin: 0px auto;
 max-width: fit-content;
 min-width: 200px;
 position: absolute;
 right: 0px;
 text-transform: uppercase;
 z-index: 1;
 border: 0px none rgb(255, 255, 255);
 border-radius: 5px;
 color: rgb(255, 255, 255);
 font-size: 18px;
 height: 50px;
 line-height: 50px;
 box-sizing: border-box;
 padding: 0px 30px;
 font-weight: 500;
 text-align: center;
 transition: all 0.2s ease 0s;
 white-space: nowrap;
 background: rgba(0, 0, 0, 0) linear-gradient(rgb(140, 131, 247) 0px, rgb(101, 91, 226) 100%) repeat scroll 0% 0% / auto padding-box border-box;
 box-shadow: rgba(118, 109, 232, 0.5) 0px 6px 12px 0px;
 font-family: Montserrat, sans-serif;
 }

 .style-130 {
 background-image: url('https://static.rfstat.com/renderforest/images/v2/migration/migration-back.png');
 background-position: 0% 50%;
 background-repeat: no-repeat;
 background-size: cover;
 border-radius: 0px 20px 20px 0px;
 flex: 0 1 390px;
 position: relative;
 }

 .style-131 {
 bottom: 30px;
 height: 230px;
 position: absolute;
 right: -80px;
 transform: none;
 width: 208px;
 will-change: transform;
 }

 .style-132 {
 animation: 20s linear 0.4s infinite normal none running astronautAnim;
 height: 100%;
 object-fit: contain;
 user-select: none;
 width: 100%;
 will-change: transform;
 }

 .style-133 {
 background: rgba(0, 0, 0, 0.6) none repeat scroll 0% 0% / auto padding-box border-box;
 height: 100%;
 left: 0px;
 position: fixed;
 top: 0px;
 width: 100%;
 z-index: 104;
 display: none;
 }

 .style-134 {
 background-color: rgb(255, 255, 255);
 border-radius: 20px;
 left: 50%;
 min-height: 200px;
 padding: 44px;
 position: absolute;
 top: 50%;
 width: 360px;
 z-index: 11;
 box-shadow: rgba(56, 125, 255, 0.3) 0px 6px 12px 0px;
 max-width: 90%;
 transform: none;
 box-sizing: border-box;
 }

 .style-135 {
 color: rgb(37, 46, 72);
 font-size: 16px;
 font-weight: 400;
 line-height: 24px;
 margin-bottom: 32px;
 text-align: center;
 }

 .style-136 {
 border-radius: 5px;
 width: 100%;
 height: 50px;
 line-height: 50px;
 padding: 0px 30px;
 font-size: 18px;
 color: rgb(255, 255, 255);
 cursor: pointer;
 transition: all 0.1s linear 0s;
 text-transform: uppercase;
 font-weight: 400;
 user-select: none;
 text-decoration: none solid rgb(255, 255, 255);
 background-repeat: no-repeat;
 display: inline-block;
 font-family: Montserrat, sans-serif;
 }

 .style-137 {
 display: none;
 position: absolute;
 top: 64px;
 right: 0px;
 z-index: 1001;
 }
 </style>
</head>

<body class="style-0">
 <div class="">
 <div class="style-1"><button class="style-2">
 <div data-name="arrow_small_top" class="style-3"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" class="style-4">
 <path d="M24.567 20.862a1.619 1.619 0 000-2.283l-7.417-7.433a1.618 1.618 0 00-2.3 0l-7.417 7.433a1.619 1.619 0 000 2.283 1.619 1.619 0 002.283 0l6.283-6.283 6.283 6.283a1.619 1.619 0 002.283 0z" class=""></path>
 </svg></div>
 </button></div>
 <div class="style-5">
 <div class="">
 <header class="">
 <div class="style-6">
 <div class="style-7"></div>
 <div class="style-8"></div>
 <div class="style-9">
 <div class="style-10"></div>
 <div class="style-11">
 <div type="header" class="style-12">
 <div class="style-13">
 <figure class="style-14">
 <div class="style-15"><a class="style-16" href="/website-maker/preview/lang/site/1145181/">
 <figure class="style-17"><img color="default" width="231.4814814814815" class="style-18" alt="Navbar logo" sizes="[object Object]" src="https://hosting.renderforestsites.com/23709306/1145181/media/b7ecf7f6fdf95b8bb92e3b9212ff33b3.png" /></figure>
 <div class="style-19">
 <div class="style-20"></div>
 </div>
 </a></div>
 </figure>
 </div>
 <div class="style-21">
 <nav class="style-22">
 <div class="style-23">
 <div class="style-24"><a class="style-25"  href="VLab.php">Home</a></div>
 </div>
 <div class="style-26">
 <div class="style-27"><a class="style-28" href="pre.php">Prerequisites</a></div>
 </div>
 <div class="style-26">
 <div class="style-27"><a class="style-28" href="List.php">Experiments</a></div>
 </div>
 <div class="style-29">
 <div class="style-30"><a class="style-31" href="feedpage.php">Feedback</a></div>
 </div>
 <div class="style-32">
 <div class="style-33"><a class="style-34" href="">About Us</a></div>
 </div>
 <div class="style-35">
 <div class="style-36"><a class="style-37" href="logout.php">Logout</a></div>
 </div>
 
 
 </nav>
 <div class="style-41">
 <div class="style-42">
 <div class="style-43"><a aria-label="Social link" class="style-44" target="_blank" rel="noopener noreferrer" href="https://www.facebook.com">
 <div data-name="icon-facebook" class="style-45"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" class="style-46">
 <path d="M12.026 6.81v4.13H9v5.051h3.026V31h6.216V15.992h4.171s.391-2.422.58-5.07h-4.728V7.469c0-.516.678-1.21 1.348-1.21H23V1.001h-4.605c-6.523 0-6.369 5.055-6.369 5.81z" class=""></path>
 </svg></div>
 </a></div>
 <div class="style-47"><a aria-label="Social link" class="style-48" target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com">
 <div data-name="icon-linkedin" class="style-49"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" class="style-50">
 <path d="M29.333 18.777v9.83h-5.716v-9.172c0-2.304-.827-3.876-2.896-3.876-1.579 0-2.519 1.06-2.933 2.085-.151.366-.19.877-.19 1.389v9.574h-5.717s.077-15.534 0-17.144h5.717v2.43l-.038.055h.038v-.055c.76-1.166 2.116-2.833 5.152-2.833 3.762 0 6.582 2.45 6.582 7.716zM5.902 3.2c-1.956 0-3.235 1.279-3.235 2.961 0 1.646 1.242 2.964 3.159 2.964h.038c1.994 0 3.234-1.318 3.234-2.964C9.06 4.479 7.858 3.2 5.902 3.2zM3.006 28.608h5.715V11.464H3.006v17.144z" class=""></path>
 </svg></div>
 </a></div>
 <div class="style-51"><a aria-label="Social link" class="style-52" target="_blank" rel="noopener noreferrer" href="https://www.instagram.com">
 <div data-name="icon-instagram" class="style-53"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" class="style-54">
 <path d="M16 8.5a7.5 7.5 0 100 15 7.5 7.5 0 000-15zm0 12.188A4.695 4.695 0 0111.312 16c0-2.586 2.104-4.688 4.688-4.688s4.688 2.102 4.688 4.688A4.695 4.695 0 0116 20.688zm8.063-11.751a.999.999 0 110-1.997.999.999 0 010 1.997zM21.625 1h-11.25A9.376 9.376 0 001 10.375v11.25A9.376 9.376 0 0010.375 31h11.25A9.376 9.376 0 0031 21.625v-11.25A9.376 9.376 0 0021.625 1zm6.563 20.625a6.57 6.57 0 01-6.563 6.563h-11.25a6.57 6.57 0 01-6.563-6.563v-11.25a6.57 6.57 0 016.563-6.563h11.25a6.57 6.57 0 016.563 6.563v11.25z" class=""></path>
 </svg></div>
 </a></div>
 </div>
 </div>
 </div>
 <div class="style-55">
 <div class="style-56">
 <div class="style-57" data-name=""><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" class="style-58">
 <path d="M4 8h24v2.688H4V8zm0 9.313v-2.625h24v2.625H4zM4 24v-2.688h24V24H4z" class=""></path>
 </svg></div>
 </div>
 </div>
 </div>
 </div>
 <div class="style-59">
 <div class="style-60">
 <div class="style-61"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="3000" height="335" viewBox="0 0 3000 335" class="style-62">
 <defs class="">
 <clipPath class="">
 <rect data-name="Rectangle 15723" width="3000" height="335" transform="translate(2163 138)" class=""></rect>
 </clipPath>
 </defs>
 <g dataName="Mask Group 2" transform="translate(-2163 -138)" clip-path="url(#clip-path)" class="">
 <path dataName="Path 9160" d="M5970,1981.4s571.03-143.687,1428.011,52.553,1571.989,0,1571.989,0v478.638H5970Z" transform="translate(-3807 -1792.662)" class="style-63"></path>
 </g>
 </svg></div>
 <div class="style-64">
 <div class="style-65">
 <div class="style-66">
 <h1 data-text="Virtual Lab<br>" class="style-67">Welcome <?php echo $_SESSION['name']?>!<br class="" /></h1>
 <h2 class="style-68">Virtual Lab on Digital Logic and Computer Organization and Architecture<br class="" /></h2>
 <div class="style-69">
 <div class="style-70"><a class="style-71" target="_blank" rel="noopener noreferrer" href="http://builder.renderforestsites.com"><div class="style-72" class="style-73">
 <path d="M11.438 21.813l6.125-6.125-6.125-6.125 1.875-1.875 8 8-8 8z" class=""></path>
 </svg></div></a></div>
 </div>
 </div>
 <div class="style-74">
 <div class="style-75">
 <div class="style-76">
 <div class="style-77">
 <div class="style-78">
 <h5 data-target="100<br>" class="style-79"></h5>
 <div class="style-80">100<br></div>
 </div>
 <p class="style-81">Users</p>
 </div>
 </div>
 <div class="style-82">
 <div class="style-83">
 <div class="style-84">
 <h5 data-target="4" class="style-85">4</h5>
 <div class="style-86">4</div>
 </div>
 <p class="style-87">Experiments</p>
 </div>
 </div>
 <div class="style-88">
 <div class="style-89">
 <div class="style-90">
 <h5 data-target="120%" class="style-91"></h5>
 <div class="style-92">120%</div>
 </div>
 <p class="style-93">Total Rating<br class="" /></p>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 </header>
 </div>
 <div class="style-94"></div>
 </div>
 </div>
 <div class="style-95">
 <div class="style-96">
 <div class="style-97">
 <div class="style-98">
 <p class="style-99">We have <span class="style-100">updated your plan</span>, grab your rewards as a sign of gratitude</p>
 <div class="style-101">
 <div class="style-102">
 <picture class=""><img class="style-103" src="https://static.rfstat.com/renderforest/images/v2/migration/plan_video-hd.png" alt="Video HD" height="166" width="229" /></picture>
 <p class="style-104"></p>
 <p class="style-105"></p>
 </div>
 <div class="style-106">
 <picture class=""><img class="style-107" src="https://static.rfstat.com/renderforest/images/v2/migration/plan_video-duration.png" alt="Video Duration" height="166" width="229" /></picture>
 <p class="style-108">Unlimited video duration</p>
 <p class="style-109"></p>
 </div>
 <div class="style-110">
 <picture class=""><img class="style-111" src="https://static.rfstat.com/renderforest/images/v2/migration/plan_premium-templates.png" alt="Premiumn Templates" height="166" width="229" /></picture>
 <p class="style-112">Access to premium templates and scenes</p>
 </div>
 <div class="style-113">
 <picture class=""><img class="style-114" src="https://static.rfstat.com/renderforest/images/v2/migration/plan_color-pallets.png" alt="Color Pallets" height="166" width="229" /></picture>
 <p class="style-115">Unlimited color pallets and font uploads</p>
 <p class="style-116">Limited color palettes and fonts</p>
 </div>
 <div class="style-117">
 <picture class=""><img class="style-118" src="https://static.rfstat.com/renderforest/images/v2/migration/plan_logos-hq.png" alt="Logos HQ" height="166" width="229" /></picture>
 <p class="style-119">Unlimited high quality logos, graphics and mockups</p>
 <p class="style-120">Limited logos, graphics and mockups</p>
 </div>
 <div class="style-121">
 <picture class=""><img class="style-122" src="https://static.rfstat.com/renderforest/images/v2/migration/plan_account-manager.png" alt="Account Manager" height="166" width="229" /></picture>
 <p class="style-123">Dedicated account manager</p>
 <p class="style-124">A new feature just for you</p>
 </div>
 <div class="style-125">
 <picture class=""><img class="style-126" src="https://static.rfstat.com/renderforest/images/v2/migration/plan_logos-guideline.png" alt="Logos Guideline" height="166" width="229" /></picture>
 <p class="style-127">Branding guideline for logos</p>
 <p class="style-128">A new feature just for you</p>
 </div>
 </div><button class="style-129" data-next-text="Next">OK, AWESOME</button>
 </div>
 </div>
 <div class="style-130">
 <div class="style-131">
 <picture class="">
 <source srcset="https://static.rfstat.com/renderforest/images/v2/migration/migration-rendy.webp" type="image/webp" class="" />
 <source srcset="https://static.rfstat.com/renderforest/images/v2/migration/migration-rendy.png" type="image/png" class="" /><img class="style-132" src="https://static.rfstat.com/renderforest/images/v2/migration/migration-rendy.png" alt="Rendy image" />
 </picture>
 </div>
 </div>
 </div>
 </div>
 <div class="style-133">
 <div class="style-134">
 <div class="style-135">Oops, something went wrong. Please, try again later.</div><button class="style-136" type="button">OK</button>
 </div>
 </div>
 <div class="style-137"></div><!-- Google Tag Manager (noscript)--><noscript class=""><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T435FFR" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><!-- End Google Tag Manager (noscript)-->

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

        var sum = 0;
        for(i=1;i<5;i++){
         sum+=rate(i,data);
        }

        var userCnt = data.length;
        sum = sum/userCnt;

        const userC = document.querySelector(".style-79");
        const userR = document.querySelector(".style-91");

        userC.innerHTML = `${userCnt}`;
        userR.innerHTML = `${sum}`;
      });
</script>

</body>

</html>