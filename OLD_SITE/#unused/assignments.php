<?php
	include('includes/uagent.php');
	
	$class = "Science 90";
	$course = "Success as a Transfer at San Jose State University";
	$short = "Success as a Transfer";
	$page = "Assignments";
	$active = "assignments";
?>

<!DOCTYPE html>

<!--
*	Science 90: Success as a Transfer at San Jose State University
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
			<div class="title">Science 90 Assignments</div>
			<div class="text">
				<table id="assignments" cellpadding="0" cellspacing="0">
					<tr>
						<th class="assignment">Assignment</th>
						<th class="page">Reader Page</th>
						<th class="download">Download</th>
					</tr>
                    <tr>
						<td class="assignment"><p>Intro Speech</p></td>
						<td class="page">-</td>
						<td class="download"><a href="files/downloads/first_speech.docx">.docx</a> | <a href="files/downloads/first_speech.pdf">PDF</a></td>
					</tr>
                    <tr>
						<td class="assignment"><p>Time Management</td>
						<td class="page">-</td>
						<td class="download"><a href="files/downloads/time_management.xls">.xls</a> | <a href="video/time.php">Video Link</a></td>
					</tr>
                     <tr>
						<td class="assignment">Annotated Bib #1</td>
						<td class="page">-</td>
						<td class="download"><a href="files/downloads/annotated_bib_f13.docx">.docx</a> | <a href="files/downloads/annotated_bib_f13.pdf">PDF</a> (<a href="#dl">additional files</a>)</td>
					</tr>
					<tr>
						<td class="assignment">Goals and Objectives</td>
						<td class="page">-</td>
						<td class="download"><a href="files/downloads/goals_and_objectives.ppt">.ppt</a> | <a href="files/downloads/goals_and_objectives.pdf">PDF</a></td>
					</tr>
                    <tr>
						<td class="assignment">Diversity Assignment</td>
                        <td class="page">-</td>
                        <td class="download"><a href="files/downloads/diversity_assignment_instructions.pptx">.pptx</a> | <a href="files/downloads/diversity_assignment_instructions.pdf">PDF</a> (<a href="#dl">additional files</a>)</td>
					</tr>
					<tr>
						<td class="assignment">Faculty Services and Office Hours</td>
						<td class="page">-</td>
						<td class="download"><a href="files/downloads/fso_worksheet.xlsx">.xlsx</a> | <a href="files/downloads/fso_worksheet.pdf">PDF</a></td>
					</tr>
					<tr>
						<td class="assignment">Grade Check 1</td>
						<td class="page">-</td>
						<td class="download"><a href="files/downloads/grade_check.xls">.xls</a> | <a href="files/downloads/grade_check.pdf">PDF</a></td>
					</tr>
                    <tr>
						<td class="assignment">Midterm 1</td>
						<td class="page">-</td>
						<td class="download">-</td>
					</tr>
                     <tr>
						<td class="assignment">Annotated Bib #2</td>
						<td class="page">-</td>
						<td class="download"><a href="files/downloads/annotated_bib_2_f13.docx">.docx</a> | <a href="files/downloads/annotated_bib_2_f13.pdf">PDF</a> (<a href="#dl">additional files</a>)</td>
					</tr>
                    <tr>
						<td class="assignment">Campus Events (4 events - 30 each)</td>
						<td class="page">-</td>
						<td class="download">-</td>
					</tr>
                    <tr>
						<td class="assignment">Oral Presentations</td>
						<td class="page">-</td>
						<td class="download"><a href="files/downloads/oral_assignment.docx">.doc</a> | <a href="files/downloads/oral_assignment.pdf">PDF</a></td>
					</tr>
					<tr>
						<td class="assignment">Scavenger Hunt</td>
						<td class="page">-</td>
						<td class="download"><a href="files/downloads/scavenger_hunt.doc">.doc</a> | <a href="files/downloads/scavenger_hunt.pdf">PDF</a></td>
					</tr>
					<tr>
                        <td class="assignment"><p>Pathways Assignment</p>
                        <p>(a) Pathways Planner</p>
                        <p>(b) Pathways Supplemental Sheet</p></td>
                        <td class="page">-</td>
                        <td class="download"><p><a href="files/downloads/pathways_assignment.docx">.docx</a> | <a href="files/downloads/pathways_assignment.pdf">PDF</a></p>
                        <p>(a) - <a href="files/downloads/pathways_planner.xlsx">.xlsx</a> | <a href="files/downloads/pathways_planner.pdf">PDF</a></p>
                        <p>(b) - <a href="files/downloads/pathways_supplemental.xlsx">.xlsx</a> | <a href="files/downloads/pathways_supplemental.pdf">PDF</a></p></td>
					</tr>
                    <tr>
						<td class="assignment">Grade Check 2</td>
						<td class="page">-</td>
						<td class="download"><a href="files/downloads/grade_check.xls">.xls</a> | <a href="files/downloads/grade_check.pdf">PDF</a></td>
					</tr>
					<tr>
						<td class="assignment">Midterm 2</td>
						<td class="page">-</td>
						<td class="download">-</td>
					</tr>
					<tr>
						<td class="assignment">Final Exam</td>
						<td class="page">-</td>
						<td class="download">-</td>
					</tr>
				</table>
			</div>
		</div>
		<div id="content">
			<div id="dl" class="title">Additional Downloads</div>
			<?php include ('includes/additional-downloads.php'); ?>
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
		<div id="footer"><?php echo $short; ?> | San Jose State University &copy; 2010-2013 | <a href="mailto:mason.itkin@sjsu.edu">Contact Webmaster</a></div>
	</div>
</div>

</body>

</html>