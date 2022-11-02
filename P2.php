<html>
<head>
    <meta charset="UTF-8">
    <title>web 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Supherhero">
    <meta name="keywords" content="programming hero,learn programming">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/vnd.microsoft.icon">
    <!--@bootstrapCss-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--custom css-->
    <link rel="stylesheet" href="css/style.css">
</head>

<html>
<body>
  
<div class="box">

 <p><img src="profile.png" class="png"> <h2>Admin</h2></p>
   <p id = "noti_number" class="mes"></p>
  <script type="text/javascript">
 function loadDoc() {
  

  setInterval(function(){

   var xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("noti_number").innerHTML = this.responseText;
    }
   };
   xhttp.open("GET", "P2data.php", true);
   xhttp.send();

  },1000);


 }
 loadDoc();
</script>
<form action="" method="post">

</p>
<p><input type="text" name="name" placeholder="....." class="form-control" >
<button type="submit" class="button">Send</button></p>

</form>

</div>

</body>
</html>
<?php
$txt =$_REQUEST['name'];

$link = mysqli_connect('sql202.epizy.com: 3306', 'epiz_32856090', 'pJeaWINc4Vbg13', 'epiz_32856090_test');

if (!$link) {
       die('Could not connect: ');
}
//else{
//echo 'Connected successfully';
//}
 
// mysqli_close($link);
else{
//$query = "INSERT INTO 'nownow' (`Name`, `Number)"; $query = "VALUES ('$names', '$number')";
$query = "INSERT INTO `P2` (`Text`) VALUES ('$txt')";
$result = mysqli_query($link,$query);
if($result){
}
else{
  echo"not successful";
   }
}
?>




<p>
  <a href="P1.php">go to first</a>


<style>
.mes{
  margin-top:50px;
}
.png{
width:40px;
height:40px;
display: inline-block;
float:left;
margin-bottom:20px;
}
h2{
  font-size:19px;
margin-bottom:10px;
margin-top:20px;
margin-left:200px;

}
.button {
width:70px;
height:30px;
margin-left:0px;
font-size:16px;
outline:none;
border:none;
padding:2px;
border-radius:6px;
color:#fff;
background-color:#1434A4;
}
.buttons {
width:80px;
height:33px;
margin-left:0px;
font-size:16px;
outline:none;
border:none;
padding:2px;
border-radius:6px;
color:#fff;
background-color:#FA8072;
}
.form-control{
width:200px;
height:35px;
margin-bottom:10px;
padding-left:10px;
outline:none;
font-size: 15px;
color: black;
border: 1px solid #ccc;
border-radius: 6px;

}
.box{
padding-left:10px;
background-color:#fff;
width:300px;
height:230px;
padding:20px;
margin-top:150px;
margin-left:30px;
border-radius:15px;
color:black
}
body{
font-family: system-ui;
  background-image: url("HD-wallpaper-spring-season-colorful-nature-forest-waterfall-bird-mountain-tree.jpg");
  position: relative;
  height:780px;
  width:400px;
  background-size:cover;
  }
  
  
  
  
@media screen and (min-width: 480px) {
  
  .box{
padding-left:10px;
background-color:#fff;
width:300px;
height:200px;
padding:20px;
margin-top:150px;
margin-left:240px;
border-radius:15px;
color:black
}
  
  
</style>







<!--main js-->
<script src="js/main.js"></script>
</body>
</html>