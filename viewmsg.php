<?php
ob_start();
session_start();
require_once 'conn.php';

$myObj=array();

$id="";
$time="";
$date="";
$sub="";
$phoneno="";
$message="";

$sql = "SELECT id,time,date,subject,Phoneno,Message FROM msgtab";
 //$result = mysqli_query($conn, $sql);
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



  
//   <?php
//   $myJSON = '{ "$Name", "$Phone_No", "$Address","$city","$Email","$dob" }';
  
//   echo "myFunc(".$myJSON.");";
 
 
  $conn->close();
  ?>
   <?php ob_end_flush(); ?>

  
   
