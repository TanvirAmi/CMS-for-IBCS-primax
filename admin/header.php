<?php include('class.php');

//include('admin.php');
if(isset($_REQUEST['status'])){
	session_destroy();
	header('location:index.php');	
}

if(empty($_SESSION['uname'])){
	header('location:index.php');	
}
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMIN PANEL | Using bootstrap</title>
<script src="bootstrap-dropdown.js"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="tanvir.css" rel="stylesheet" type="text/css">
	<link href='css/chosen.css' rel='stylesheet'>
	<link href='css/jquery.cleditor.css' rel='stylesheet'>



    <div class="navbar">
    <div class="navbar-inner">
    <a class="brand" href="#">Admin Panel</a>
   <!-- <ul class="nav">
    <li class=""><a href="#">Home</a></li>
    <li><a href="#">Link</a></li>
    <li><a href="#">Link</a></li>
    </ul>
	


	
	<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"><?php echo  ucfirst($_SESSION['uname']); ?></span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
					<!--	<li><a href="#">Profile</a></li>
						<li class="divider"></li> -->
						<li><a href="home.php?status=logout">Logout</a></li>
					</ul>
				</div>
				 </div>
    </div>