<?php
	$grade = array();
	
	if ($_GET['calc'] == "yes") {
		for ($c=0;$c<$global;$c++) {
			$grade[$c] = $_POST['c'.$c.'-grade'];
		}
		
		function toNum($in) {
			if ($in=="A+") { return 4.0; }
			if ($in=="A") { return 4.0; }
			if ($in=="A-") { return 3.7; }
			if ($in=="B+") { return 3.3; }
			if ($in=="B") { return 3.0; }
			if ($in=="B-") { return 2.7; }
			if ($in=="C+") { return 2.3; }
			if ($in=="C") { return 2.0; }
			if ($in=="C-") { return 1.7; }
			if ($in=="D+") { return 1.3; }
			if ($in=="D") { return 1.0; }
			if ($in=="D-") { return 0.7; }
			if ($in=="F") { return 0.0; }
			if ($in=="WU") { return 0.0; }
			if ($in=="IC") { return 0.0; }
			if ($in=="AU" || "CR" || "NC" || "I" || "RD" || "RP" || "W") { return -1; }
		}
		
	} else {
		for ($r=0;$r<$global;$r++) {
			$grade[$r]=" ";
		}
	}
?>