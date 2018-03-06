
<?php 
ob_start();
session_start();
require_once 'conn.php';
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
$id="";
$name_a="";
$phone="";
$Add="";
$city="";
$email="";
$dob="";

  $id=$_POST['id'];
  $name_a=$_POST['Name'];
  $phone=$_POST['Phone_No'];
  $Add=$_POST['Address'];
  $city=$_POST['City'];
  $email=$_POST['Email'];
  $dob=$_POST['DOB'];

 // prepare and bind
  $stmt = $conn->prepare("INSERT INTO textdemo (id,Name,Phone_No,Address,City,Email,DOB) VALUES (?,?,?,?,?,?,?)");
  $stmt->bind_param("sssssss",$id,$name_a,$phone,$Add,$city,$email,$dob);

   $result=$stmt->execute();
   echo "New records created successfully";
     echo "$name_a";

    $stmt->close();
    } 
    
    if (isset($_POST['msg'])) 
    {
      header('location: modal.html');
    }
  //  view Datababase
  if (isset($_POST['View'])) 
  {
    header('location: view.html'); }

     //  view Report
  if (isset($_POST['Viewreport'])) 
  {
    header('location: modalview.html'); }

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

  