<?php
	$grade = array(array());
	
	if ($_GET['calc'] == "yes") {
		$grade[0] = array($_POST['s1c1-grade'],$_POST['s1c2-grade'],$_POST['s1c3-grade'],$_POST['s1c4-grade'],$_POST['s1c5-grade'],$_POST['s1c6-grade'],$_POST['s1c7-grade']);
		$grade[1] = array($_POST['s2c1-grade'],$_POST['s2c2-grade'],$_POST['s2c3-grade'],$_POST['s2c4-grade'],$_POST['s2c5-grade'],$_POST['s2c6-grade'],$_POST['s2c7-grade']);
		$grade[2] = array($_POST['s3c1-grade'],$_POST['s3c2-grade'],$_POST['s3c3-grade'],$_POST['s3c4-grade'],$_POST['s3c5-grade'],$_POST['s3c6-grade'],$_POST['s3c7-grade']);
		$grade[3] = array($_POST['s4c1-grade'],$_POST['s4c2-grade'],$_POST['s4c3-grade'],$_POST['s4c4-grade'],$_POST['s4c5-grade'],$_POST['s4c6-grade'],$_POST['s4c7-grade']);
		$grade[4] = array($_POST['s5c1-grade'],$_POST['s5c2-grade'],$_POST['s5c3-grade'],$_POST['s5c4-grade'],$_POST['s5c5-grade'],$_POST['s5c6-grade'],$_POST['s5c7-grade']);
		$grade[5] = array($_POST['s6c1-grade'],$_POST['s6c2-grade'],$_POST['s6c3-grade'],$_POST['s6c4-grade'],$_POST['s6c5-grade'],$_POST['s6c6-grade'],$_POST['s6c7-grade']);
		$grade[6] = array($_POST['s7c1-grade'],$_POST['s7c2-grade'],$_POST['s7c3-grade'],$_POST['s7c4-grade'],$_POST['s7c5-grade'],$_POST['s7c6-grade'],$_POST['s7c7-grade']);
		$grade[7] = array($_POST['s8c1-grade'],$_POST['s8c2-grade'],$_POST['s8c3-grade'],$_POST['s8c4-grade'],$_POST['s8c5-grade'],$_POST['s8c6-grade'],$_POST['s8c7-grade']);
		$grade[8] = array($_POST['s9c1-grade'],$_POST['s9c2-grade'],$_POST['s9c3-grade'],$_POST['s9c4-grade'],$_POST['s9c5-grade'],$_POST['s9c6-grade'],$_POST['s9c7-grade']);
		$grade[9] = array($_POST['s10c1-grade'],$_POST['s10c2-grade'],$_POST['s10c3-grade'],$_POST['s10c4-grade'],$_POST['s10c5-grade'],$_POST['s10c6-grade'],$_POST['s10c7-grade']);
		$grade[10] = array($_POST['s11c1-grade'],$_POST['s11c2-grade'],$_POST['s11c3-grade'],$_POST['s11c4-grade'],$_POST['s11c5-grade'],$_POST['s11c6-grade'],$_POST['s11c7-grade']);
		$grade[11] = array($_POST['s12c1-grade'],$_POST['s12c2-grade'],$_POST['s12c3-grade'],$_POST['s12c4-grade'],$_POST['s12c5-grade'],$_POST['s12c6-grade'],$_POST['s12c7-grade']);
		
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
		for ($r=0;$r<12;$r++) {
			for ($c=0;$c<7;$c++) {
				$grade[$r][$c]=" ";
			}
		}
	}
?>