<?php
ob_start();
session_start();
require_once 'conn.php';
$myObj=array();
$firstdate="";
$lastdate="";
$firstdate = $_POST['firstdatepicker'];
$lastdate = $_POST['lastdatepicker'];

$sql="SELECT * FROM msgtab WHERE date BETWEEN '$firstdate' AND '$lastdate' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
      $singlerow=array('id' => $row["id"],'time' => $row["time"],'date' => $row["date"],'sub' => $row["subject"],
     'phoneno' =>  $row["Phoneno"],'message' => $row["Message"],);
     array_push($myObj,$singlerow);
  }
  $myJSON = json_encode($myObj);
  echo $myJSON;
} else {
  echo "0 results";
}
    
 
  

 
 
  $conn->close();
  ?>
   <?php ob_end_flush(); ?>

  
   
