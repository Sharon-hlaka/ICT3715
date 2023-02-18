<?php 
$title = "Lecturer";
include("header.php"); ?>

<div class="text-center" style="font-size: 14pt; color: black; background-color: #fff;" >
<h2>My Student Information</h2><br/>
<!--code here-->
<div id="printSection" >
<p><?php
/*display the table*/
//table header
print"<table class='table' height='auto' border='2px'>
<tr class='danger'>
<td>Student Number</td>
<td>Full Name</td>
<td>Email</td>
</tr>";
//start SQL query
$staffNum = $_SESSION["staffnumber"];
$stmt = $conn->prepare("SELECT studentinfo.studentnumber, studentname, email
FROM studentinfo, moduleleader, studentmodule 
WHERE moduleleader.StaffNumber = $staffNum
AND moduleleader.ModuleCode = studentmodule.ModuleCode
AND studentmodule.StudentNumber = studentinfo.studentnumber
ORDER BY studentname, studentinfo.studentnumber");
$stmt->execute();
$students = $stmt->fetchAll();
//end SQL query
//start foreach loop to get information from the table
foreach($students as $student)
{
?>
<tr class='warning'><td>
<?php echo $student['studentnumber']; ?>
</td>
<td>
<?php echo $student['studentname']; ?>
</td>
<td>
<?php echo $student['email']; ?>
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