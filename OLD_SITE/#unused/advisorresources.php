<?php
	include('includes/uagent.php');
	
	$class = "Science 90T";
	$course = "Success as a Transfer at San Jose State University";
	$short = "Success as a Transfer";
	$page = "Advisor Resources";
	$active = "advisor-resources";
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
			<div id="toc" class="title">Complete List of Advisor Resources</div>
			<div class="text">
				<p>This Resource Center is dedicated to Academic Advisors through out California and as such, contains only information pertinent to advisors. For all other topics, please refer to the SJSU Student Resource Center which can be found <a href="studentresources.php">here</a>.</p>
				<ul>
					<li>> <a href="#gpa">GPA Calculators</a></li>
					<li>> <a href="#geplan">General Education Checklist and Pathway Planner</a></li>
					<li>> <a href="#ac">Academic Calendar</a></li>
					<li>> <a href="#ar">Admission Requirements and Application</a></li>
					<li>> <a href="#adc">Advising Center</a></li>
					<li>> <a href="#assist">ASSIST</a></li>
					<li>> <a href="#cs">Course Sequencing</a></li>
					<li>> <a href="#ias">Impaction at San Jose State University</a></li>
					<li>> <a href="#ifus">Information for Undocumented Students</a></li>
					<li>> <a href="#isi">International Student Information</a></li>
					<li>> <a href="#pfug">Programs for Underrepresented Groups</a></li>
					<li>> <a href="#tip">TIP Information</a></li>
				<ul>
			</div>
		</div>
		<div id="content">
			<div id="gpa" class="title">GPA Calculators</div>
			<div class="text">
				<ul>
					<li>> <a href="gpa.php">General GPA Calculator</a></li>
					<li>> <a href="major_gpa.php">Major GPA Calculator</a></li>
					<li class="back-to-top"><a href="#toc">Back to top</a></li>
				</ul>
			</div>
		</div>
		<div id="content">
			<div id="geplan" class="title">General Education Checklist and Pathway Planner</div>
			<div class="text">
				<ul>
					<li>> Assignment <a href="files/downloads/pathways_assignment.docx">.docx</a>| <a href="files/downloads/pathways_assignment.pdf">PDF</a></li>
					<li>> Planner <a href="files/downloads/pathways_planner.xlsx">.xlsx</a> | <a href="files/downloads/pathways_planner.pdf">PDF</a></li>
					<li>> Supplemental Sheet <a href="files/downloads/pathways_supplemental.xlsx">.xlsx</a> | <a href="files/downloads/pathways_supplemental.pdf">PDF</a></li>
                    <li>> General Education Worksheet <a href="files/downloads/ge_worksheet.xlsx">.xlxs</a> | <a href="files/downloads/ge_worksheet.pdf">PDF</a></li>
					<li>> General Education Checklist: <a href="files/downloads/ge_checklist.xls">.xls</a> | <a href="files/downloads/ge_checklist.pdf">PDF</a></li>
					<li class="back-to-top"><a href="#toc">Back to top</a></li>
				</ul>
			</div>
		</div>
		<div id="content">
			<div id="ac" class="title">Academic Calendar</div>
			<div class="text">
				<ul>
					<li>> <a href="http://www.sjsu.edu/academic_programs/calendars/academic_calendar/">Academic Calendar</a></li>
					<li class="back-to-top"><a href="#toc">Back to top</a></li>
				</ul>
			</div>
		</div>
		<div id="content">
			<div id="ar" class="title">Admission Requirements and Application</div>
			<div class="text">
				<ul>
					<li>> <a href="http://www.sjsu.edu/visit/admissionrequirements/">Admission Requirements</a></li>
					<li>> <a href="http://www.csumentor.edu/">Admissions Application</a></li>
					<li class="back-to-top"><a href="#toc">Back to top</a></li>
				</ul>
			</div>
		</div>
		<div id="content">
			<div id="adc" class="title">Advising Center</div>
			<div class="text">
				<ul>
					<li>> <a href="http://www.cob.sjsu.edu/bsac/">Advising - College of Business</a></li>
					<li>> <a href="http://www.engr.sjsu.edu/students/advising/">Advising - College of Engineering</a></li>
					<li>> <a href="http://www.science.sjsu.edu/cosac/">Advising - College of Science</a></li>
					<li>> <a href="http://www.sjsu.edu/sac/">Advising - General Education</a></li>
					<li>> <a href="http://www.sjsu.edu/advising">Advising HUB</a></li>
					<li>> <a href="http://www.sjsu.edu/ugs/students/advising/">Academic Advising Center</a></li>
					<li>> <a href="http://www.sjsu.edu/visit/">Admissions Counseling</a></li>
					<li class="back-to-top"><a href="#toc">Back to top</a></li>
				</ul>
			</div>
		</div>
		<div id="content">
			<div id="assist" class="title">ASSIST</div>
			<div class="text">
				<ul>
					<li>> <a href="http://transfer.sjsu.edu/">Articulation Office and web page</a></li>
					<li>> <a href="http://www.assist.org/web-assist/welcome.html">ASSIST(Articulation System Stimulating Interinstitutional Student Transfer)</a></li>
					<li class="back-to-top"><a href="#toc">Back to top</a></li>
				</ul>
			</div>
		</div>
		<div id="content">
			<div id="cs" class="title">Course Sequencing</div>
			<div class="text">
				<ul>
					<li>> <a href="http://transfer.sjsu.edu/">Articulation Office and web page</a></li>
					<li>> <a href="http://www.csumentor.edu/">CSU Mentor</a></li>
					<li>> <a href="http://www.csumentor.edu/">CSU Admissions Application</a></li>
					<li>> <a href="https://sjsuone.sjsu.edu/sjsuphonebook/Offices.aspx">Faculty, Staff & Department Directory</a></li>
					<li>> <a href="http://www.sjsu.edu/faso/">FASO (Financial Aid and Scholarship Office)</a></li>
					<li>> <a href="http://www.sjsu.edu/faso/typesofaid/grants/">Grant money and paying for college</a></li>
					<li class="back-to-top"><a href="#toc">Back to top</a></li>
				</ul>
			</div>
		</div>
		<div id="content">
			<div id="ias" class="title">Impaction at San Jose State University</div>
			<div class="text">
				<ul>
					<li>> <a href="http://info.sjsu.edu/web-dbgen/narr/static/admission/impacted-degrees.html">Impaction rules for majors</a></li>
					<li>> <a href="http://info.sjsu.edu/web-dbgen/narr/admission/rec-1148.html">Impaction rules defined</a></li>
					<li>> <a href="http://info.sjsu.edu/web-dbgen/narr/admission/rec-1150.html">FAQ's regarding Impaction</a></li>
					<li>> <a href="http://info.sjsu.edu/web-dbgen/narr/admission/rec-1155.html">FAQ's regarding Impaction specific to CC transfers</a></li>
					<li class="back-to-top"><a href="#toc">Back to top</a></li>
				</ul>
			</div>
		</div>
		<div id="content">
			<div id="ifus" class="title">Information for Undocumented Students</div>
			<div class="text">
				<ul>
					<li>> <a href="http://www.sjsu.edu/registrar/services/students/ab540.html">AB 540 (Definitions and Explanations)</a></li>
					<li>> <a href="http://www.sjsu.edu/registrar/services/students/ab540.html">Undocumented Students</a></li>
					<li class="back-to-top"><a href="#toc">Back to top</a></li>
				</ul>
			</div>
		</div>
		<div id="content">
			<div id="isi" class="title">International Student Information</div>
			<div class="text">
				<ul>
					<li>> <a href="http://www.sjsu.edu/ihouse/index.htm">International House (Multicultural Student Residence)</a></li>
					<li>> <a href="http://www.sjsu.edu/depts/ipss/">International Programs & Services</a></li>
					<li>> <a href="http://info.sjsu.edu/static/admission/international.html">International Students (Prospective)</a></li>
					<li>> <a href="http://info.sjsu.edu/web-dbgen/narr/admission/rec-1773.html">International Student Cost/Fees</a></li>
					<li>> <a href="http://info.sjsu.edu/web-dbgen/narr/static/catalog/ib.html">IB (International Baccalaureate) What counts for what...</a></li>
					<li>> <a href="https://testing.sjsu.edu/twst.html">WST (Writing Skills Test) Information</a></li>
					<li>> <a href="http://info.sjsu.edu/web-dbgen/catalog/degrees/all-degrees.html">Major and Degrees</a></li>
					<li class="back-to-top"><a href="#toc">Back to top</a></li>
				</ul>
			</div>
		</div>
		<div id="content">
			<div id="pfug" class="title">Programs for Underrepresented Groups</div>
			<div class="text">
				<ul>
					<li>> <a href="http://www.science.sjsu.edu/amp/Default.htm">AMP (Alliance for Minority Participation)</a></li>
					<li>> <a href="http://aspire.sjsu.edu/">ASPIRE</a></li>
					<li>> <a href="http://www.drc.sjsu.edu/">DRC (Disability Resource Center)</a></li>
					<li>> <a href="http://www.sjsu.edu/eop/">EOP (Education Opportunity Program (EOP)</a></li>
					<li>> <a href="http://mcnair.sjsu.edu/">McNair Scholars Program</a></li>
					<li>> <a href="http://sa.sjsu.edu/mosaic/index.jsp">MOSAIC</a></li>
					<li>> <a href="http://www.science.sjsu.edu/transfer/">First Year Experience courses and programs for Transfers</a></li>
					<li>> <a href="http://www.csumentor.edu/">Student Housing</a></li>
					<li>> <a href="http://housing.sjsu.edu/">Housing</a></li>
					<li>> <a href="http://housing.sjsu.edu/pros_pricing.html">Housing Rates/Pricing</a></li>
					<li class="back-to-top"><a href="#toc">Back to top</a></li>
				</ul>
			</div>
		</div>
		<div id="content">
			<div id="tip" class="title">TIP Information</div>
			<div class="text">
				<ul>
					<li>> <a href="http://www.sjsu.edu/aars/tip">TIP (Transfer Information Program) Information</a></li>
					<li>> <a href="http://info.sjsu.edu/web-dbgen/narr/static/soc-fall/sjstudies.html">Advanced GE (General Education - SJSU Studies requirements)</a></li>
					<li>> <a href="http://info.sjsu.edu/web-dbgen/narr/static/soc-spring/sjstudies.html">Areas R, S, V, and Z</a></li>
					<li class="back-to-top"><a href="#toc">Back to top</a></li>
				</ul>
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