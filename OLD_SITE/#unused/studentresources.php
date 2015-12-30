<?php
	include('includes/uagent.php');
	
	$class = "Science 90T";
	$course = "Success as a Transfer at San Jose State University";
	$short = "Success as a Transfer";
	$page = "Student Resources";
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
			<div class="title">Student Resource Center is currently Under Contruction!</div>
			<div class="text">
				<p>For resources such as the Time Management and FSO worksheets please look under the <a href="assignments.php">Assignments</a> tab.</p>
				<p><img src="images/construction.jpg" width="540" height="445" alt="Construction.jpg"></p>
			</div>
		</div>
		-->
        
        
		<!-- search by title -->
		<div id="content">
			<div class="title">Search by Title</div>
			<div class="text">
				<!-- search by title php -->
				<form action="search.php" method="post">
					<p><input type="text" size="40" name="query" /></p>
					<p><input type="submit" value="Search" /></p>
				</form>
			</div>
		</div>
		
		<!-- search by group -->
		<div id="content">
			<div class="title">Search by Group</div>
			<div class="text">
				<!-- search by group php -->
				<table id="group">
					<tr>
						<td><a href="resourcegroup.php?id=advising">Advising</a></td>
						<td><a href="resourcegroup.php?id=housing">On-campus Housing</a></td>
					</tr>
					<tr>
						<td><a href="resourcegroup.php?id=athletics">Athletics</a></td>
						<td><a href="resourcegroup.php?id=how-to">How-tos</a></td>
					</tr>
					<tr>
						<td><a href="resourcegroup.php?id=books">Textbooks</a></td>
						<td><a href="resourcegroup.php?id=map">Maps</a></td>
					</tr>
					<tr>
						<td><a href="resourcegroup.php?id=career">Careers</a></td>
						<td><a href="resourcegroup.php?id=miscellaneous">Miscellaneous</a></td>
					</tr>
					<tr>
						<td><a href="resourcegroup.php?id=class">Classes</a></td>
						<td><a href="resourcegroup.php?id=organization">Organizations and Clubs</a></td>
					</tr>
					<tr>
						<td><a href="resourcegroup.php?id=college">Colleges</a></td>
						<td><a href="resourcegroup.php?id=policy">Information and Policies</a></td>
					</tr>
					<tr>
						<td><a href="resourcegroup.php?id=contact">Contact Information</a></td>
						<td><a href="resourcegroup.php?id=program">Programs</a></td>
					</tr>
					<tr>
						<td><a href="resourcegroup.php?id=date">Dates and Deadlines</a></td>
						<td><a href="resourcegroup.php?id=recreation">Recreation and Events</a></td>
					</tr>
					<tr>
						<td><a href="resourcegroup.php?id=department">Departments</a></td>
						<td><a href="resourcegroup.php?id=service">Services</a></td>
					</tr>
					<tr>
						<td><a href="resourcegroup.php?id=facts">Campus Facts and Figures</a></td>
						<td><a href="resourcegroup.php?id=support">Technical Support</a></td>
					</tr>
					<tr>
						<td><a href="resourcegroup.php?id=finance">Finances</a></td>
						<td><a href="resourcegroup.php?id=test">Test Information</a></td>
					</tr>
					<tr>
						<td><a href="resourcegroup.php?id=form">Forms</a></td>
						<td><a href="resourcegroup.php?id=transfer">Transfer Information</a></td>
					</tr>
					<tr>
						<td><a href="resourcegroup.php?id=graduate">Graduate School</a></td>
						<td><a href="resourcegroup.php?id=transportation">Transportation</a></td>	
					</tr>
					<tr> 
						<td><a href="resourcegroup.php?id=handout">Handouts</a></td>
					</tr>
				</table>
			</div>
		</div>
		
		<!-- all resources -->
		<div id="content">
			<div class="title">All Resources</div>
			<div class="text">
				<p>If you would like to view all the San Jose State University Resources in list format, <a href="allresources.php">click here</a>.</p>
			</div>
		</div>
        -->
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