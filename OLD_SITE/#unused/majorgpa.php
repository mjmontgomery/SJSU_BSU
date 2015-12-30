<?php
	include('includes/uagent.php');
	
	$class = "Science 90T";
	$course = "Success as a Transfer at San Jose State University";
	$short = "Success as a Transfer";
	$page = "Major GPA Calculator";
	$active = "student-resources";
	
	//GPA Calculation Code
	if ($_GET['global'] != "") {
		$global = $_GET['global'];
	} else {
		$global = 40;
	}
	include('includes/major-select.php');
	include('includes/major-fill-in.php');
	include('includes/major-gpa-code.php');
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
		<div id="content">
			<div class="title">Major GPA Calculator</div>
			<div class="text">
				<p>In order to use this calculator, input your class name, units and select the grade you received. Once completed, hit the submit button and the major GPA will be calculated.</p>
			</div>
		</div>
		
		<div id="content">
			<div class="title">Major Course Inputs</div>
			<div class="text">
				If you would like to pre-fill out the major courses by major, select the major from the drop-down box. If you would prefer to manually input course titles, you may do so below.
				<p><form action="includes/major-select.php" method="post">
					<select name="major">
						<option value="default">Select A Major...</option>
						<option value="ae">Aerospace Engineering</option>
						<option value="aviation">Aviation</option>
						<option value="cheme">Chemical Engineering</option>
						<option value="ce">Civil Engineering</option>
						<option value="compe">Computer Engineering</option>
						<option value="ee">Electrical Engineering</option>
						<option value="ge">General Engineering</option>
						<option value="ise">Industrial and Systems Engineering</option>
						<option value="indtech">Industrial Technology</option>
						<option value="mate">Materials Engineering</option>
						<option value="me">Mechanical Engineering</option>
						<option value="se">Software Engineering</option>
					</select>
					<input type="submit" value="Fill-in" />
				</form></p>
			</div>
		</div>

		<div id="content">
			<div class="title">Major Courses</div>
			<div class="text">
				<table id="gpa" cellpadding="0" cellspacing="0">
					<tr>
						<th class="class">Course Name</th>
						<th class="units">Units</th>
						<th class="grade">Grade Received</th>
						<th>Grade Points</th>
					</tr>
					<form action="<?php echo 'majorgpa.php?major='.$_GET['major'].'&global='.$_GET['global'].'&calc=yes'; ?>" method="post">
						<?php
							echo '<tr>';
							for ($i=0;$i<$global;$i++) {
								echo '<td class="class"><input type="text" name="c'.$i.'-name" value="';
								if ($_GET['major'] != "") {
									echo $majorcourse[$i].'" /></td>';
									} else {
										echo $_POST['c'.$i.'-name'].'" /></td>';
									}
								echo '<td class="units"><input type="text" name="c'.$i.'-units" maxlength="1" value="';
								if ($_GET['major'] != "") {
									echo $majorunits[$i].'" /></td>';
									} else {
										echo $_POST['c'.$i.'-units'].'" /></td>';
									}
								echo '<td class="grade"><select name="c'.$i.'-grade"><option value="'.$grade[$i].'">'.$grade[$i].'</option>';
								include ("includes/grade-drop-down.php");
								echo '</select></td>';
								echo '<td>';
								if ($_POST['c'.$i.'-grade'] != "") {
									$gradeNum = toNum($_POST['c'.$i.'-grade']);
									if (($gradeNum+1)) {
										$gpClass=$_POST['c'.$i.'-units']*$gradeNum;
										echo number_format($gpClass,1);
										$gpArray[$i]=$gpClass;
										$unitArray[$i]=$_POST['c'.$i.'-units'];
									} else {
										echo "N/a";
									}
								} else {
									echo "";
								}
								echo '</td></tr>';
							}
						?>
					</table>					
					<p>&nbsp;</p>
					<table id="gpa-sum" cellpadding="0" cellspacing="0">
						<tr>
							<th>Major GPA Totals</th>
							<th></th>
						</tr>
						<tr>
							<td class="name">Total Units Towards GPA</td>
							<td>
								<?php
									$totalUnits=array_sum($unitArray);
									echo number_format($totalUnits,1);
								?>
							</td>
						</tr>
						<tr>
							<td class="name">Total Grade Points</td>
							<td>
								<?php
									$totalGradePoints=array_sum($gpArray);
									echo number_format($totalGradePoints,1);
								?>
							</td>
						</tr>
						<tr>
							<td class="name">Semester GPA</td>
							<td><?php
									$gpa=$totalGradePoints/$totalUnits;
									echo number_format($gpa,3);
								?>
							</td>
						</tr>
					</table>
				</div>
				<input type="submit" value="Calculate" />&nbsp;<input type="button" value="Clear" onclick="location.href='majorgpa.php'" />
			</form>
			<p>&nbsp;</p>
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