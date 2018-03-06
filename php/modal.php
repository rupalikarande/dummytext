<?php
ob_start();
session_start();
require_once 'conn.php';
if (isset($_POST['send'])) 
{ 
       
        $sub="";
        $phoneno="";
       $message="";
       
       $sub=$_POST['subject'];
        $phoneno=$_POST['Phoneno'];
        $message=$_POST['Message'];
        
  
 // prepare and bind
  $stmt = $conn->prepare("INSERT INTO msgtab (subject,Phoneno,Message) VALUES (?,?,?)");
  $stmt->bind_param("sss",$sub,$phoneno,$message);

   $result=$stmt->execute();
   echo "New records created successfully";
     echo "$phoneno";

    $stmt->close();
   
  }
  mysqli_close($conn);
  // $conn->close();
  ?>
   <?php ob_end_flush(); ?>

  