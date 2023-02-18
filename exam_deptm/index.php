<?php
$title = "Exam Dept Dashboard";
include('header.php');
?>

<div class="text-center" style="font-size: 16pt; color: black; background-color: #fff;" >
Welcome <?php echo $_SESSION["staffname"]; ?>
<br/><br/>
You work as an Exam Department Staff
<br/><br/>
Here is a list of what you can do:<br/><br/>
1. View Daily Reports <br/>
2. View Weekly Reports <br/>
3. View MIS Reports <br/>
4. Many More...<br/>
<br/><br/>
</div>
</section>

<?php include("footer.php"); ?>