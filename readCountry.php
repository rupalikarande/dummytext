<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["keyword"])) {
$query ="SELECT * FROM textdemo WHERE Phone_No like '" . $_POST["keyword"] . "%' ORDER BY Phone_No LIMIT 0,6";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<ul id="country-list">
<?php
foreach($result as $textdemo) {
?>
<li onClick="selectPhn('<?php echo $textdemo["Phone_No"]; ?>');"><?php echo $textdemo["Phone_No"]; ?></li>
<?php } ?>
</ul>
<?php } }

$Name=$DOB=$Address=$City=$Email="";
$resp = $Name.'-'.$DOB.'-'.$Address.'-'.$City.'-'.$Email;
echo $resp;die;


 ?>