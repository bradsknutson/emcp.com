<?php 
	$custom_title = 'ELPAC | EMC Language Proficiency Assessments by CARLA | ';
	include '../../includes/header.php';
?>
	<div id="container" class="elpac">
		<div class="header-background-image elpac-bg">
			<div id="topImg">
                <div class="tech-button-container">
                    <a class="technology-buttons elpac-login transition" href="http://emcp.onlinemlpa.com/" target="_blank" onClick="ga('send', 'event', 'Call To Action Button','click','ELPAC Login');">Login</a>
                    <img src="<?php echo $server; ?>lib/images/elpac-screen.png" alt="ELPAC" class="elpac-lp-img" />
                    <a class="elpac-button eb1 transition" href="https://store.emcp.com/elpac-cora-sample-task-french-1" onClick="ga('send', 'event', 'Call To Action Button','click','ELPAC Reading Sample');" >Sample Reading Proficiency Assessment Task</a>
                    <a class="elpac-button eb2 transition" href="https://store.emcp.com/elpac-contextualized-listening-assessment" onClick="ga('send', 'event', 'Call To Action Button','click','ELPAC Listening Sample');" >Sample Listening Proficiency Assessment Activity</a>
                    <a class="elpac-button eb3 transition" href="https://store.emcp.com/elpac-contextualized-writing-assessment-sample" onClick="ga('send', 'event', 'Call To Action Button','click','ELPAC Writing Sample');" >Sample Writing Proficiency Aasessment Task</a>
                    <a class="elpac-button eb4 transition" href="https://store.emcp.com/elpac-contextualized-speaking-assessment-sample" onClick="ga('send', 'event', 'Call To Action Button','click','ELPAC Speaking Sample');" >Sample Speaking Proficiency Assessment Activity</a>
                    <a class="elpac-button eb5 transition" href="https://store.emcp.com/contact-us/local-account-manager-locator">Contact Your Local Account Manager</a>
                </div>
            </div>
		</div>
		<div class="header-top">
			<?php include '../../includes/nav.php'; ?>
		</div>
		<div class="secondary-first">
			<div class="ninesixty">
                <div class="featured-left">
                    <h2>ACTFL-aligned online assessments</h2>
                    <p>Use ELPAC performance based, standardized assessments to ensure your students' Spanish, French, or German language proficiency.</p>
                    <p>Choose from multi-level online assessments in Reading, Listening, Writing, and Speaking that can be administered individually or as a battery.  Developed with input from language teachers and school administrators, ELCPAC assessments meet the highest standards for reliability while offering flexibility and ease in delivery.</p>
                </div>
			</div>
		</div>
        <div class="white marginbottom40">
            <div class="ninesixty">
                <div class="elpac-third">
                    <ul>
                        <li>Benchmark language skill levels at the beginning or end of the year.</li>
                        <li>Ensure consistent standards across your district.</li>
                        <li>Assess AP* readiness.</li>
                        <li>Determine if students have reached the Intermediate range on the ACTFL scale.</li>
                        <li>Assist staff in making decisions related to instructional planning and curriculum.</li>
                    </ul>
                    <p class="p-smallest">*AP is a registered trademark of the College Board, which was not involved in the production of, and does not endorse, this product.</p>
                </div>
                <div class="elpac-third">
                    <ul>
                        <li>Auto-graded Reading and Listening assessments provide immediate feedback.</li>
                        <li>Teacher-graded Speaking and Writing assessments ensure consistent evaluation.</li>
                    </ul>
                </div>
                <div class="elpac-third">
                    <p>ELPAC was developed by CARLA (Center for Advanced Research on Language Acquisition) at the University of Minnesota.  CARLA is one of the U.S. Department of Education's Title VI National Language Resource Centers, whose role is to improve the nation's capacity to teach and learn foreign languages.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
	
<?php include '../../includes/footer.php'; ?>