<?php
	include('includes/uagent.php');
	
	$class = "Science 90T";
	$course = "Success as a Transfer at San Jose State University";
	$short = "Success as a Transfer";
	$page = "Group Results";
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
			<?php
				$sortkey = $_GET['id'];
				$title = ucfirst($sortkey);
				$row=0;
			
				echo '<div class="title">'.$title.' Results</div>';

				$fp = fopen('files/resources/resources_flat-file.txt','r');

				while (!feof($fp)) {
					$line = fgets($fp,1024);
					$field[$row] = explode('|',$line);
					
					if (strtolower($field[$row][2]) == $sortkey) {
						array_unshift($field[$row],$field[$row][1]);
						array_unshift($field[$row],$sortkey);
						$row++;
					}	
				}

				fclose($fp);
				sort($field);
				reset($field);
				
				echo '<div class="text"><p>Below are the results for the Category you selected.  If you would like to select a different category, <a href="studentresources.php">click here</a>.</p><p>&nbsp;</p>';				

				for ($i=0;$i<count($field);$i++) {
					if (strtolower($field[$i][0]) == $sortkey) {
						echo '<p><a href="'.$field[$i][2].'">'.$field[$i][1].'</a></p>';
					}
				}
				
				echo '</div>';
			?>
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