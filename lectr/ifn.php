<?php 
$title = "Lecturer";
include("header.php"); ?>

<div class="text-center" style="font-size: 14pt; color: black; background-color: #fff;" >
<h2>Modules and Lecturer Information</h2>
<br/>
<!--code here-->
<div id="printSection" >
<p><?php
/*display the table*/
//table header
print"<table class='table' height='auto' border='2px'>
<tr class='danger'>
<td>Module Code</td>
<td>Module Description</td>
<td>Lecturer Name</td>
<td>Email</td>
<td>Date of Exam</td>
</tr>";
//start SQL query
$stmt = $conn->prepare("SELECT Distinct(moduleleader.ModuleCode), ModDesc, name, email, DateExam 
FROM moduleleader, moduleinfo, staffinfo, examsetup 
WHERE moduleleader.ModuleCode = moduleinfo.ModCode
AND examsetup.ModuleCode = moduleinfo.ModCode
AND moduleleader.StaffNumber = staffinfo.StaffNumber
ORDER BY ModuleCode, DateExam");
$stmt->execute();
$modules = $stmt->fetchAll();
//end SQL query
//start while loop to get information from the table
foreach($modules as $module){
?>
<tr class='warning'><td>
<?php echo $module['ModuleCode']; ?>
</td>
<td>
<?php echo $module['ModDesc']; ?>
</td>
<td>
<?php echo $module['name']; ?>
</td>
<td>
<?php echo $module['email']; ?>
</td>
<td>
<?php echo $module['DateExam']; ?>
</td>
<?php
}
?>
</tbody>
</table>    
<!--end display table-->  
</p>
</div>
<p><input class="btn btn-default btn-lg" type='button' value='Print Data' onclick="PrintDoc();"/>
<input class="btn btn-default btn-lg" type='button' value='Print Preview' onclick="PrintPreview();"/></p>

</div>
</section>

<?php include("footer.php"); ?>