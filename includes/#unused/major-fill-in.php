<?php
	if ($_GET['major'] == "me") {
		$majorcourse[0] = "CE 99: Statics";
		$majorunits[0] = 3;
		$majorcourse[1] = "CE 112: Mechanics of Materials";
		$majorunits[1] = 3;
		$majorcourse[2] = "EE 98: Intro to Circuits";
		$majorunits[2] = 3;
		$majorcourse[3] = "ENGR 10: Intro to Engineering";
		$majorunits[3] = 3;
		$majorcourse[4] = "ENGR 100W: Engineering Reports";
		$majorunits[4] = 3;
		$majorcourse[5] = "MATE 25: Intro to Materials";
		$majorunits[5] = 3;
		$majorcourse[6] = "ME 20: Graphics Communication";
		$majorunits[6] = 2;
		$majorcourse[7] = "ME 30: Intro to Programming";
		$majorunits[7] = 2;
		$majorcourse[8] = "ME 101: Dynamics";
		$majorunits[8] = 3;
		$majorcourse[9] = "ME 111: Fluid Mechanics";
		$majorunits[9] = 3;
		$majorcourse[10] = "ME 113: Thermodynamics";
		$majorunits[10] = 4;
		$majorcourse[11] = "ME 106: Mechatronics";
		$majorunits[11] = 3;
		$majorcourse[12] = "ME 114: Heat and Mass Transfer";
		$majorunits[12] = 3;
		$majorcourse[13] = "ME 115: Heat Transfer Lab";
		$majorunits[13] = 1;
		$majorcourse[14] = "ME 120: Experimental Methods";
		$majorunits[14] = 2;
		$majorcourse[15] = "ME 130: Applied Engineering Analysis";
		$majorunits[15] = 3;
		$majorcourse[16] = "ME 147: Vibrations and Control Systems";
		$majorunits[16] = 3;
		$majorcourse[17] = "ME 154: Mechanical Engineering Design";
		$majorunits[17] = 4;
		$majorcourse[18] = "ME 195A: Senior Project I";
		$majorunits[18] = 3;
		$majorcourse[19] = "ME 195B: Senior Project II";
		$majorunits[19] = 3;
		$majorcourse[20] = "CE 113: Mechanics of Materials Lab";
		$majorunits[20] = 1;
		$majorcourse[21] = "Capstone Course";
		$majorunits[21] = 3;
		$majorcourse[22] = "Technical Elective 1";
		$majorunits[22] = $_POST['c22-units'];
		$majorcourse[23] = "Technical Elective 2";
		$majorunits[23] = $_POST['c23-units'];
		$majorcourse[24] = "Technical Elective 3";
		$majorunits[24] = $_POST['c24-units'];
		$majorcourse[25] = "Technical Elective 4";
		$majorunits[25] = $_POST['c25-units'];
		
		for ($a=26;$a<36;$a++) {
			$majorcourse[$a] = $_POST['c'.$a.'-name'];
			$majorunits[$a] = $_POST['c'.$a.'-units'];
		}
	}
?>