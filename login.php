<?php
$title = "Login";
session_start();
require_once 'include/conn_db.php';
include('./include/header.php');
?>

<div class="w3layouts_main wrap">
<!--Horizontal Tab-->
<div id="parentHorizontalTab_agile">
<ul class="resp-tabs-list hor_1">
<li>Student</li>
<li>Lecturer</li>
<li>Exam Department</li>
</ul>
<div class="resp-tabs-container hor_1">
<div class="w3_agile_login">
<?php
if(isset($_POST['login'])){
if($_POST['username'] != "" || $_POST['password'] != ""){
$email = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM `studentinfo` WHERE `email`=? AND `password`=? ";
$query = $conn->prepare($sql);
$query->execute(array($email,$password));
$row = $query->rowCount();
$fetch = $query->fetch();
if($row > 0) {
$_SESSION['email'] = $fetch['email'];
$_SESSION['studentnumber'] = $fetch['studentnumber'];
$_SESSION['studentname'] = $fetch['studentname'];
header("location: stud");
} else{
echo "<script>alert('Invalid username or password')</script>";
}
}
}
?>
<form method="post" class="agile_form">
<p>Student Email:</p>
<input type="text" name="username" placeholder="Enter Email" required="required" />
<p>Password</p>
<input type="password" name="password"  placeholder="Enter Password" required="required" class="password" /> 
<input type="submit" name="login" value="LogIn" class="agileinfo" />
<br><br>
<input type="reset" value="Reset" class="agileinfo" />
</form>
<div class="login_w3ls">
<a href="#">Forgot Password</a>
</div>
</div>

<div class="w3_agile_login">
<?php
if(isset($_POST['login'])){
if($_POST['username'] != "" || $_POST['password'] != ""){
$email = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM `staffinfo` WHERE `email`=? AND `password`=? ";
$query = $conn->prepare($sql);
$query->execute(array($email,$password));
$row = $query->rowCount();
$fetch = $query->fetch();
if($row > 0) {
$_SESSION['email'] = $fetch['email'];
$_SESSION['staffnumber'] = $fetch['staffnumber'];
$_SESSION['name'] = $fetch['name'];
header("location: lectr");
} else{
echo "<script>alert('Invalid username or password')</script>";
}
}
}
?>
<form method="post" class="agile_form">
<p>Staff Email:</p>
<input type="text" name="username" placeholder="Enter Email" required="required" />
<p>Password</p>
<input type="password" name="password"  placeholder="Enter Password" required="required" class="password" /> 
<input type="submit" name="login" value="LogIn" class="agileinfo" />
<br><br>
<input type="reset" value="Reset" class="agileinfo" />
</form>
<div class="login_w3ls">
<a href="#">Forgot Password</a>
</div>
</div>

<div class="w3_agile_login">
<?php
if(isset($_POST['login'])){
if($_POST['username'] != "" || $_POST['password'] != ""){
$email = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM `examdeptstaff` WHERE `email`=? AND `password`=? ";
$query = $conn->prepare($sql);
$query->execute(array($email,$password));
$row = $query->rowCount();
$fetch = $query->fetch();
if($row > 0) {
$_SESSION['email'] = $fetch['email'];
$_SESSION['staffnum'] = $fetch['staffnum'];
$_SESSION['staffname'] = $fetch['staffname'];
header("location: exam_deptm");
} else{
echo "<script>alert('Invalid username or password')</script>";
}
}
}
?>
<form method="post" class="agile_form">
<p>Exam Department Email:</p>
<input type="text" name="username" placeholder="Enter Email" required="required" />
<p>Password</p>
<input type="password" name="password"  placeholder="Enter Password" required="required" class="password" /> 
<input type="submit" name="login" value="LogIn" class="agileinfo" />
<br><br>
<input type="reset" value="Reset" class="agileinfo" />
</form>
<div class="login_w3ls">
<a href="#">Forgot Password</a>
</div>
</div>

</div>
</div>
<!-- //Horizontal Tab -->
</div>
<?php include('./include/footer.php');?>