<?php 
$title = "Student";
include("header.php"); ?>

<div class="text-center" style="font-size: 16pt; color: black; background-color: #fff;" >
Welcome <?php echo $_SESSION["studentname"]; ?>
<br/><br/>
You are currently registered for :<br/><br/>
<?php 
$studNum =  $_SESSION["studentnumber"]; 
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