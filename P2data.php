<?php
$servername = "sql202.epizy.com: 3306";
$username = "epiz_32856090";
$password = "pJeaWINc4Vbg13";
$dbname = "epiz_32856090_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT *
FROM P1
ORDER BY  Id DESC
LIMIT 1";

$result = $conn->query($sql);
if($result){
  $data =  mysqli_fetch_array($result);
  echo $data['Text'];
}else{
  failed;
}
?>