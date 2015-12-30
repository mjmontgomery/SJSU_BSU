<?php
	include('includes/uagent.php');
	
	if ($_COOKIE['login']=="success") {
		header("Location: pa/");
	}
	
	$class = "Science 90T";
	$course = "Success as a Transfer at San Jose State University";
	$short = "Success as a Transfer";
	$page = "Peer Advisor Login";
	$active = "login";
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
	<link href="css/login.css" rel="stylesheet" type="text/css">
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
			<div class="title">Peer Advisor Login</div>
			<div class="text">
				<form action="loginhandle.php" method="post">
					<p>User Name:<br />
						<input type="text" name="user" class="login" /></p>
					<p>Password:<br />
						<input type="password" name="pass" class="login" /></p>
					<?php
						if ($_GET['e']=="login") {
							echo '<p class="error">Please enter the correct login information</p>';
						}
					?>
					<p><input type="submit" class="button" value="Login" /></p>
				</form>
			</div>
		</div>
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