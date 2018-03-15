
<?php 
ob_start();
session_start();
require_once 'conn.php';

// //build the JSON array for return, Autofill text --cal modal.js
// $json = array(array('field' => 'Phone_No', 
//                     'value' => $Phone_No), 
//               array('field' => 'Name', 
//                     'value' => $Name));
//               array('field' => 'Address', 
//                     'value' => $Address);
// echo json_encode($json );
//show counter
if($stmt = $conn->query("SELECT id, Name ,Phone_No,Address,City,Email,DOB FROM textdemo")){
  
  echo "'No of records : '.$stmt->num_rows." ;
}
else{
 echo $conn->error;
 }

//adding data into db
 if (isset($_POST['Add'])) 
    {

$name_a="";
$phone="";
$Add="";
$city="";
$email="";
$dob="";
$status="";
 
  $name_a=$_POST['Name'];
  $phone=$_POST['Phone_No'];
  $Add=$_POST['Address'];
  $city=$_POST['City'];
  $email=$_POST['Email'];
  $dob=$_POST['DOB'];
  // $status=$_POST['status'];

  $query = "INSERT INTO textdemo (Name,Phone_No,Address,City,Email,DOB) VALUES ($name_a,$phone,$Add,$city,$email,$dob);"; /*  first query : Notice the 2 semicolons at the end ! */
$query .= "select Phone_No, count(*) as status from textdemo GROUP BY Phone_No;"; /* Notice the dot before = and the 2 semicolons at the end ! */

$query .= "SQL STATEMENTS;"; 

 
 if (mysqli_multi_query($conn, $query)) {
  do {
      /* store first result set */
      if ($result = mysqli_store_result($conn)) {
          while ($row = mysqli_fetch_array($result)) 
  
  /* print your results */    
  {
  echo $row['Phone_NO'];
  echo $row['City'];
  }
  mysqli_free_result($result);
  }   
  } while (mysqli_next_result($conn));
  }


  // $stmt = $conn->prepare("INSERT INTO textdemo (Name,Phone_No,Address,City,Email,DOB) VALUES (?,?,?,?,?,?)");
  // $stmt->bind_param("ssssss",$name_a,$phone,$Add,$city,$email,$dob);

  //  $result=$stmt->execute();
  //  echo "New records created successfully";
  //    echo "$name_a";
  //    $stmt->close();

   
    // header("location:form.html");
    } 
    
  //  view Datababase
  if (isset($_POST['ViewDatabase'])) 
  {
    header('location: view.html'); 
  }

     //  view Report
  if (isset($_POST['Viewreport'])) 
  {
    header('location: viewmsg.html'); 
  }
//modal send data
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
  //show notification
  if (isset($_POST['notification'])) 
{
  $today = date("m.d.y");    
  $sqlb = "SELECT  Name,Phone_No,Address,City,Email,DOB FROM textdemo WHERE birthdate = '$today'";               
  $userz = $conn->query($sqlb);

  foreach ($userz as $row) {   
      $name = $row['name'];
      $surename = $row['surename'];
      echo 'Todays is'.$name.' '.$surename.' birthday';                 
    }  }
mysqli_close($conn);
?>

  <?php ob_end_flush(); ?>

  