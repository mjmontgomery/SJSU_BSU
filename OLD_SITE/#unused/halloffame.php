<?php
	include('includes/uagent.php');
	
	$class = "Science 2";
	$course = "Success in Science at San Jose State University";
	$short = "Success in Science";
	$page = "Hall of Fame";
	$active = "hall";
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
    <div id="head-img"> </div>
    <!-- navigation -->
    <?php include ('includes/navigation.php'); ?>
    <script language='javascript'>setActive('<?php echo $active ?>');</script> 
  </div>
</div>
<!-- end header and navigation --> 

<!-- yellow spacer -->
<div id="yellow-space"> </div>

<!-- begin content -->
<div id="wrap">
  <div id="top-arrow"> </div>
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
      <div class="title">Hall of Fame</div>
      <div class="text"> Students who have gone above and beyond to demonstrate exceptional work  have their efforts rewarded by being placed in the Hall of Fame. </div>
    </div>
    
    <div id="content">
                    <div class="title">Diversity Assignments:</div>
                    
            <div class ="text">
            	<h2>Team Boss (section 10)</h2>
            	<p>Completed by Tony Vu, Philip Phan, Cody James, & Rico Maglaya
</p>
            	<p>pt. 1 -- <a href="files/students/div_team_boss_pt1.pdf">PDF</a> </p>
            	<p>pt. 2 -- <a href="files/students/div_team_boss_pt2.pdf">PDF</a></p>
                <p>data -- <a href="files/students/div_team_boss_data.pdf">PDF</a></p>
            </div>
            
            <div class ="text">
            	<h2>5 Guys Burgers (section 13)</h2>
            	<p>Completed by Ryan Woo, Sergio Fernandez, Cesar Lara, Kyle Mopia, & D Angelo Franklin

</p>
            	<p>pt. 1 and pt. 2 -- <a href="files/students/div_5_guys_burgers_pt1_pt2.pdf">PDF</a> </p>
                <p>data -- <a href="files/students/div_5_guys_burgers_data.pdf">PDF</a></p>
            </div>
            
            <div class ="text">
            	<h2>This is Sparta (section 10)</h2>
            	<p>Completed by Perla Rivera, Oscar Jimenez, Shivam Vakil, Koki Kumagai, & Martin Le</p>
            	<p>pt. 1 -- <a href="files/students/div_this_is_sparta_pt1.pdf">PDF</a> </p>
                <p>pt. 2 -- <a href="files/students/div_this_is_sparta_pt2.pdf">PDF</a></p>
            </div>
            
            <div class ="text">
            	<h2>The Incredibles (section 12)</h2>
            	<p>Completed by Joseph Arellano, Andrew Bautista, Zita Bell, Natasha Kinai, & Viviana Tapia</p>
            	<p>pt. 1 -- <a href="files/students/div_the_incredibles_pt1.pdf">PDF</a> </p>
                <p>pt. 2 -- <a href="files/students/div_the_incredibles_pt2.pdf">PDF</a></p>
                <p>data 1 -- <a href="files/students/div_the_incredibles_data1.pdf">PDF</a></p>
                <p>data 2 -- <a href="files/students/div_the_incredibles_data2.pdf">PDF</a></p>
            </div>
            
            <div class ="text">
           	  <h2>The Spartan Girls (section 10)</h2>
            	<p>Completed by Brieana Berry, Julie Chu, Jessica Garza, Jessica Harrisson, & Lina Kam</p>
            	<p>pt. 1 -- <a href="files/students/div_the_spartan_girls_pt1.pdf">PDF</a> </p>
                <p>pt. 2 -- <a href="files/students/div_the_spartan_girls_pt2.pdf">PDF</a></p>
            </div>
            
            <div class ="text">
            	<h2>The Sci 90T Clique (section 13)</h2>
            	<p>Completed by Taylor Bershok, Annabelle Catolico, Fernando Juarez, Seema Rizvi, & Kelly Wilson</p>
            	<p>pt. 1 -- <a href="files/students/div_team_sci_90t_clique_pt1.pdf">PDF</a> </p>
                <p>pt. 2 -- <a href="files/students/div_team_sci_90t_clique_pt2.pdf">PDF</a></p>
                <p>data 1 -- <a href="files/students/div_team_sci_90t_clique_data_pt1.pdf">PDF</a></p>
                <p>data 2 -- <a href="files/students/div_team_sci_90t_clique_data_pt2.pdf">PDF</a></p>
            </div>
            
            <div class ="text">
           	  <h2>Group 2 (section 31)</h2>
            	<p>Completed by Linna Sim, Jessica Sepulveda, Shane Livingston, & Maria Garcia</p>
            	<p>pt. 1 -- <a href="files/students/div_group_2_pt1.pdf">PDF</a> </p>
                <p>pt. 2 -- <a href="files/students/div_group_2_pt2.pdf">PDF</a></p>
            </div>
            
    </div>
    <!--<div id="content">
      <div class="title">Diversity Assignments:</div>
      
      <div class ="text">
        <h2>A-Team (section 19)</h2>
        <p>Completed by Nidhi Pradhan, Ayleen Mehdizadeh, Gabriela Barocio, Michael Amireh, & Stephanie Lorelli</p>
        <p>pt. 1 -- <a href="files/students/div_a-team_pt1.pdf">PDF</a> </p>
        <p>pt. 2 -- <a href="files/students/div_a-team_pt2.pdf">PDF</a></p>
      </div>
      
    </div> -->
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
  <div id="bottom-arrow"> </div>
</div>
<!-- end content --> 

<!-- yellow spacer and footer -->
<div id="yellow-space">
  <div id="foot-wrap">
    <?php include ('includes/footer.php'); ?>
  </div>
</div>
</body>
</html>