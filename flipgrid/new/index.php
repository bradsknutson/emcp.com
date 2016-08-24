<?php
    $server = 'http://info.flipgrid.com/';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Flipgrid.</title>
  <meta name="description" content="Boost collaboration, feedback and assessment in classrooms, corporations, and conferences around the world.">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" href="<?php echo $server; ?>assets/images/favicon.ico">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@flipgrid">
  <meta name="twitter:creator" content="@flipgrid">
  <meta name="twitter:title" content="A place to share thoughts, ideas, and most of all.. your voice.">
  <meta name="twitter:description" content="Boost collaboration, feedback and assessment in classrooms, corporations, and conferences around the world.">
  <meta name="twitter:image" content="http://static.flipgrid.com/allDevicesTweet.jpg">
  <meta name="twitter:app:country" content="US" />
  <meta name="twitter:app:name:iphone" content="flipgrid" />
  <meta name="twitter:app:id:iphone" content="951118825" />
  <meta name="twitter:app:url:iphone" content="://flipgrid" />
  <meta name="twitter:app:name:ipad" content="flipgrid" />
  <meta name="twitter:app:id:ipad" content="756972930" />
  <meta name="twitter:app:url:ipad" content="://flipgrid" />

  <!-- Open Graph -->
  <meta property="og:url" content="http://flipgrid.com/info/">
  <meta property="og:title" content="Flipgrid.">
  <meta property="og:image" content="http://static.flipgrid.com/allDevicesTweet.jpg">
  <meta property="og:description" content="Boost collaboration, feedback and assessment in classrooms, corporations, and conferences around the world.">
  <meta property="og:site_name" content="Flipgrid.">

  <!-- App Links -->
  <meta property="al:iphone:app_store_id" content="756972930" />
  <meta property="al:iphone:app_name" content="Flipgrid." />
  <meta property="al:ipad:app_store_id" content="951118825" />
  <meta property="al:ipad:app_name" content="Flipgrid." />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

  <link rel="stylesheet" href="<?php echo $server; ?>css/slick.css" /> 
  <link rel="stylesheet" href="<?php echo $server; ?>css/main.css" /> 

