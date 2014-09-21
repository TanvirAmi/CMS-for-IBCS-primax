<?php include('highway.php'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>logical-coding</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="images/PixelGreen.css" type="text/css" />
</head>
<body>
<div id="wrap">
  <div id="header">
    <div id="header-content">
      <h1 id="logo">logical-coding<span class="gray">..</span></h1>
      <h2 id="slogan">logic for human...</h2>
      <ul>
	 
        <li><a href="index.php">Home</a></li>
        <?php
		foreach($obj->showMenu() as $val){
		extract($val);
		?>
		<li><a href="pages.php?page_id=<?php echo $page_id; ?>" ><?php echo $page_name; ?></a></li>
		<?php
		}
		?>

      </ul>
    </div>
  </div>
  <div class="headerphoto"></div>