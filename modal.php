<?php
ob_start();
session_start();
require_once 'conn.php';
if (isset($_POST['send'])) 
{ 
       
        $sub="";
        $phoneno="";
       $message="";
       $date=date("Y/m/d") ; 
       $sub=$_POST['subject'];
        $phoneno=$_POST['Phoneno'];
        $message=$_POST['Message'];
        date_default_timezone_set('Asia/Kolkata');
        $time=date("h:i:sa");
        // $date = date('Y-m-d H:i:s');
        // mysql_query("INSERT INTO msgtab (`dateposted`) VALUES ('$date')");
        // $date=$_POST['date'];
 // prepare and bind
 
 
  $stmt = $conn->prepare("INSERT INTO msgtab (time,date,subject,Phoneno,Message) VALUES (?,?,?,?,?)");
  $stmt->bind_param("sssss",$time,$date,$sub,$phoneno,$message);

   $result=$stmt->execute();
   echo "New records created successfully";
     echo "$phoneno";
     
     
      
    $stmt->close();
   
  }
  mysqli_close($conn);
  // $conn->close();
  ?>
   <?php ob_end_flush(); ?>

  