</head>
<body>

  <nav>
    <div class="container">
      <a class="logo pull-left" href="http://www.emcp.com/flipgrid/new/">
        <img class="img-fluid" src="<?php echo $server; ?>assets/images/topLogo@2x.png" alt="Flipgrid Logo" />
      </a>

      <div class="gridCode pull-left hide-for-mobile">
        <input id="hashinput" class="hashfield pull-left" type="text" placeholder="Enter a grid code" />
        <button id="goBtn" class="btn btn-primary btn-small btn-fluid hide pull-left" type="button">
          Go!
        </button>
      </div>

      <div id="mobile-nav">
        <div class="mobile-nav-container">

          <ul class="list-unstyled list-horizontal main-links">
            <li class="text-link btn-outlined">
              <a class="" href="http://pages.exacttarget.com/page.aspx?QS=38dfbe491fab00ea398ea25714e1466c8e13b4f958024c797f6d8cafa78ef47c" target="_blank">Free Trial</a>
            </li>
            <li class="text-link">
              <a href="http://flipgrid.com/manage">Admin Log in</a>
            </li>
            <li class="nav-icon">
              <a href="https://itunes.apple.com/us/app/flipgrid./id756972930?mt=8&ign-mpt=uo%3D4" target="_blank">
                <img src="<?php echo $server; ?>assets/images/apple@2x.png" alt="Apple Store Logo" />
              </a>
            </li>
            <li class="nav-icon">
              <a href="https://play.google.com/store/apps/details?id=com.vidku.app.flipgrid" target="_blank">
                <img src="<?php echo $server; ?>assets/images/google@2x.png" alt="Google Store Logo" />
              </a>
            </li>
            <li class="nav-icon">
              <a href="https://twitter.com/flipgrid" target="_blank">
                <img src="<?php echo $server; ?>assets/images/tweet@2x.png" alt="Twitter Logo" />
              </a>
            </li>
          </ul>

        </div>
      </div>

      <button id="toggleMobileNav" class="c-hamburger c-hamburger--htx close hide-for-desktop" type="button">
        <span>Toggle Menu</span>
      </button>

    </div>
  </nav>

  <!-- top -->
  <div class="top">
    <div class="top-feature text-center">

      <div class="container">
        <h1 class="container mb025 mt05">Video for <strong>Active Learning</strong>.</h1>
        <p class="container white mt0">Flipgrid is simple yet powerful. Educators create grids with topics and students respond with recorded videos to discuss, reflect, and share via webcam, tablet, or mobile device.</p>

        <a class="btn btn-primary btn-fluid mt1 mb205" href="http://pages.exacttarget.com/page.aspx?QS=38dfbe491fab00ea398ea25714e1466c8e13b4f958024c797f6d8cafa78ef47c" target="_blank">
          Create your free grid today
        </a>
      </div>
      <img class="top-feature-image" src="assets/images/allDevices.png" alt="Flipgrid App showcase">

    </div>
  </div>

  <!-- active + social slice -->
  <div class="slice1">
   <div class="container text-center">
      <h2 class="mb05 mt05"><strong>Active</strong> + <strong>Social</strong> learning. Better together.</h2>
      <p class="mt0">Don’t simply watch video. Participate and collaborate with video in an active, social community of your peers. Flipgrid gives your students and colleagues a powerful voice.</p>

      <a class="btn btn-primary btn-fluid mt1 mb1" href="http://pages.exacttarget.com/page.aspx?QS=38dfbe491fab00ea398ea25714e1466c8e13b4f958024c797f6d8cafa78ef47c" target="_blank">
        Try Flipgrid today!
      </a>
    </div>
  </div>

   <!-- Simple + Powerful slice -->
  <div class="slice-steps">
   <div class="container text-center">
      <h2 class="mb05 mt05">Simple <strong>integration</strong>. Powerful <strong>communities</strong>.</h2>
      <p class="mt0">Community is built at the point where our stories intersect. To build your Flipgrid community, we listened to your amazing ideas and streamlined the setup. Short and sweet!</p>
      <p class="stepimgs">
      <img src="<?php echo $server; ?>assets/images/steps-1@2x.jpg" width="600" height="auto" alt="Step 1 and 2" />
      <img src="<?php echo $server; ?>assets/images/steps-2@2x.jpg" width="495" height="auto" alt="Step 3 and 4" />
      </p>
    </div>
  </div>

  <!-- reviews -->
  <div class="slice2">
    <div class="container">
      <div class="text-center">
        <img class="mt1 mb1" src="<?php echo $server; ?>assets/images/heart@2x.png" width="71" height="61">
      </div>

      <!-- slider -->
      <div class="slickquotes">
        <div>
          <p class="text-center white mb2">
            "Flipgrid us a service that is not to be missed. The App and service are simple to use for both students and teachers, and gives teachers a new tool for accurate real time assessment. Flipgrid has also allowed me to assess my students’ use of my ‘flipped classroom' in real time."
          </p>
          <div class="reviewWrap mt2">
            <div class="info-block">
              <h3 class="mb0">Richard Perry</h3>
              <p class="smallest mt0">
                ELA Teacher, Apple Distinguished Educator<br>
                Merrick, NY
              </p>
            </div>
          </div>
        </div>
        <!-- slide 2 -->
        <div>
          <p class="text-center white mb2">
            "Flipgrid gives my students a way to connect their voices across the entire school and share their stories with the world. Students love creating these short videos via the easy-to-use interface, and I love the window that the videos give me into each student's thoughts."
          </p>  
          <div class="reviewWrap mt2">
            <div class="info-block">
              <h3 class="mb0">Andy Plemmons</h3>
              <p class="smallest mt0">
                School Librarian/Media Specialist<br>
                Athens, GA
              </p>
            </div>
          </div>
        </div>
        <!-- slide 3 -->
        <div>
          <p class="text-center white mb2">
            "Flipgrid has given my students a place to come together and share their thoughts, ideas, and most of all… their voices. They love how they can capture themselves within the videos boxes and see their friends as well. It has also given our school community a place to collaborate and connect with various projects."
          </p>  
          <div class="reviewWrap mt2">
            <div class="info-block">
              <h3 class="mb0">Shannon McClintock Miller</h3>
              <p class="smallest mt0">
                Van Meter Community School District Teacher <br>
                Librarian, Iowa
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- end slider -->
    </div>
  </div>  

  <!-- fg community -->
  <!-- <div class="fgstory">
   <div class="container text-center">
      <h2 class="mb05">Try Flipgrid and <strong>share your story</strong> today!</h2>
      <p class="mt0">Join our Flipgrid community of teacher, student, and organization stories from around the world. Also, we are giving away a <strong>free one-year subscription</strong> to a new participant every month!</p>
      <a class="popup-modal btn btn-primary btn-fluid mt2 mb05" href="https://pilot.flipgrid.com/v4" target="_blank">
        Check out the Flipgrid Community grid
      </a>
      <p><img class="mt2 mb1" src="assets/images/fgcommunity@2x.png" width="944" height="auto"></p>
    </div>
  </div> -->

  <!-- features -->
  <div class="slice3">
    <div class="container">

      <div class="col-md-6">
        <div class="info-block fi1">
          <h3 class="mb0">You control privacy</h3>
          <p class="smaller mt05">
            Your grids can be public or locked. You choose whether the conversation goes outside your classroom.
          </p>
        </div>
        <div class="info-block fi2">
          <h3 class="mb0">Custom view analytics</h3>
          <p class="smaller mt05">
            Video analytics allow you to track video views to assess learner engagement.
          </p>
        </div>
        <div class="info-block fi3">
          <h3 class="mb0">Fast, simple and seamless</h3>
          <p class="smaller mt05">
            Flipgrid is built to be lightning fast, so your students can participate on any bandwidth.
          </p>
        </div>
      </div>

      <div class="col-md-6">
        <div class="info-block fi4">
          <h3 class="mb0">Optimized for mobile</h3>
          <p class="smaller mt05">
            Your community of learners can view and record their videos anywhere at anytime.
          </p>
        </div>
        <div class="info-block fi5">
          <h3 class="mb0">High quality video</h3>
          <p class="smaller mt05">
            Flipgrid provides high quality videos for the best viewing experience.
          </p>
        </div>
        <div class="info-block fi6">
          <h3 class="mb0">Easy to embed</h3>
          <p class="smaller mt05">
            Flipgrid grids, topics and videos can be embedded in any LMS, website or social post.
          </p>
        </div>
      </div>

    </div>
  </div>  

  <!-- pricing -->
  <div class="slice4">
    <div class="container">
      <div class="text-center">
        <h2 class="mb05">
          Simple educator pricing. <strong>Unlimited</strong> student voice.
        </h2>
      </div>

      <p class="text-center">
        We are educators. We love student voice. So, we would never limit it. As a K12 or University educator, you pay a yearly subscription fee. From there, empower your students and share with the world!
      </p>

      <p class="text-center blue mt0 mb0 hide-for-mobile">
        Each educator pays $<span class="largest">65</span> / one-year subscription
      </p>

      <p class="text-center">
        (Pricing is for k12 and University use only. For organization pricing, please <a class="bold" href="mailto:hello@flipgrid.com">contact us</a>)
      </p>

      <div class="mt3 mb2 hide-for-desktop">
        <p class="text-center blue mb0 hide-for-desktop">Each educator pays</p>
        <p class="text-center blue mt0 mb0 hide-for-desktop">$<span class="largest">65</span> /</p>
        <p class="text-center blue mt0 mb0 hide-for-desktop">one-year subscription</p>
      </div>

      <div class="row">
        <div class="col-xs-6 text-right">
          <p class="smaller"># of grids</p>
        </div>
        <div class="col-xs-6">
          <p class="smaller blue">Unlimited</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6 text-right">
          <p class="smaller"># of questions per grid</p>
        </div>
        <div class="col-xs-6">
          <p class="smaller blue">Ask away to your heart’s content</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6 text-right">
          <p class="smaller"># of responses per question</p>
        </div>
        <div class="col-xs-6">
          <p class="smaller blue">The sky is the limit</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6 text-right">
          <p class="smaller"># of students</p>
        </div>
        <div class="col-xs-6">
          <p class="smaller blue">All of your amazing students</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6 text-right">
          <p class="smaller">video responses</p>
        </div>
        <div class="col-xs-6">
          <p class="smaller blue">As many as you receive</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6 text-right">
          <p class="smaller">video responses-to-responses</p>
        </div>
        <div class="col-xs-6">
          <p class="smaller blue">Let your students talk away</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6 text-right">
          <p class="smaller">Flipgrid video cloud storage</p>
        </div>
        <div class="col-xs-6">
          <p class="smaller blue">Don’t worry about it</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6 text-right">
          <p class="smaller">active learner engagement</p>
        </div>
        <div class="col-xs-6">
          <p class="smaller blue">Maximized</p>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-6 text-right">
          <p class="smaller">student iPhone, iPad, Android apps</p>
        </div>
        <div class="col-xs-6 mb2">
          <p class="smaller blue">FREE</p>
        </div>
      </div>
      <div class="container text-center">
        <a class="btn btn-primary btn-fluid mt1 mb1" href="http://pages.exacttarget.com/page.aspx?QS=38dfbe491fab00ea398ea25714e1466c8e13b4f958024c797f6d8cafa78ef47c" target="_blank">
          Get started now! It’s easy!
        </a>
      </div>
    </div>
  </div>
  <!-- integrations -->
 <!--  <div class="integrations">
   <div class="container text-center">
      <h2 class="mb05 mt05"><strong>Integration is critical.</strong>  We’ve got you covered.</h2>
      <p class="mt0">To help you get started and think about a powerful integration in your K12 and HigherEd classrooms, we worked with award-winning professors to create a series of standards-driven integration docs.</p>
      <p><img src="assets/images/integrations@2x.jpg" width="514" height="auto"></p>
      <a class="popup-modal btn btn-primary btn-fluid mt0 mb2" href="https://info.flipgrid.com/support" target="_blank">
        Visit the Flipgrid Help Center
      </a>
    </div>
  </div> -->
  <!-- companies -->
  <div class="slice5">
    <div class="container mt3">
      <p class="text-center mb">
        Flipgrid is used in over <strong>20,000</strong> classrooms and organizations across <strong>115</strong> countries.
      </p>
      <div class="slickorg hide-for-mobile">
        <!-- 1 -->
         <div class="text-center mb2 row">
            <img class="org1" src="<?php echo $server; ?>assets/images/logos/ORG_01_@2x.jpg">
            <img class="org2" src="<?php echo $server; ?>assets/images/logos/ORG_02_@2x.jpg">
            <img class="org3" src="<?php echo $server; ?>assets/images/logos/ORG_03_@2x.jpg">        
            <img class="org4" src="<?php echo $server; ?>assets/images/logos/ORG_04_@2x.jpg">
            <img class="org5" src="<?php echo $server; ?>assets/images/logos/ORG_05_@2x.jpg">
            <img class="org6" src="<?php echo $server; ?>assets/images/logos/ORG_06_@2x.jpg">
        </div>
        <!-- 2 -->
         <div class="text-center mb2 row">
            <img class="org7" src="<?php echo $server; ?>assets/images/logos/ORG_07_@2x.jpg">
            <img class="org8" src="<?php echo $server; ?>assets/images/logos/ORG_08_@2x.jpg">
            <img class="org9" src="<?php echo $server; ?>assets/images/logos/ORG_09_@2x.jpg">
            <img class="org10" src="<?php echo $server; ?>assets/images/logos/ORG_10_@2x.jpg">        
            <img class="org11" src="<?php echo $server; ?>assets/images/logos/ORG_11_@2x.jpg">
            <img class="org12" src="<?php echo $server; ?>assets/images/logos/ORG_12_@2x.jpg">
        </div>
        <!-- 3 -->
         <div class="text-center mb2 row">
            <img class="org13" src="<?php echo $server; ?>assets/images/logos/ORG_13_@2x.jpg">
            <img class="org14" src="<?php echo $server; ?>assets/images/logos/ORG_14_@2x.jpg">
            <img class="org15" src="<?php echo $server; ?>assets/images/logos/ORG_15_@2x.jpg">
            <img class="org16" src="<?php echo $server; ?>assets/images/logos/ORG_16_@2x.jpg">        
            <img class="org17" src="<?php echo $server; ?>assets/images/logos/ORG_17_@2x.jpg">
            <img class="org18" src="<?php echo $server; ?>assets/images/logos/ORG_18_@2x.jpg">
        </div>
        <!-- 4 -->
         <div class="text-center mb2 row">
            <img class="org19" src="<?php echo $server; ?>assets/images/logos/ORG_19_@2x.jpg">
            <img class="org20" src="<?php echo $server; ?>assets/images/logos/ORG_20_@2x.jpg">
            <img class="org21" src="<?php echo $server; ?>assets/images/logos/ORG_21_@2x.jpg">
            <img class="org22" src="<?php echo $server; ?>assets/images/logos/ORG_22_@2x.jpg">        
            <img class="org23" src="<?php echo $server; ?>assets/images/logos/ORG_23_@2x.jpg">
            <img class="org24" src="<?php echo $server; ?>assets/images/logos/ORG_24_@2x.jpg">
        </div>
      </div>

        <div class="slickorg hide-for-desktop">
        <!-- 1 -->
          <div class="text-center mb2 row">
              <div class="col-xs-12">
                <img class="org1" src="<?php echo $server; ?>assets/images/logos/ORG_01_@2x.jpg">
                <img class="org2" src="<?php echo $server; ?>assets/images/logos/ORG_02_@2x.jpg">
              </div>
              <div class="col-xs-12">
                <img class="org3" src="<?php echo $server; ?>assets/images/logos/ORG_03_@2x.jpg">
                <img class="org5" src="<?php echo $server; ?>assets/images/logos/ORG_05_@2x.jpg">
              </div>
              <div class="col-xs-12">
                <img class="org4" src="<?php echo $server; ?>assets/images/logos/ORG_04_@2x.jpg">
                <img class="org6" src="<?php echo $server; ?>assets/images/logos/ORG_06_@2x.jpg">
              </div>
          </div>
          <!-- 2 -->
          <div class="text-center mb2 row">
              <div class="col-xs-12">
                <img class="org7" src="<?php echo $server; ?>assets/images/logos/ORG_07_@2x.jpg">
                <img class="org12" src="<?php echo $server; ?>assets/images/logos/ORG_12_@2x.jpg">
              </div>
              <div class="col-xs-12">
                <img class="org9" src="<?php echo $server; ?>assets/images/logos/ORG_09_@2x.jpg">
                <img class="org10" src="<?php echo $server; ?>assets/images/logos/ORG_10_@2x.jpg">
              </div>
              <div class="col-xs-12">
                <img class="org11" src="<?php echo $server; ?>assets/images/logos/ORG_11_@2x.jpg">
                <img class="org8" src="<?php echo $server; ?>assets/images/logos/ORG_08_@2x.jpg">
              </div>
          </div>
           <!-- 3 -->
          <div class="text-center mb2 row">
              <div class="col-xs-12">
                <img class="org18" src="<?php echo $server; ?>assets/images/logos/ORG_18_@2x.jpg">
                <img class="org14" src="<?php echo $server; ?>assets/images/logos/ORG_14_@2x.jpg">
              </div>
              <div class="col-xs-12">
                <img class="org15" src="<?php echo $server; ?>assets/images/logos/ORG_15_@2x.jpg">
                <img class="org16" src="<?php echo $server; ?>assets/images/logos/ORG_16_@2x.jpg">
              </div>
              <div class="col-xs-12">
                <img class="org17" src="<?php echo $server; ?>assets/images/logos/ORG_17_@2x.jpg">
                <img class="org13" src="<?php echo $server; ?>assets/images/logos/ORG_13_@2x.jpg">
              </div>
          </div>
           <!-- 4 -->
          <div class="text-center mb2 row">
              <div class="col-xs-12">
                <img class="org19" src="<?php echo $server; ?>assets/images/logos/ORG_19_@2x.jpg">
                <img class="org20" src="<?php echo $server; ?>assets/images/logos/ORG_20_@2x.jpg">
              </div>
              <div class="col-xs-12">
                <img class="org21" src="<?php echo $server; ?>assets/images/logos/ORG_21_@2x.jpg">
                <img class="org22" src="<?php echo $server; ?>assets/images/logos/ORG_22_@2x.jpg">
              </div>
              <div class="col-xs-12">
                <img class="org23" src="<?php echo $server; ?>assets/images/logos/ORG_23_@2x.jpg">
                <img class="org24" src="<?php echo $server; ?>assets/images/logos/ORG_24_@2x.jpg">
              </div>
          </div>

        </div>
    </div>
  </div>
  <!-- Pre footer -->
  <div class="prefooter">
    <div class="container">
      <div>
        <div class="col-md-3 col-xs-12">
        <ul class="list-unstyled list-prefoot">
          <li>Flipgrid</li>
          <li><a target="_blank" href="https://vimeo.com/177572275">Getting started</a></li>
        </ul>
        </div>
        <div class="col-md-3 col-xs-12">
        <ul class="list-unstyled list-prefoot">
          <li>About</li>
          <li><a target="_blank" href="http://blog.flipgrid.com/">News + updates</a></li>
          <!-- <li><a href="#">Press + media kit</a></li> -->
          <!-- <li><a href="#">Presentation kit</a></li> -->
        </ul>
        </div>
        <div class="col-md-3 col-xs-12">
        <ul class="list-unstyled list-prefoot">
          <li>Support</li>
          <!-- <li><a target="_blank" href="http://info.flipgrid.com/support">Integration docs</a></li> -->
          <li><a href="mailto:hello@flipgrid.com">Email Us</a></li>
        </ul>
        </div>
        <div class="col-md-3 col-xs-12">
        <ul class="list-unstyled list-prefoot">
          <li>Download apps</li>
          <li><a target="_blank" href="https://itunes.apple.com/us/app/flipgrid./id756972930?mt=8&ign-mpt=uo%3D4">iPhone</a></li>
          <li><a target="_blank" href="https://itunes.apple.com/us/app/flipgrid./id756972930?mt=8&ign-mpt=uo%3D4">iPad</a></li>
          <li><a target="_blank" href="https://play.google.com/store/apps/details?id=com.vidku.app.flipgrid">Android</a></li>
        </ul>
        </div>
      </div>
    </div>
  </div>        
  <!-- footer -->
  <div class="footer">
    <div class="container">
      <p class="text-center smaller pl3 pr3 mb0">
        &copy; 2012-2016 Vidku, Inc. Made with love in the heart of Minnesota
      </p>

      <p class="text-center smaller pl3 pr3 mt1">
        <a href="https://twitter.com/flipgrid" target="_blank">
          <img src="<?php echo $server; ?>assets/images/btmSocial-tweet@2x.png" width="35" height="30">
        </a>
      </p>
    </div>
  </div>

  <script src="<?php echo $server; ?>js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo $server; ?>js/jquery.validate.min.js"></script>
  <script src="<?php echo $server; ?>js/slick.min.js"></script>
  <script src="<?php echo $server; ?>js/new-relic.js"></script>
  <script src="<?php echo $server; ?>js/main.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-18649649-42', 'emcp.com');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>

</body>
</html>