<?php
$title = "Exam Staff Profile";
include('header.php');
?>

<div class="text-center" style="font-size: 16pt; color: black; background-color: #fff;" >
<h3>Exam Department | Staff Profile</h3>
<br/>
Staff Fullname: <?php echo $_SESSION["staffname"]; ?><br/><br/>
Staff Number: <?php echo $_SESSION["staffnum"]; ?><br/><br/>
Staff Email: <?php echo $_SESSION["email"]; ?><br/><br/>
</div>
</div>
</section>

<?php include("footer.php"); ?>