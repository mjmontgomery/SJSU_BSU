<?php
	include('includes/uagent.php');
	
	$class = "Science 2";
	$course = "Success in Science at San Jose State University";
	$short = "Success in Science";
	$page = "All Student Resources";
	$active = "student-resources";
?>

<!DOCTYPE html>

<!--
*	Science 90T: Success as a Transfer at San Jose State University
*	Michael P Signorelli
*	January 2011
-->

<head>
	<title><?php echo $class.' | '.$page; ?></title>
	<link href="css/sci90t.css" rel="stylesheet" type="text/css">
	<script language='javascript' src='js/active.js'></script>
</head>

<body>
<!-- begin header -->
<div id="header">
	<div id="head-wrap">
		<div id="head-img">
		</div>
		<!-- navigation -->
		<?php include ('includes/navigation.php'); ?>
		<script language='javascript'>setActive('<?php echo $active ?>');</script>
	</div>
</div>
<!-- end header and navigation -->

<!-- yellow spacer -->
<div id="yellow-space">
</div>


<!-- begin content -->
<div id="wrap">
	<div id="top-arrow">
	</div>
	<!-- left section -->
	<div id="left-side">
		<div id="content">
			<div id="toc" class="title">Complete List of Student Resources</div>
			<div class="text">
				<p class="center"><a href="#a">A</a> | <a href="#b">B</a> | <a href="#c">C</a> | <a href="#d">D</a> | <a href="#e">E</a> | <a href="#f">F</a> | <a href="#g">G</a> | <a href="#h">H</a> | <a href="#i">I</a> | <a href="#j">J</a> | <a href="#k">K</a> | <a href="#l">L</a> | <a href="#m">M</a> | <a href="#n">N</a> | <a href="#o">O</a> | <a href="#p">P</a> | Q | <a href="#r">R</a> | <a href="#s">S</a> | <a href="#t">T</a> | <a href="#u">U</a> | <a href="#v">V</a> | W | <a href="#x">X</a> | <a href="#y">Y</a> | Z</p>
			</div>
		</div>
		
		<!-- complete list of resources -->
		<?php include ('includes/resources.php'); ?>
		
	</div>
	
	<!-- right section -->
	<div id="right-side">
		<div id="block">
			<?php include ('includes/downloads.php'); ?>
		</div>
		<div id="block">
			<?php include ('includes/current.php'); ?>
		</div>
		<div id="block">
			<?php include ('includes/upcoming.php'); ?>
		</div>
		<div id="block">
			<?php include ('includes/quicknav.php'); ?>
		</div>
	</div>
	<div id="bottom-arrow">
	</div>
</div>
<!-- end content -->

<!-- yellow spacer and footer -->
<div id="yellow-space">
	<div id="foot-wrap">
		<div id="footer"><?php echo $short; ?> | San Jose State University &copy; 2010-2011 | <a href="mailto:Michael.P.Signorelli@gmail.com">Contact Webmaster</a></div>
	</div>
</div>

</body>

</html>