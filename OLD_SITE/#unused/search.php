<?php
	include('includes/uagent.php');
	
	$class = "Science 90T";
	$course = "Success as a Transfer at San Jose State University";
	$short = "Success as a Transfer";
	$page = "Search Results";
	$active = "student-resources";

	$query = explode(' ',$_POST['query']);
	$sort = array(array());
	$count = 0;
	$row = 0;
	$fp = fopen('files/resources/resources_flat-file.txt','r');
	
	while (!feof($fp)) {
		$line = fgets($fp,1024);
		$field = explode('|',$line);
		
		for ($i=0;$i<count($query);$i++) {
			if ($query[$i] == "of" || $query[$i] == "and") {
				if (preg_match("/".$query[$i]."/i",$field[1])) {
					$count=$count;
				}
			}
			
			else {
				if (preg_match("/".$query[$i]."/i",$field[1])) {
					$count=$count+2;
				}
			}
		}
		
		if ($count != 0) {
			$sort[$row][0] = $count;
			$sort[$row][1] = $field[0];
			$sort[$row][2] = $field[1];
			$sort[$row][3] = $field[2];
			$row++;
		}
		
		$count = 0;
	}
	
	fclose($fp);
	rsort($sort);
	reset($sort);
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
			<div class="title">Search Results</div>
			<div class="text">
				<?php
					$count = count($sort);

					echo '<p>Showing '.$count.' results for the search query: '.$_POST['query'].'.</p><p>&nbsp;</p>';
					
					for ($w=0;$w<=$count;$w++) {
						echo '<p><a href="'.$sort[$w][1].'">'.$sort[$w][2].'</a></p>';
					}
				?>
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