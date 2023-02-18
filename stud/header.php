<?php
include('../include/conn_db.php');
// Start the session
session_start();

if(!isset($_SESSION['email']))
header("Location: ../login.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Online Exam Portal | <?php echo $title;?></title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" type="image/ico" href="images/favicon.ico"/>
<meta name="keywords" content="" />
<!-- Bootstrap Core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="../css/stylish-portfolio.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script type="text/javascript" src="../js/print.js"></script>
<script type="text/javascript" src="../js/fusioncharts.js"></script>
<!-- demo stylesheet -->
<link type="text/css" rel="stylesheet" href="media/layout.css" />    
<!-- helper libraries -->
<script src="../js/jquery-1.9.1.min.js" type="text/javascript"></script>
<!-- daypilot libraries -->
<script src="../js/daypilot/daypilot-all.min.js" type="text/javascript"></script>
</head>

<body>
<!-- Navigation -->
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
<nav id="sidebar-wrapper">
<ul class="sidebar-nav">
<a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
<li class="sidebar-brand">
<a href="#"  onclick = $("#menu-close").click(); >Student Menu</a>
</li>
<li>
<a href="index.php" accesskey="1" onclick = $("#menu-close").click(); >Dashboard</a>
</li>
<li>
<a href="caln.php" accesskey="2" onclick = $("#menu-close").click(); >Calendar</a>
</li>
<li>
<a href="tk_exam.php" accesskey="3" onclick = $("#menu-close").click(); >Take Exam</a>
</li>
<li>
<a href="up_exam.php" accesskey="3" onclick = $("#menu-close").click(); >Upload Exam</a>
</li>
<li>
<a href="prf.php" accesskey="4" onclick = $("#menu-close").click(); >Profile</a>
</li>
<li>
<a href="logout.php" accesskey="l" onclick = $("#menu-close").click(); >Logout</a>
</li>
</ul>
</nav>
<section class="header">
<p><img src='../images/admin_panel.png' alt='Admin Panel' width='100%' height='150px'/></p>	