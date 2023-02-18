<?php 
$title = "Student";
include("header.php"); ?>

<!--code here-->
<div class="text-center" style="font-size: 16pt; color: black; background-color: #fff;" >
<h3>Student Profile</h3>
<br/>
Student Fullname: <?php echo $_SESSION["studentname"]; ?><br/><br/>
Student Number: <?php echo $_SESSION["studentnumber"]; ?><br/><br/>
Student Email: <?php echo $_SESSION["email"]; ?><br/><br/>
Registered Module(s) Code <br/><?php $studNum =  $_SESSION["studentnumber"]; 
$stmt = $conn->prepare("SELECT ModuleCode FROM studentmodule WHERE StudentNumber = '$studNum'");
$stmt->execute();
$modules = $stmt->fetchAll();
foreach($modules as $module){
echo $module['ModuleCode']. "<br/>"; 
}
?>
</div>
</section>

<?php include("footer.php"); ?>