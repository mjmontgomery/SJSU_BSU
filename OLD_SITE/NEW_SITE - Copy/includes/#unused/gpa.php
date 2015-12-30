<?php
	include('includes/uagent.php');
	
	$class = "Science 90T";
	$course = "Success as a Transfer at San Jose State University";
	$short = "Success as a Transfer";
	$page = "GPA Calculator";
	$active = "student-resources";
	
	//GPA Calculation Code
	include('includes/gpa-code.php');
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
			<div class="title">GPA Calculator</div>
			<div class="text">
				<p>In order to use this calculator, input your class name, units and select the grade you received.  If you click ANY of the submit buttons it will take you to the Grade Report page (so you do not have to fill out all eight semesters).</p>
			</div>
		</div>
		<form action="gpa.php?calc=yes" method="post">
			<div id="content">
				<div class="title">Semester One</div>
				<div class="text">
					<table id="gpa" cellpadding="0" cellspacing="0">
						<tr>
							<th class="class">Course Name</th>
							<th class="units">Units</th>
							<th class="grade">Grade Received</th>
							<th>Grade Points</th>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s1c1-name" value="<?php echo $_POST['s1c1-name']; ?>" /></td>
							<td class="units"><input type="text" name="s1c1-units" maxlength="1" value="<?php echo $_POST['s1c1-units']; ?>" /></td>
							<td class="grade"><select name="s1c1-grade"><option value="<?php echo $grade[0][0]; ?>"><?php echo $grade[0][0]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s1c1-grade'] != "") {
										$gradeNum = toNum($_POST['s1c1-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s1c1-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[0][0]=$gpClass;
											$unitArray[0][0]=$_POST['s1c1-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s1c2-name" value="<?php echo $_POST['s1c2-name']; ?>" /></td>
							<td class="units"><input type="text" name="s1c2-units" maxlength="1" value="<?php echo $_POST['s1c2-units']; ?>" /></td>
							<td class="grade"><select name="s1c2-grade"><option value="<?php echo $grade[0][1]; ?>"><?php echo $grade[0][1]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s1c2-grade'] != "") {
										$gradeNum = toNum($_POST['s1c2-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s1c2-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[0][1]=$gpClass;
											$unitArray[0][1]=$_POST['s1c2-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s1c3-name" value="<?php echo $_POST['s1c3-name']; ?>" /></td>
							<td class="units"><input type="text" name="s1c3-units" maxlength="1" value="<?php echo $_POST['s1c3-units']; ?>" /></td>
							<td class="grade"><select name="s1c3-grade"><option value="<?php echo $grade[0][2]; ?>"><?php echo $grade[0][2]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s1c3-grade'] != "") {
										$gradeNum = toNum($_POST['s1c3-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s1c3-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[0][2]=$gpClass;
											$unitArray[0][2]=$_POST['s1c3-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s1c4-name" value="<?php echo $_POST['s1c4-name']; ?>" /></td>
							<td class="units"><input type="text" name="s1c4-units" maxlength="1" value="<?php echo $_POST['s1c4-units']; ?>" /></td>
							<td class="grade"><select name="s1c4-grade"><option value="<?php echo $grade[0][3]; ?>"><?php echo $grade[0][3]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s1c4-grade'] != "") {
										$gradeNum = toNum($_POST['s1c4-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s1c4-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[0][3]=$gpClass;
											$unitArray[0][3]=$_POST['s1c4-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s1c5-name" value="<?php echo $_POST['s1c5-name']; ?>" /></td>
							<td class="units"><input type="text" name="s1c5-units" maxlength="1" value="<?php echo $_POST['s1c5-units']; ?>" /></td>
							<td class="grade"><select name="s1c5-grade"><option value="<?php echo $grade[0][4]; ?>"><?php echo $grade[0][4]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s1c5-grade'] != "") {
										$gradeNum = toNum($_POST['s1c5-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s1c5-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[0][4]=$gpClass;
											$unitArray[0][4]=$_POST['s1c5-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s1c6-name" value="<?php echo $_POST['s1c6-name']; ?>" /></td>
							<td class="units"><input type="text" name="s1c6-units" maxlength="1" value="<?php echo $_POST['s1c6-units']; ?>" /></td>
							<td class="grade"><select name="s1c6-grade"><option value="<?php echo $grade[0][5]; ?>"><?php echo $grade[0][5]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s1c6-grade'] != "") {
										$gradeNum = toNum($_POST['s1c6-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s1c6-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[0][5]=$gpClass;
											$unitArray[0][5]=$_POST['s1c6-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s1c7-name" value="<?php echo $_POST['s1c7-name']; ?>" /></td>
							<td class="units"><input type="text" name="s1c7-units" maxlength="1" value="<?php echo $_POST['s1c7-units']; ?>" /></td>
							<td class="grade"><select name="s1c7-grade"><option value="<?php echo $grade[0][6]; ?>"><?php echo $grade[0][6]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s1c7-grade'] != "") {
										$gradeNum = toNum($_POST['s1c7-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s1c7-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[0][6]=$gpClass;
											$unitArray[0][6]=$_POST['s1c7-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
					</table>
					<p>&nbsp;</p>
					<table id="gpa-sum" cellpadding="0" cellspacing="0">
						<tr>
							<th>Semester Totals</th>
							<th></th>
						</tr>
						<tr>
							<td class="name">Total Units Towards GPA</td>
							<td>
								<?php
									$totalUnits=array_sum($unitArray[0]);
									$gpaUnits[0]=$totalUnits;
									echo number_format($totalUnits,1);
								?>
							</td>
						</tr>
						<tr>
							<td class="name">Total Grade Points</td>
							<td>
								<?php
									$totalGradePoints=array_sum($gpArray[0]);
									$gpaGradePoints[0]=$totalGradePoints;
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
				<input type="submit" value="Calculate" />&nbsp;<input type="button" value="Clear" onclick="location.href='gpa.php'" />
				<p>&nbsp;</p>
			</div>
			<div id="content">
				<div class="title">Semester Two</div>
				<div class="text">
					<table id="gpa" cellpadding="0" cellspacing="0">
						<tr>
							<th class="class">Course Name</th>
							<th class="units">Units</th>
							<th class="grade">Grade Received</th>
							<th>Grade Points</th>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s2c1-name" value="<?php echo $_POST['s2c1-name']; ?>" /></td>
							<td class="units"><input type="text" name="s2c1-units" maxlength="1" value="<?php echo $_POST['s2c1-units']; ?>" /></td>
							<td class="grade"><select name="s2c1-grade"><option value="<?php echo $grade[1][0]; ?>"><?php echo $grade[1][0]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s2c1-grade'] != "") {
										$gradeNum = toNum($_POST['s2c1-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s2c1-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[1][0]=$gpClass;
											$unitArray[1][0]=$_POST['s2c1-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s2c2-name" value="<?php echo $_POST['s2c2-name']; ?>" /></td>
							<td class="units"><input type="text" name="s2c2-units" maxlength="1" value="<?php echo $_POST['s2c2-units']; ?>" /></td>
							<td class="grade"><select name="s2c2-grade"><option value="<?php echo $grade[1][1]; ?>"><?php echo $grade[1][1]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s2c2-grade'] != "") {
										$gradeNum = toNum($_POST['s2c2-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s2c2-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[1][1]=$gpClass;
											$unitArray[1][1]=$_POST['s2c2-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s2c3-name" value="<?php echo $_POST['s2c3-name']; ?>" /></td>
							<td class="units"><input type="text" name="s2c3-units" maxlength="1" value="<?php echo $_POST['s2c3-units']; ?>" /></td>
							<td class="grade"><select name="s2c3-grade"><option value="<?php echo $grade[1][2]; ?>"><?php echo $grade[1][2]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s2c3-grade'] != "") {
										$gradeNum = toNum($_POST['s2c3-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s2c3-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[1][2]=$gpClass;
											$unitArray[1][2]=$_POST['s2c3-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s2c4-name" value="<?php echo $_POST['s2c4-name']; ?>" /></td>
							<td class="units"><input type="text" name="s2c4-units" maxlength="1" value="<?php echo $_POST['s2c4-units']; ?>" /></td>
							<td class="grade"><select name="s2c4-grade"><option value="<?php echo $grade[1][3]; ?>"><?php echo $grade[1][3]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s2c4-grade'] != "") {
										$gradeNum = toNum($_POST['s2c4-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s2c4-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[1][3]=$gpClass;
											$unitArray[1][3]=$_POST['s2c4-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s2c5-name" value="<?php echo $_POST['s2c5-name']; ?>" /></td>
							<td class="units"><input type="text" name="s2c5-units" maxlength="1" value="<?php echo $_POST['s2c5-units']; ?>" /></td>
							<td class="grade"><select name="s2c5-grade"><option value="<?php echo $grade[1][4]; ?>"><?php echo $grade[1][4]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s2c5-grade'] != "") {
										$gradeNum = toNum($_POST['s2c5-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s2c5-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[1][4]=$gpClass;
											$unitArray[1][4]=$_POST['s2c5-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s2c6-name" value="<?php echo $_POST['s2c6-name']; ?>" /></td>
							<td class="units"><input type="text" name="s2c6-units" maxlength="1" value="<?php echo $_POST['s2c6-units']; ?>" /></td>
							<td class="grade"><select name="s2c6-grade"><option value="<?php echo $grade[1][5]; ?>"><?php echo $grade[1][5]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s2c6-grade'] != "") {
										$gradeNum = toNum($_POST['s2c6-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s2c6-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[1][5]=$gpClass;
											$unitArray[1][5]=$_POST['s2c6-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s2c7-name" value="<?php echo $_POST['s2c7-name']; ?>" /></td>
							<td class="units"><input type="text" name="s2c7-units" maxlength="1" value="<?php echo $_POST['s2c7-units']; ?>" /></td>
							<td class="grade"><select name="s2c7-grade"><option value="<?php echo $grade[1][6]; ?>"><?php echo $grade[1][6]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s2c7-grade'] != "") {
										$gradeNum = toNum($_POST['s2c7-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s2c7-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[1][6]=$gpClass;
											$unitArray[1][6]=$_POST['s2c7-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
					</table>
					<p>&nbsp;</p>
					<table id="gpa-sum" cellpadding="0" cellspacing="0">
						<tr>
							<th>Semester Totals</th>
							<th></th>
						</tr>
						<tr>
							<td class="name">Total Units Towards GPA</td>
							<td>
								<?php
									$totalUnits=array_sum($unitArray[1]);
									$gpaUnits[1]=$totalUnits;
									echo number_format($totalUnits,1);
								?>
							</td>
						</tr>
						<tr>
							<td class="name">Total Grade Points</td>
							<td>
								<?php
									$totalGradePoints=array_sum($gpArray[1]);
									$gpaGradePoints[1]=$totalGradePoints;
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
				<input type="submit" value="Calculate" />&nbsp;<input type="button" value="Clear" onclick="location.href='gpa.php'" />
				<p>&nbsp;</p>
			</div>
			<div id="content">
				<div class="title">Semester Three</div>
				<div class="text">
					<table id="gpa" cellpadding="0" cellspacing="0">
						<tr>
							<th class="class">Course Name</th>
							<th class="units">Units</th>
							<th class="grade">Grade Received</th>
							<th>Grade Points</th>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s3c1-name" value="<?php echo $_POST['s3c1-name']; ?>" /></td>
							<td class="units"><input type="text" name="s3c1-units" maxlength="1" value="<?php echo $_POST['s3c1-units']; ?>" /></td>
							<td class="grade"><select name="s3c1-grade"><option value="<?php echo $grade[2][0]; ?>"><?php echo $grade[2][0]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s3c1-grade'] != "") {
										$gradeNum = toNum($_POST['s3c1-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s3c1-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[2][0]=$gpClass;
											$unitArray[2][0]=$_POST['s3c1-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s3c2-name" value="<?php echo $_POST['s3c2-name']; ?>" /></td>
							<td class="units"><input type="text" name="s3c2-units" maxlength="1" value="<?php echo $_POST['s3c2-units']; ?>" /></td>
							<td class="grade"><select name="s3c2-grade"><option value="<?php echo $grade[2][1]; ?>"><?php echo $grade[2][1]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s3c2-grade'] != "") {
										$gradeNum = toNum($_POST['s3c2-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s3c2-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[2][1]=$gpClass;
											$unitArray[2][1]=$_POST['s3c2-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s3c3-name" value="<?php echo $_POST['s3c3-name']; ?>" /></td>
							<td class="units"><input type="text" name="s3c3-units" maxlength="1" value="<?php echo $_POST['s3c3-units']; ?>" /></td>
							<td class="grade"><select name="s3c3-grade"><option value="<?php echo $grade[2][2]; ?>"><?php echo $grade[2][2]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s3c3-grade'] != "") {
										$gradeNum = toNum($_POST['s3c3-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s3c3-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[2][2]=$gpClass;
											$unitArray[2][2]=$_POST['s3c3-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s3c4-name" value="<?php echo $_POST['s3c4-name']; ?>" /></td>
							<td class="units"><input type="text" name="s3c4-units" maxlength="1" value="<?php echo $_POST['s3c4-units']; ?>" /></td>
							<td class="grade"><select name="s3c4-grade"><option value="<?php echo $grade[2][3]; ?>"><?php echo $grade[2][3]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s3c4-grade'] != "") {
										$gradeNum = toNum($_POST['s3c4-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s3c4-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[2][3]=$gpClass;
											$unitArray[2][3]=$_POST['s3c4-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s3c5-name" value="<?php echo $_POST['s3c5-name']; ?>" /></td>
							<td class="units"><input type="text" name="s3c5-units" maxlength="1" value="<?php echo $_POST['s3c5-units']; ?>" /></td>
							<td class="grade"><select name="s3c5-grade"><option value="<?php echo $grade[2][4]; ?>"><?php echo $grade[2][4]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s3c5-grade'] != "") {
										$gradeNum = toNum($_POST['s3c5-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s3c5-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[2][4]=$gpClass;
											$unitArray[2][4]=$_POST['s3c5-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s3c6-name" value="<?php echo $_POST['s3c6-name']; ?>" /></td>
							<td class="units"><input type="text" name="s3c6-units" maxlength="1" value="<?php echo $_POST['s3c6-units']; ?>" /></td>
							<td class="grade"><select name="s3c6-grade"><option value="<?php echo $grade[2][5]; ?>"><?php echo $grade[2][5]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s3c6-grade'] != "") {
										$gradeNum = toNum($_POST['s3c6-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s3c6-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[2][5]=$gpClass;
											$unitArray[2][5]=$_POST['s3c6-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s3c7-name" value="<?php echo $_POST['s3c7-name']; ?>" /></td>
							<td class="units"><input type="text" name="s3c7-units" maxlength="1" value="<?php echo $_POST['s3c7-units']; ?>" /></td>
							<td class="grade"><select name="s3c7-grade"><option value="<?php echo $grade[2][6]; ?>"><?php echo $grade[2][6]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s3c7-grade'] != "") {
										$gradeNum = toNum($_POST['s3c7-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s3c7-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[2][6]=$gpClass;
											$unitArray[2][6]=$_POST['s3c7-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
					</table>
					<p>&nbsp;</p>
					<table id="gpa-sum" cellpadding="0" cellspacing="0">
						<tr>
							<th>Semester Totals</th>
							<th></th>
						</tr>
						<tr>
							<td class="name">Total Units Towards GPA</td>
							<td>
								<?php
									$totalUnits=array_sum($unitArray[2]);
									$gpaUnits[2]=$totalUnits;
									echo number_format($totalUnits,1);
								?>
							</td>
						</tr>
						<tr>
							<td class="name">Total Grade Points</td>
							<td>
								<?php
									$totalGradePoints=array_sum($gpArray[2]);
									$gpaGradePoints[2]=$totalGradePoints;
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
				<input type="submit" value="Calculate" />&nbsp;<input type="button" value="Clear" onclick="location.href='gpa.php'" />
				<p>&nbsp;</p>
			</div>
			<div id="content">
				<div class="title">Semester Four</div>
				<div class="text">
					<table id="gpa" cellpadding="0" cellspacing="0">
						<tr>
							<th class="class">Course Name</th>
							<th class="units">Units</th>
							<th class="grade">Grade Received</th>
							<th>Grade Points</th>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s4c1-name" value="<?php echo $_POST['s4c1-name']; ?>" /></td>
							<td class="units"><input type="text" name="s4c1-units" maxlength="1" value="<?php echo $_POST['s4c1-units']; ?>" /></td>
							<td class="grade"><select name="s4c1-grade"><option value="<?php echo $grade[3][0]; ?>"><?php echo $grade[3][0]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s4c1-grade'] != "") {
										$gradeNum = toNum($_POST['s4c1-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s4c1-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[3][0]=$gpClass;
											$unitArray[3][0]=$_POST['s4c1-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s4c2-name" value="<?php echo $_POST['s4c2-name']; ?>" /></td>
							<td class="units"><input type="text" name="s4c2-units" maxlength="1" value="<?php echo $_POST['s4c2-units']; ?>" /></td>
							<td class="grade"><select name="s4c2-grade"><option value="<?php echo $grade[3][1]; ?>"><?php echo $grade[3][1]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s4c2-grade'] != "") {
										$gradeNum = toNum($_POST['s4c2-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s4c2-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[3][1]=$gpClass;
											$unitArray[3][1]=$_POST['s4c2-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s4c3-name" value="<?php echo $_POST['s4c3-name']; ?>" /></td>
							<td class="units"><input type="text" name="s4c3-units" maxlength="1" value="<?php echo $_POST['s4c3-units']; ?>" /></td>
							<td class="grade"><select name="s4c3-grade"><option value="<?php echo $grade[3][2]; ?>"><?php echo $grade[3][2]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s4c3-grade'] != "") {
										$gradeNum = toNum($_POST['s4c3-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s4c3-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[3][2]=$gpClass;
											$unitArray[3][2]=$_POST['s4c3-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s4c4-name" value="<?php echo $_POST['s4c4-name']; ?>" /></td>
							<td class="units"><input type="text" name="s4c4-units" maxlength="1" value="<?php echo $_POST['s4c4-units']; ?>" /></td>
							<td class="grade"><select name="s4c4-grade"><option value="<?php echo $grade[3][3]; ?>"><?php echo $grade[3][3]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s4c4-grade'] != "") {
										$gradeNum = toNum($_POST['s4c4-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s4c4-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[3][3]=$gpClass;
											$unitArray[3][3]=$_POST['s4c4-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s4c5-name" value="<?php echo $_POST['s4c5-name']; ?>" /></td>
							<td class="units"><input type="text" name="s4c5-units" maxlength="1" value="<?php echo $_POST['s4c5-units']; ?>" /></td>
							<td class="grade"><select name="s4c5-grade"><option value="<?php echo $grade[3][4]; ?>"><?php echo $grade[3][4]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s4c5-grade'] != "") {
										$gradeNum = toNum($_POST['s4c5-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s4c5-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[3][4]=$gpClass;
											$unitArray[3][4]=$_POST['s4c5-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s4c6-name" value="<?php echo $_POST['s4c6-name']; ?>" /></td>
							<td class="units"><input type="text" name="s4c6-units" maxlength="1" value="<?php echo $_POST['s4c6-units']; ?>" /></td>
							<td class="grade"><select name="s4c6-grade"><option value="<?php echo $grade[3][5]; ?>"><?php echo $grade[3][5]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s4c6-grade'] != "") {
										$gradeNum = toNum($_POST['s4c6-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s4c6-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[3][5]=$gpClass;
											$unitArray[3][5]=$_POST['s4c6-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s4c7-name" value="<?php echo $_POST['s4c7-name']; ?>" /></td>
							<td class="units"><input type="text" name="s4c7-units" maxlength="1" value="<?php echo $_POST['s4c7-units']; ?>" /></td>
							<td class="grade"><select name="s4c7-grade"><option value="<?php echo $grade[3][6]; ?>"><?php echo $grade[3][6]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s4c7-grade'] != "") {
										$gradeNum = toNum($_POST['s4c7-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s4c7-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[3][6]=$gpClass;
											$unitArray[3][6]=$_POST['s4c7-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
					</table>
					<p>&nbsp;</p>
					<table id="gpa-sum" cellpadding="0" cellspacing="0">
						<tr>
							<th>Semester Totals</th>
							<th></th>
						</tr>
						<tr>
							<td class="name">Total Units Towards GPA</td>
							<td>
								<?php
									$totalUnits=array_sum($unitArray[3]);
									$gpaUnits[3]=$totalUnits;
									echo number_format($totalUnits,1);
								?>
							</td>
						</tr>
						<tr>
							<td class="name">Total Grade Points</td>
							<td>
								<?php
									$totalGradePoints=array_sum($gpArray[3]);
									$gpaGradePoints[3]=$totalGradePoints;
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
				<input type="submit" value="Calculate" />&nbsp;<input type="button" value="Clear" onclick="location.href='gpa.php'" />
				<p>&nbsp;</p>
			</div>
			<div id="content">
				<div class="title">Semester Five</div>
				<div class="text">
					<table id="gpa" cellpadding="0" cellspacing="0">
						<tr>
							<th class="class">Course Name</th>
							<th class="units">Units</th>
							<th class="grade">Grade Received</th>
							<th>Grade Points</th>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s5c1-name" value="<?php echo $_POST['s5c1-name']; ?>" /></td>
							<td class="units"><input type="text" name="s5c1-units" maxlength="1" value="<?php echo $_POST['s5c1-units']; ?>" /></td>
							<td class="grade"><select name="s5c1-grade"><option value="<?php echo $grade[4][0]; ?>"><?php echo $grade[4][0]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s5c1-grade'] != "") {
										$gradeNum = toNum($_POST['s5c1-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s5c1-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[4][0]=$gpClass;
											$unitArray[4][0]=$_POST['s5c1-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s5c2-name" value="<?php echo $_POST['s5c2-name']; ?>" /></td>
							<td class="units"><input type="text" name="s5c2-units" maxlength="1" value="<?php echo $_POST['s5c2-units']; ?>" /></td>
							<td class="grade"><select name="s5c2-grade"><option value="<?php echo $grade[4][1]; ?>"><?php echo $grade[4][1]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s5c2-grade'] != "") {
										$gradeNum = toNum($_POST['s5c2-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s5c2-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[4][1]=$gpClass;
											$unitArray[4][1]=$_POST['s5c2-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s5c3-name" value="<?php echo $_POST['s5c3-name']; ?>" /></td>
							<td class="units"><input type="text" name="s5c3-units" maxlength="1" value="<?php echo $_POST['s5c3-units']; ?>" /></td>
							<td class="grade"><select name="s5c3-grade"><option value="<?php echo $grade[4][2]; ?>"><?php echo $grade[4][2]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s5c3-grade'] != "") {
										$gradeNum = toNum($_POST['s5c3-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s5c3-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[4][2]=$gpClass;
											$unitArray[4][2]=$_POST['s5c3-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s5c4-name" value="<?php echo $_POST['s5c4-name']; ?>" /></td>
							<td class="units"><input type="text" name="s5c4-units" maxlength="1" value="<?php echo $_POST['s5c4-units']; ?>" /></td>
							<td class="grade"><select name="s5c4-grade"><option value="<?php echo $grade[4][3]; ?>"><?php echo $grade[4][3]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s5c4-grade'] != "") {
										$gradeNum = toNum($_POST['s5c4-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s5c4-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[4][3]=$gpClass;
											$unitArray[4][3]=$_POST['s5c4-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s5c5-name" value="<?php echo $_POST['s5c5-name']; ?>" /></td>
							<td class="units"><input type="text" name="s5c5-units" maxlength="1" value="<?php echo $_POST['s5c5-units']; ?>" /></td>
							<td class="grade"><select name="s5c5-grade"><option value="<?php echo $grade[4][4]; ?>"><?php echo $grade[4][4]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s5c5-grade'] != "") {
										$gradeNum = toNum($_POST['s5c5-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s5c5-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[4][4]=$gpClass;
											$unitArray[4][4]=$_POST['s5c5-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s5c6-name" value="<?php echo $_POST['s5c6-name']; ?>" /></td>
							<td class="units"><input type="text" name="s5c6-units" maxlength="1" value="<?php echo $_POST['s5c6-units']; ?>" /></td>
							<td class="grade"><select name="s5c6-grade"><option value="<?php echo $grade[4][5]; ?>"><?php echo $grade[4][5]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s5c6-grade'] != "") {
										$gradeNum = toNum($_POST['s5c6-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s5c6-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[4][5]=$gpClass;
											$unitArray[4][5]=$_POST['s5c6-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s5c7-name" value="<?php echo $_POST['s5c7-name']; ?>" /></td>
							<td class="units"><input type="text" name="s5c7-units" maxlength="1" value="<?php echo $_POST['s5c7-units']; ?>" /></td>
							<td class="grade"><select name="s5c7-grade"><option value="<?php echo $grade[4][6]; ?>"><?php echo $grade[4][6]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s5c7-grade'] != "") {
										$gradeNum = toNum($_POST['s5c7-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s5c7-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[4][6]=$gpClass;
											$unitArray[4][6]=$_POST['s5c7-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
					</table>
					<p>&nbsp;</p>
					<table id="gpa-sum" cellpadding="0" cellspacing="0">
						<tr>
							<th>Semester Totals</th>
							<th></th>
						</tr>
						<tr>
							<td class="name">Total Units Towards GPA</td>
							<td>
								<?php
									$totalUnits=array_sum($unitArray[4]);
									$gpaUnits[4]=$totalUnits;
									echo number_format($totalUnits,1);
								?>
							</td>
						</tr>
						<tr>
							<td class="name">Total Grade Points</td>
							<td>
								<?php
									$totalGradePoints=array_sum($gpArray[4]);
									$gpaGradePoints[4]=$totalGradePoints;
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
				<input type="submit" value="Calculate" />&nbsp;<input type="button" value="Clear" onclick="location.href='gpa.php'" />
				<p>&nbsp;</p>
			</div>
			<div id="content">
				<div class="title">Semester Six</div>
				<div class="text">
					<table id="gpa" cellpadding="0" cellspacing="0">
						<tr>
							<th class="class">Course Name</th>
							<th class="units">Units</th>
							<th class="grade">Grade Received</th>
							<th>Grade Points</th>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s6c1-name" value="<?php echo $_POST['s6c1-name']; ?>" /></td>
							<td class="units"><input type="text" name="s6c1-units" maxlength="1" value="<?php echo $_POST['s6c1-units']; ?>" /></td>
							<td class="grade"><select name="s6c1-grade"><option value="<?php echo $grade[5][0]; ?>"><?php echo $grade[5][0]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s6c1-grade'] != "") {
										$gradeNum = toNum($_POST['s6c1-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s6c1-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[5][0]=$gpClass;
											$unitArray[5][0]=$_POST['s6c1-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s6c2-name" value="<?php echo $_POST['s6c2-name']; ?>" /></td>
							<td class="units"><input type="text" name="s6c2-units" maxlength="1" value="<?php echo $_POST['s6c2-units']; ?>" /></td>
							<td class="grade"><select name="s6c2-grade"><option value="<?php echo $grade[5][1]; ?>"><?php echo $grade[5][1]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s6c2-grade'] != "") {
										$gradeNum = toNum($_POST['s6c2-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s6c2-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[5][1]=$gpClass;
											$unitArray[5][1]=$_POST['s6c2-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s6c3-name" value="<?php echo $_POST['s6c3-name']; ?>" /></td>
							<td class="units"><input type="text" name="s6c3-units" maxlength="1" value="<?php echo $_POST['s6c3-units']; ?>" /></td>
							<td class="grade"><select name="s6c3-grade"><option value="<?php echo $grade[5][2]; ?>"><?php echo $grade[5][2]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s6c3-grade'] != "") {
										$gradeNum = toNum($_POST['s6c3-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s6c3-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[5][2]=$gpClass;
											$unitArray[5][2]=$_POST['s6c3-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s6c4-name" value="<?php echo $_POST['s6c4-name']; ?>" /></td>
							<td class="units"><input type="text" name="s6c4-units" maxlength="1" value="<?php echo $_POST['s6c4-units']; ?>" /></td>
							<td class="grade"><select name="s6c4-grade"><option value="<?php echo $grade[5][3]; ?>"><?php echo $grade[5][3]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s6c4-grade'] != "") {
										$gradeNum = toNum($_POST['s6c4-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s6c4-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[5][3]=$gpClass;
											$unitArray[5][3]=$_POST['s6c4-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s6c5-name" value="<?php echo $_POST['s6c5-name']; ?>" /></td>
							<td class="units"><input type="text" name="s6c5-units" maxlength="1" value="<?php echo $_POST['s6c5-units']; ?>" /></td>
							<td class="grade"><select name="s6c5-grade"><option value="<?php echo $grade[5][4]; ?>"><?php echo $grade[5][4]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s6c5-grade'] != "") {
										$gradeNum = toNum($_POST['s6c5-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s6c5-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[5][4]=$gpClass;
											$unitArray[5][4]=$_POST['s6c5-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s6c6-name" value="<?php echo $_POST['s6c6-name']; ?>" /></td>
							<td class="units"><input type="text" name="s6c6-units" maxlength="1" value="<?php echo $_POST['s6c6-units']; ?>" /></td>
							<td class="grade"><select name="s6c6-grade"><option value="<?php echo $grade[5][5]; ?>"><?php echo $grade[5][5]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s6c6-grade'] != "") {
										$gradeNum = toNum($_POST['s6c6-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s6c6-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[5][5]=$gpClass;
											$unitArray[5][5]=$_POST['s6c6-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s6c7-name" value="<?php echo $_POST['s6c7-name']; ?>" /></td>
							<td class="units"><input type="text" name="s6c7-units" maxlength="1" value="<?php echo $_POST['s6c7-units']; ?>" /></td>
							<td class="grade"><select name="s6c7-grade"><option value="<?php echo $grade[5][6]; ?>"><?php echo $grade[5][6]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s6c7-grade'] != "") {
										$gradeNum = toNum($_POST['s6c7-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s6c7-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[5][6]=$gpClass;
											$unitArray[5][6]=$_POST['s6c7-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
					</table>
					<p>&nbsp;</p>
					<table id="gpa-sum" cellpadding="0" cellspacing="0">
						<tr>
							<th>Semester Totals</th>
							<th></th>
						</tr>
						<tr>
							<td class="name">Total Units Towards GPA</td>
							<td>
								<?php
									$totalUnits=array_sum($unitArray[5]);
									$gpaUnits[5]=$totalUnits;
									echo number_format($totalUnits,1);
								?>
							</td>
						</tr>
						<tr>
							<td class="name">Total Grade Points</td>
							<td>
								<?php
									$totalGradePoints=array_sum($gpArray[5]);
									$gpaGradePoints[5]=$totalGradePoints;
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
				<input type="submit" value="Calculate" />&nbsp;<input type="button" value="Clear" onclick="location.href='gpa.php'" />
				<p>&nbsp;</p>
			</div>
			<div id="content">
				<div class="title">Semester Seven</div>
				<div class="text">
					<table id="gpa" cellpadding="0" cellspacing="0">
						<tr>
							<th class="class">Course Name</th>
							<th class="units">Units</th>
							<th class="grade">Grade Received</th>
							<th>Grade Points</th>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s7c1-name" value="<?php echo $_POST['s7c1-name']; ?>" /></td>
							<td class="units"><input type="text" name="s7c1-units" maxlength="1" value="<?php echo $_POST['s7c1-units']; ?>" /></td>
							<td class="grade"><select name="s7c1-grade"><option value="<?php echo $grade[6][0]; ?>"><?php echo $grade[6][0]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s7c1-grade'] != "") {
										$gradeNum = toNum($_POST['s7c1-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s7c1-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[6][0]=$gpClass;
											$unitArray[6][0]=$_POST['s7c1-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s7c2-name" value="<?php echo $_POST['s7c2-name']; ?>" /></td>
							<td class="units"><input type="text" name="s7c2-units" maxlength="1" value="<?php echo $_POST['s7c2-units']; ?>" /></td>
							<td class="grade"><select name="s7c2-grade"><option value="<?php echo $grade[6][1]; ?>"><?php echo $grade[6][1]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s7c2-grade'] != "") {
										$gradeNum = toNum($_POST['s7c2-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s7c2-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[6][1]=$gpClass;
											$unitArray[6][1]=$_POST['s7c2-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s7c3-name" value="<?php echo $_POST['s7c3-name']; ?>" /></td>
							<td class="units"><input type="text" name="s7c3-units" maxlength="1" value="<?php echo $_POST['s7c3-units']; ?>" /></td>
							<td class="grade"><select name="s7c3-grade"><option value="<?php echo $grade[6][2]; ?>"><?php echo $grade[6][2]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s7c3-grade'] != "") {
										$gradeNum = toNum($_POST['s7c3-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s7c3-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[6][2]=$gpClass;
											$unitArray[6][2]=$_POST['s7c3-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s7c4-name" value="<?php echo $_POST['s7c4-name']; ?>" /></td>
							<td class="units"><input type="text" name="s7c4-units" maxlength="1" value="<?php echo $_POST['s7c4-units']; ?>" /></td>
							<td class="grade"><select name="s7c4-grade"><option value="<?php echo $grade[6][3]; ?>"><?php echo $grade[6][3]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s7c4-grade'] != "") {
										$gradeNum = toNum($_POST['s7c4-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s7c4-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[6][3]=$gpClass;
											$unitArray[6][3]=$_POST['s7c4-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s7c5-name" value="<?php echo $_POST['s7c5-name']; ?>" /></td>
							<td class="units"><input type="text" name="s7c5-units" maxlength="1" value="<?php echo $_POST['s7c5-units']; ?>" /></td>
							<td class="grade"><select name="s7c5-grade"><option value="<?php echo $grade[6][4]; ?>"><?php echo $grade[6][4]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s7c5-grade'] != "") {
										$gradeNum = toNum($_POST['s7c5-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s7c5-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[6][4]=$gpClass;
											$unitArray[6][4]=$_POST['s7c5-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s7c6-name" value="<?php echo $_POST['s7c6-name']; ?>" /></td>
							<td class="units"><input type="text" name="s7c6-units" maxlength="1" value="<?php echo $_POST['s7c6-units']; ?>" /></td>
							<td class="grade"><select name="s7c6-grade"><option value="<?php echo $grade[6][5]; ?>"><?php echo $grade[6][5]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s7c6-grade'] != "") {
										$gradeNum = toNum($_POST['s7c6-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s7c6-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[6][5]=$gpClass;
											$unitArray[6][5]=$_POST['s7c6-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s7c7-name" value="<?php echo $_POST['s7c7-name']; ?>" /></td>
							<td class="units"><input type="text" name="s7c7-units" maxlength="1" value="<?php echo $_POST['s7c7-units']; ?>" /></td>
							<td class="grade"><select name="s7c7-grade"><option value="<?php echo $grade[6][6]; ?>"><?php echo $grade[6][6]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s7c7-grade'] != "") {
										$gradeNum = toNum($_POST['s7c7-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s7c7-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[6][6]=$gpClass;
											$unitArray[6][6]=$_POST['s7c7-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
					</table>
					<p>&nbsp;</p>
					<table id="gpa-sum" cellpadding="0" cellspacing="0">
						<tr>
							<th>Semester Totals</th>
							<th></th>
						</tr>
						<tr>
							<td class="name">Total Units Towards GPA</td>
							<td>
								<?php
									$totalUnits=array_sum($unitArray[6]);
									$gpaUnits[6]=$totalUnits;
									echo number_format($totalUnits,1);
								?>
							</td>
						</tr>
						<tr>
							<td class="name">Total Grade Points</td>
							<td>
								<?php
									$totalGradePoints=array_sum($gpArray[6]);
									$gpaGradePoints[6]=$totalGradePoints;
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
				<input type="submit" value="Calculate" />&nbsp;<input type="button" value="Clear" onclick="location.href='gpa.php'" />
				<p>&nbsp;</p>
			</div>
			<div id="content">
				<div class="title">Semester Eight</div>
				<div class="text">
					<table id="gpa" cellpadding="0" cellspacing="0">
						<tr>
							<th class="class">Course Name</th>
							<th class="units">Units</th>
							<th class="grade">Grade Received</th>
							<th>Grade Points</th>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s8c1-name" value="<?php echo $_POST['s8c1-name']; ?>" /></td>
							<td class="units"><input type="text" name="s8c1-units" maxlength="1" value="<?php echo $_POST['s8c1-units']; ?>" /></td>
							<td class="grade"><select name="s8c1-grade"><option value="<?php echo $grade[7][0]; ?>"><?php echo $grade[7][0]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s8c1-grade'] != "") {
										$gradeNum = toNum($_POST['s8c1-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s8c1-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[7][0]=$gpClass;
											$unitArray[7][0]=$_POST['s8c1-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s8c2-name" value="<?php echo $_POST['s8c2-name']; ?>" /></td>
							<td class="units"><input type="text" name="s8c2-units" maxlength="1" value="<?php echo $_POST['s8c2-units']; ?>" /></td>
							<td class="grade"><select name="s8c2-grade"><option value="<?php echo $grade[7][1]; ?>"><?php echo $grade[7][1]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s8c2-grade'] != "") {
										$gradeNum = toNum($_POST['s8c2-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s8c2-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[7][1]=$gpClass;
											$unitArray[7][1]=$_POST['s8c2-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s8c3-name" value="<?php echo $_POST['s8c3-name']; ?>" /></td>
							<td class="units"><input type="text" name="s8c3-units" maxlength="1" value="<?php echo $_POST['s8c3-units']; ?>" /></td>
							<td class="grade"><select name="s8c3-grade"><option value="<?php echo $grade[7][2]; ?>"><?php echo $grade[7][2]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s8c3-grade'] != "") {
										$gradeNum = toNum($_POST['s8c3-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s8c3-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[7][2]=$gpClass;
											$unitArray[7][2]=$_POST['s8c3-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s8c4-name" value="<?php echo $_POST['s8c4-name']; ?>" /></td>
							<td class="units"><input type="text" name="s8c4-units" maxlength="1" value="<?php echo $_POST['s8c4-units']; ?>" /></td>
							<td class="grade"><select name="s8c4-grade"><option value="<?php echo $grade[7][3]; ?>"><?php echo $grade[7][3]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s8c4-grade'] != "") {
										$gradeNum = toNum($_POST['s8c4-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s8c4-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[7][3]=$gpClass;
											$unitArray[7][3]=$_POST['s8c4-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s8c5-name" value="<?php echo $_POST['s8c5-name']; ?>" /></td>
							<td class="units"><input type="text" name="s8c5-units" maxlength="1" value="<?php echo $_POST['s8c5-units']; ?>" /></td>
							<td class="grade"><select name="s8c5-grade"><option value="<?php echo $grade[7][4]; ?>"><?php echo $grade[7][4]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s8c5-grade'] != "") {
										$gradeNum = toNum($_POST['s8c5-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s8c5-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[7][4]=$gpClass;
											$unitArray[7][4]=$_POST['s8c5-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s8c6-name" value="<?php echo $_POST['s8c6-name']; ?>" /></td>
							<td class="units"><input type="text" name="s8c6-units" maxlength="1" value="<?php echo $_POST['s8c6-units']; ?>" /></td>
							<td class="grade"><select name="s8c6-grade"><option value="<?php echo $grade[7][5]; ?>"><?php echo $grade[7][5]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s8c6-grade'] != "") {
										$gradeNum = toNum($_POST['s8c6-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s8c6-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[7][5]=$gpClass;
											$unitArray[7][5]=$_POST['s8c6-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s8c7-name" value="<?php echo $_POST['s8c7-name']; ?>" /></td>
							<td class="units"><input type="text" name="s8c7-units" maxlength="1" value="<?php echo $_POST['s8c7-units']; ?>" /></td>
							<td class="grade"><select name="s8c7-grade"><option value="<?php echo $grade[7][6]; ?>"><?php echo $grade[7][6]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s8c7-grade'] != "") {
										$gradeNum = toNum($_POST['s8c7-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s8c7-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[7][6]=$gpClass;
											$unitArray[7][6]=$_POST['s8c7-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
					</table>
					<p>&nbsp;</p>
					<table id="gpa-sum" cellpadding="0" cellspacing="0">
						<tr>
							<th>Semester Totals</th>
							<th></th>
						</tr>
						<tr>
							<td class="name">Total Units Towards GPA</td>
							<td>
								<?php
									$totalUnits=array_sum($unitArray[7]);
									$gpaUnits[7]=$totalUnits;
									echo number_format($totalUnits,1);
								?>
							</td>
						</tr>
						<tr>
							<td class="name">Total Grade Points</td>
							<td>
								<?php
									$totalGradePoints=array_sum($gpArray[7]);
									$gpaGradePoints[7]=$totalGradePoints;
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
				<input type="submit" value="Calculate" />&nbsp;<input type="button" value="Clear" onclick="location.href='gpa.php'" />
				<p>&nbsp;</p>
			</div>			
			<div id="content">
				<div class="title">Semester Nine</div>
				<div class="text">
					<table id="gpa" cellpadding="0" cellspacing="0">
						<tr>
							<th class="class">Course Name</th>
							<th class="units">Units</th>
							<th class="grade">Grade Received</th>
							<th>Grade Points</th>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s9c1-name" value="<?php echo $_POST['s9c1-name']; ?>" /></td>
							<td class="units"><input type="text" name="s9c1-units" maxlength="1" value="<?php echo $_POST['s9c1-units']; ?>" /></td>
							<td class="grade"><select name="s9c1-grade"><option value="<?php echo $grade[8][0]; ?>"><?php echo $grade[8][0]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s9c1-grade'] != "") {
										$gradeNum = toNum($_POST['s9c1-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s9c1-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[8][0]=$gpClass;
											$unitArray[8][0]=$_POST['s9c1-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s9c2-name" value="<?php echo $_POST['s9c2-name']; ?>" /></td>
							<td class="units"><input type="text" name="s9c2-units" maxlength="1" value="<?php echo $_POST['s9c2-units']; ?>" /></td>
							<td class="grade"><select name="s9c2-grade"><option value="<?php echo $grade[8][1]; ?>"><?php echo $grade[8][1]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s9c2-grade'] != "") {
										$gradeNum = toNum($_POST['s9c2-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s9c2-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[8][1]=$gpClass;
											$unitArray[8][1]=$_POST['s9c2-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s9c3-name" value="<?php echo $_POST['s9c3-name']; ?>" /></td>
							<td class="units"><input type="text" name="s9c3-units" maxlength="1" value="<?php echo $_POST['s9c3-units']; ?>" /></td>
							<td class="grade"><select name="s9c3-grade"><option value="<?php echo $grade[8][2]; ?>"><?php echo $grade[8][2]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s9c3-grade'] != "") {
										$gradeNum = toNum($_POST['s9c3-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s9c3-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[8][2]=$gpClass;
											$unitArray[8][2]=$_POST['s9c3-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s9c4-name" value="<?php echo $_POST['s9c4-name']; ?>" /></td>
							<td class="units"><input type="text" name="s9c4-units" maxlength="1" value="<?php echo $_POST['s9c4-units']; ?>" /></td>
							<td class="grade"><select name="s9c4-grade"><option value="<?php echo $grade[8][3]; ?>"><?php echo $grade[8][3]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s9c4-grade'] != "") {
										$gradeNum = toNum($_POST['s9c4-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s9c4-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[8][3]=$gpClass;
											$unitArray[8][3]=$_POST['s9c4-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s9c5-name" value="<?php echo $_POST['s9c5-name']; ?>" /></td>
							<td class="units"><input type="text" name="s9c5-units" maxlength="1" value="<?php echo $_POST['s9c5-units']; ?>" /></td>
							<td class="grade"><select name="s9c5-grade"><option value="<?php echo $grade[8][4]; ?>"><?php echo $grade[8][4]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s9c5-grade'] != "") {
										$gradeNum = toNum($_POST['s9c5-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s9c5-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[8][4]=$gpClass;
											$unitArray[8][4]=$_POST['s9c5-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s9c6-name" value="<?php echo $_POST['s9c6-name']; ?>" /></td>
							<td class="units"><input type="text" name="s9c6-units" maxlength="1" value="<?php echo $_POST['s9c6-units']; ?>" /></td>
							<td class="grade"><select name="s9c6-grade"><option value="<?php echo $grade[8][5]; ?>"><?php echo $grade[8][5]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s9c6-grade'] != "") {
										$gradeNum = toNum($_POST['s9c6-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s9c6-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[8][5]=$gpClass;
											$unitArray[8][5]=$_POST['s9c6-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s9c7-name" value="<?php echo $_POST['s9c7-name']; ?>" /></td>
							<td class="units"><input type="text" name="s9c7-units" maxlength="1" value="<?php echo $_POST['s9c7-units']; ?>" /></td>
							<td class="grade"><select name="s9c7-grade"><option value="<?php echo $grade[8][6]; ?>"><?php echo $grade[8][6]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s9c7-grade'] != "") {
										$gradeNum = toNum($_POST['s9c7-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s9c7-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[8][6]=$gpClass;
											$unitArray[8][6]=$_POST['s9c7-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
					</table>
					<p>&nbsp;</p>
					<table id="gpa-sum" cellpadding="0" cellspacing="0">
						<tr>
							<th>Semester Totals</th>
							<th></th>
						</tr>
						<tr>
							<td class="name">Total Units Towards GPA</td>
							<td>
								<?php
									$totalUnits=array_sum($unitArray[8]);
									$gpaUnits[8]=$totalUnits;
									echo number_format($totalUnits,1);
								?>
							</td>
						</tr>
						<tr>
							<td class="name">Total Grade Points</td>
							<td>
								<?php
									$totalGradePoints=array_sum($gpArray[8]);
									$gpaGradePoints[8]=$totalGradePoints;
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
				<input type="submit" value="Calculate" />&nbsp;<input type="button" value="Clear" onclick="location.href='gpa.php'" />
				<p>&nbsp;</p>
			</div>
			<div id="content">
				<div class="title">Semester Ten</div>
				<div class="text">
					<table id="gpa" cellpadding="0" cellspacing="0">
						<tr>
							<th class="class">Course Name</th>
							<th class="units">Units</th>
							<th class="grade">Grade Received</th>
							<th>Grade Points</th>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s10c1-name" value="<?php echo $_POST['s10c1-name']; ?>" /></td>
							<td class="units"><input type="text" name="s10c1-units" maxlength="1" value="<?php echo $_POST['s10c1-units']; ?>" /></td>
							<td class="grade"><select name="s10c1-grade"><option value="<?php echo $grade[9][0]; ?>"><?php echo $grade[9][0]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s10c1-grade'] != "") {
										$gradeNum = toNum($_POST['s10c1-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s10c1-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[9][0]=$gpClass;
											$unitArray[9][0]=$_POST['s10c1-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s10c2-name" value="<?php echo $_POST['s10c2-name']; ?>" /></td>
							<td class="units"><input type="text" name="s10c2-units" maxlength="1" value="<?php echo $_POST['s10c2-units']; ?>" /></td>
							<td class="grade"><select name="s10c2-grade"><option value="<?php echo $grade[9][1]; ?>"><?php echo $grade[9][1]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s10c2-grade'] != "") {
										$gradeNum = toNum($_POST['s10c2-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s10c2-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[9][1]=$gpClass;
											$unitArray[9][1]=$_POST['s10c2-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s10c3-name" value="<?php echo $_POST['s10c3-name']; ?>" /></td>
							<td class="units"><input type="text" name="s10c3-units" maxlength="1" value="<?php echo $_POST['s10c3-units']; ?>" /></td>
							<td class="grade"><select name="s10c3-grade"><option value="<?php echo $grade[9][2]; ?>"><?php echo $grade[9][2]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s10c3-grade'] != "") {
										$gradeNum = toNum($_POST['s10c3-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s10c3-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[9][2]=$gpClass;
											$unitArray[9][2]=$_POST['s10c3-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s10c4-name" value="<?php echo $_POST['s10c4-name']; ?>" /></td>
							<td class="units"><input type="text" name="s10c4-units" maxlength="1" value="<?php echo $_POST['s10c4-units']; ?>" /></td>
							<td class="grade"><select name="s10c4-grade"><option value="<?php echo $grade[9][3]; ?>"><?php echo $grade[9][3]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s10c4-grade'] != "") {
										$gradeNum = toNum($_POST['s10c4-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s10c4-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[9][3]=$gpClass;
											$unitArray[9][3]=$_POST['s10c4-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s10c5-name" value="<?php echo $_POST['s10c5-name']; ?>" /></td>
							<td class="units"><input type="text" name="s10c5-units" maxlength="1" value="<?php echo $_POST['s10c5-units']; ?>" /></td>
							<td class="grade"><select name="s10c5-grade"><option value="<?php echo $grade[9][4]; ?>"><?php echo $grade[9][4]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s10c5-grade'] != "") {
										$gradeNum = toNum($_POST['s10c5-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s10c5-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[9][4]=$gpClass;
											$unitArray[9][4]=$_POST['s10c5-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s10c6-name" value="<?php echo $_POST['s10c6-name']; ?>" /></td>
							<td class="units"><input type="text" name="s10c6-units" maxlength="1" value="<?php echo $_POST['s10c6-units']; ?>" /></td>
							<td class="grade"><select name="s10c6-grade"><option value="<?php echo $grade[9][5]; ?>"><?php echo $grade[9][5]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s10c6-grade'] != "") {
										$gradeNum = toNum($_POST['s10c6-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s10c6-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[9][5]=$gpClass;
											$unitArray[9][5]=$_POST['s10c6-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s10c7-name" value="<?php echo $_POST['s10c7-name']; ?>" /></td>
							<td class="units"><input type="text" name="s10c7-units" maxlength="1" value="<?php echo $_POST['s10c7-units']; ?>" /></td>
							<td class="grade"><select name="s10c7-grade"><option value="<?php echo $grade[9][6]; ?>"><?php echo $grade[9][6]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s10c7-grade'] != "") {
										$gradeNum = toNum($_POST['s10c7-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s10c7-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[9][6]=$gpClass;
											$unitArray[9][6]=$_POST['s10c7-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
					</table>
					<p>&nbsp;</p>
					<table id="gpa-sum" cellpadding="0" cellspacing="0">
						<tr>
							<th>Semester Totals</th>
							<th></th>
						</tr>
						<tr>
							<td class="name">Total Units Towards GPA</td>
							<td>
								<?php
									$totalUnits=array_sum($unitArray[9]);
									$gpaUnits[9]=$totalUnits;
									echo number_format($totalUnits,1);
								?>
							</td>
						</tr>
						<tr>
							<td class="name">Total Grade Points</td>
							<td>
								<?php
									$totalGradePoints=array_sum($gpArray[9]);
									$gpaGradePoints[9]=$totalGradePoints;
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
				<input type="submit" value="Calculate" />&nbsp;<input type="button" value="Clear" onclick="location.href='gpa.php'" />
				<p>&nbsp;</p>
			</div>
			<div id="content">
				<div class="title">Semester Eleven</div>
				<div class="text">
					<table id="gpa" cellpadding="0" cellspacing="0">
						<tr>
							<th class="class">Course Name</th>
							<th class="units">Units</th>
							<th class="grade">Grade Received</th>
							<th>Grade Points</th>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s11c1-name" value="<?php echo $_POST['s11c1-name']; ?>" /></td>
							<td class="units"><input type="text" name="s11c1-units" maxlength="1" value="<?php echo $_POST['s11c1-units']; ?>" /></td>
							<td class="grade"><select name="s11c1-grade"><option value="<?php echo $grade[10][0]; ?>"><?php echo $grade[10][0]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s11c1-grade'] != "") {
										$gradeNum = toNum($_POST['s11c1-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s11c1-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[10][0]=$gpClass;
											$unitArray[10][0]=$_POST['s11c1-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s11c2-name" value="<?php echo $_POST['s11c2-name']; ?>" /></td>
							<td class="units"><input type="text" name="s11c2-units" maxlength="1" value="<?php echo $_POST['s11c2-units']; ?>" /></td>
							<td class="grade"><select name="s11c2-grade"><option value="<?php echo $grade[10][1]; ?>"><?php echo $grade[10][1]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s11c2-grade'] != "") {
										$gradeNum = toNum($_POST['s11c2-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s11c2-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[10][1]=$gpClass;
											$unitArray[10][1]=$_POST['s11c2-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s11c3-name" value="<?php echo $_POST['s11c3-name']; ?>" /></td>
							<td class="units"><input type="text" name="s11c3-units" maxlength="1" value="<?php echo $_POST['s11c3-units']; ?>" /></td>
							<td class="grade"><select name="s11c3-grade"><option value="<?php echo $grade[10][2]; ?>"><?php echo $grade[10][2]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s11c3-grade'] != "") {
										$gradeNum = toNum($_POST['s11c3-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s11c3-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[10][2]=$gpClass;
											$unitArray[10][2]=$_POST['s11c3-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s11c4-name" value="<?php echo $_POST['s11c4-name']; ?>" /></td>
							<td class="units"><input type="text" name="s11c4-units" maxlength="1" value="<?php echo $_POST['s11c4-units']; ?>" /></td>
							<td class="grade"><select name="s11c4-grade"><option value="<?php echo $grade[10][3]; ?>"><?php echo $grade[10][3]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s11c4-grade'] != "") {
										$gradeNum = toNum($_POST['s11c4-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s11c4-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[10][3]=$gpClass;
											$unitArray[10][3]=$_POST['s11c4-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s11c5-name" value="<?php echo $_POST['s11c5-name']; ?>" /></td>
							<td class="units"><input type="text" name="s11c5-units" maxlength="1" value="<?php echo $_POST['s11c5-units']; ?>" /></td>
							<td class="grade"><select name="s11c5-grade"><option value="<?php echo $grade[10][4]; ?>"><?php echo $grade[10][4]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s11c5-grade'] != "") {
										$gradeNum = toNum($_POST['s11c5-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s11c5-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[10][4]=$gpClass;
											$unitArray[10][4]=$_POST['s11c5-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s11c6-name" value="<?php echo $_POST['s11c6-name']; ?>" /></td>
							<td class="units"><input type="text" name="s11c6-units" maxlength="1" value="<?php echo $_POST['s11c6-units']; ?>" /></td>
							<td class="grade"><select name="s11c6-grade"><option value="<?php echo $grade[10][5]; ?>"><?php echo $grade[10][5]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s11c6-grade'] != "") {
										$gradeNum = toNum($_POST['s11c6-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s11c6-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[10][5]=$gpClass;
											$unitArray[10][5]=$_POST['s11c6-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s11c7-name" value="<?php echo $_POST['s11c7-name']; ?>" /></td>
							<td class="units"><input type="text" name="s11c7-units" maxlength="1" value="<?php echo $_POST['s11c7-units']; ?>" /></td>
							<td class="grade"><select name="s11c7-grade"><option value="<?php echo $grade[10][6]; ?>"><?php echo $grade[10][6]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s11c7-grade'] != "") {
										$gradeNum = toNum($_POST['s11c7-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s11c7-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[10][6]=$gpClass;
											$unitArray[10][6]=$_POST['s11c7-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
					</table>
					<p>&nbsp;</p>
					<table id="gpa-sum" cellpadding="0" cellspacing="0">
						<tr>
							<th>Semester Totals</th>
							<th></th>
						</tr>
						<tr>
							<td class="name">Total Units Towards GPA</td>
							<td>
								<?php
									$totalUnits=array_sum($unitArray[10]);
									$gpaUnits[10]=$totalUnits;
									echo number_format($totalUnits,1);
								?>
							</td>
						</tr>
						<tr>
							<td class="name">Total Grade Points</td>
							<td>
								<?php
									$totalGradePoints=array_sum($gpArray[10]);
									$gpaGradePoints[10]=$totalGradePoints;
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
				<input type="submit" value="Calculate" />&nbsp;<input type="button" value="Clear" onclick="location.href='gpa.php'" />
				<p>&nbsp;</p>
			</div>
			<div id="content">
				<div class="title">Semester Twelve</div>
				<div class="text">
					<table id="gpa" cellpadding="0" cellspacing="0">
						<tr>
							<th class="class">Course Name</th>
							<th class="units">Units</th>
							<th class="grade">Grade Received</th>
							<th>Grade Points</th>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s12c1-name" value="<?php echo $_POST['s12c1-name']; ?>" /></td>
							<td class="units"><input type="text" name="s12c1-units" maxlength="1" value="<?php echo $_POST['s12c1-units']; ?>" /></td>
							<td class="grade"><select name="s12c1-grade"><option value="<?php echo $grade[11][0]; ?>"><?php echo $grade[11][0]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s12c1-grade'] != "") {
										$gradeNum = toNum($_POST['s12c1-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s12c1-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[11][0]=$gpClass;
											$unitArray[11][0]=$_POST['s12c1-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s12c2-name" value="<?php echo $_POST['s12c2-name']; ?>" /></td>
							<td class="units"><input type="text" name="s12c2-units" maxlength="1" value="<?php echo $_POST['s12c2-units']; ?>" /></td>
							<td class="grade"><select name="s12c2-grade"><option value="<?php echo $grade[11][1]; ?>"><?php echo $grade[11][1]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s12c2-grade'] != "") {
										$gradeNum = toNum($_POST['s12c2-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s12c2-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[11][1]=$gpClass;
											$unitArray[11][1]=$_POST['s12c2-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s12c3-name" value="<?php echo $_POST['s12c3-name']; ?>" /></td>
							<td class="units"><input type="text" name="s12c3-units" maxlength="1" value="<?php echo $_POST['s12c3-units']; ?>" /></td>
							<td class="grade"><select name="s12c3-grade"><option value="<?php echo $grade[11][2]; ?>"><?php echo $grade[11][2]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s12c3-grade'] != "") {
										$gradeNum = toNum($_POST['s12c3-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s12c3-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[11][2]=$gpClass;
											$unitArray[11][2]=$_POST['s12c3-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s12c4-name" value="<?php echo $_POST['s12c4-name']; ?>" /></td>
							<td class="units"><input type="text" name="s12c4-units" maxlength="1" value="<?php echo $_POST['s12c4-units']; ?>" /></td>
							<td class="grade"><select name="s12c4-grade"><option value="<?php echo $grade[11][3]; ?>"><?php echo $grade[11][3]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s12c4-grade'] != "") {
										$gradeNum = toNum($_POST['s12c4-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s12c4-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[11][3]=$gpClass;
											$unitArray[11][3]=$_POST['s12c4-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s12c5-name" value="<?php echo $_POST['s12c5-name']; ?>" /></td>
							<td class="units"><input type="text" name="s12c5-units" maxlength="1" value="<?php echo $_POST['s12c5-units']; ?>" /></td>
							<td class="grade"><select name="s12c5-grade"><option value="<?php echo $grade[11][4]; ?>"><?php echo $grade[11][4]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s12c5-grade'] != "") {
										$gradeNum = toNum($_POST['s12c5-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s12c5-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[11][4]=$gpClass;
											$unitArray[11][4]=$_POST['s12c5-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s12c6-name" value="<?php echo $_POST['s12c6-name']; ?>" /></td>
							<td class="units"><input type="text" name="s12c6-units" maxlength="1" value="<?php echo $_POST['s12c6-units']; ?>" /></td>
							<td class="grade"><select name="s12c6-grade"><option value="<?php echo $grade[11][5]; ?>"><?php echo $grade[11][5]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s12c6-grade'] != "") {
										$gradeNum = toNum($_POST['s12c6-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s12c6-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[11][5]=$gpClass;
											$unitArray[11][5]=$_POST['s12c6-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
						<tr>
							<td class="class"><input type="text" name="s12c7-name" value="<?php echo $_POST['s12c7-name']; ?>" /></td>
							<td class="units"><input type="text" name="s12c7-units" maxlength="1" value="<?php echo $_POST['s12c7-units']; ?>" /></td>
							<td class="grade"><select name="s12c7-grade"><option value="<?php echo $grade[11][6]; ?>"><?php echo $grade[11][6]; ?></option><?php include ("includes/grade-drop-down.php"); ?></select></td>
							<td>
								<?php
									if ($_POST['s12c7-grade'] != "") {
										$gradeNum = toNum($_POST['s12c7-grade']);
										if (($gradeNum+1)) {
											$gpClass=$_POST['s12c7-units']*$gradeNum;
											echo number_format($gpClass,1);
											$gpArray[11][6]=$gpClass;
											$unitArray[11][6]=$_POST['s12c7-units'];
										} else {
											echo "N/a";
										}
									} else {
										echo "";
									}
								?>
							</td>
						</tr>
					</table>
					<p>&nbsp;</p>
					<table id="gpa-sum" cellpadding="0" cellspacing="0">
						<tr>
							<th>Semester Totals</th>
							<th></th>
						</tr>
						<tr>
							<td class="name">Total Units Towards GPA</td>
							<td>
								<?php
									$totalUnits=array_sum($unitArray[11]);
									$gpaUnits[11]=$totalUnits;
									echo number_format($totalUnits,1);
								?>
							</td>
						</tr>
						<tr>
							<td class="name">Total Grade Points</td>
							<td>
								<?php
									$totalGradePoints=array_sum($gpArray[11]);
									$gpaGradePoints[11]=$totalGradePoints;
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
				<input type="submit" value="Calculate" />&nbsp;<input type="button" value="Clear" onclick="location.href='gpa.php'" />
				<p>&nbsp;</p>
			</div>
			
			<div id="content">
				<div class="title">GPA Calculation</div>
				<div class="text">
					<table id="gpa-sum" cellpadding="0" cellspacing="0">
						<tr>
							<th>Semester Totals</th>
							<th></th>
						</tr>
						<tr>
							<td class="name">Total Units Towards GPA</td>
							<td>
								<?php
									$totalUnits=array_sum($gpaUnits);
									echo number_format($totalUnits,1);
								?>
							</td>
						</tr>
						<tr>
							<td class="name">Total Grade Points</td>
							<td>
								<?php
									$totalGradePoints=array_sum($gpaGradePoints);
									echo number_format($totalGradePoints,1);
								?>
							</td>
						</tr>
						<tr>
							<td class="name">Overall GPA</td>
							<td><?php
									$gpa=$totalGradePoints/$totalUnits;
									echo number_format($gpa,3);
								?>
							</td>
						</tr>
					</table>
				</div>
				<input type="submit" value="Calculate" />&nbsp;<input type="button" value="Clear" onclick="location.href='gpa.php'" />
				<p>&nbsp;</p>
			</div>
		</form>
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