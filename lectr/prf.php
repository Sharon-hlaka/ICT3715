<?php 
$title = "Lecturer";
include("header.php"); ?>

<!--code here-->
<div class="text-center" style="font-size: 16pt; color: black; background-color: #fff;" >
<h3>Staff Profile</h3>
<br/>
Staff Fullname: <?php echo $_SESSION["name"]; ?><br/><br/>
Staff Number: <?php echo $_SESSION["staffnumber"]; ?><br/><br/>
Staff Email: <?php echo $_SESSION["email"]; ?><br/><br/>
Module(s) Code <br/><?php 
$staffNum =  $_SESSION["staffnumber"]; 
$stmt = $conn->prepare("SELECT ModuleCode FROM moduleleader WHERE StaffNumber = '$staffNum'");
$stmt->execute();
$modules = $stmt->fetchAll();
foreach($modules as $module){
echo $module['ModuleCode']. "<br/>"; 
}
?>
</div>
</section>

<?php include("footer.php"); ?>