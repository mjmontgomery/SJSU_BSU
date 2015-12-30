<?php
	include('includes/uagent.php');
	
	$class = "Science 90T";
	$course = "Success as a Transfer at San Jose State University";
	$short = "Success as a Transfer";
	$page = "Class Information";
	$active = "info";
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
	<link href="css/tables.css" rel="stylesheet" type="text/css">
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
		<!--<div id="content">
			<div class="title">About Science 90T</div>
			<div class="text">
				<p></p>
			</div>
		</div>-->
		
		<!-- class section information -->
		<div id="content">
			<div class="title">Class Section Information</div>
			<div class="text">
				<table id="sect-info" cellpadding="0" cellspacing="0">
					<tr>
						<th class="section">Sect.<br />No.</th>
						<th class="time">Meeting Time</th>
						<th class="location">Location</th>
						<th class="instructor">Instructor</th>
                        <th class="pa">Peer Advisor</th>
					</tr>
					<?php
						$fp = fopen('includes/sect-info.txt','r');
						
						while (!feof($fp)) {
							$line = fgets($fp,128);
							$field = explode('|',$line);
							echo '<tr>';
							echo '<td class="section">'.$field[0].'</td>';
							echo '<td class="time">'.$field[1].'</td>';
							echo '<td class="location">'.$field[2].'</td>';
							echo '<td class="instructor">'.$field[3].'</td>';
							echo '<td class="instructor">'.$field[4].'</td>';
							echo '</tr>';
						}
						
						fclose($fp);
					?>
				</table>
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