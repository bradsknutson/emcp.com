<?php
    $server = 'http://info.flipgrid.com/';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Flipgrid.</title>
  <meta name="description" content="Video for Active and Social Learning: Flipgrid is simple yet powerful. Educators create grids with topics and students respond with recorded videos to discuss, reflect, and share via webcam, tablet, or mobile device.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/images/flavicon.png">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@flipgrid">
  <meta name="twitter:creator" content="@flipgrid">
  <meta name="twitter:title" content="A place to share thoughts, ideas, and most of all.. your voice.">
  <meta name="twitter:description" content="Boost collaboration, feedback and assessment in classrooms, corporations, and conferences around the world.">
  <meta name="twitter:image" content="http://static.flipgrid.com/allDevicesTweetv5.jpg">
  <meta name="twitter:app:country" content="US"/>
  <meta name="twitter:app:name:iphone" content="flipgrid"/>
  <meta name="twitter:app:id:iphone" content="756972930"/>
  <meta name="twitter:app:url:iphone" content="://flipgrid"/>
  <meta name="twitter:app:name:ipad" content="flipgrid"/>
  <meta name="twitter:app:id:ipad" content="756972930"/>
  <meta name="twitter:app:url:ipad" content="://flipgrid"/>
  <!-- Open Graph -->
  <meta property="og:url" content="http://flipgrid.com/info/">
  <meta property="og:title" content="Flipgrid.">
  <meta property="og:image" content="http://static.flipgrid.com/allDevicesTweetv5.jpg">
  <meta property="og:description" content="Boost collaboration, feedback and assessment in classrooms, corporations, and conferences around the world.">
  <meta property="og:site_name" content="Flipgrid.">
  <!-- App Links -->
  <meta property="al:iphone:app_store_id" content="756972930"/>
  <meta property="al:iphone:app_name" content="Flipgrid."/>
  <meta property="al:ipad:app_store_id" content="756972930"/>
  <meta property="al:ipad:app_name" content="Flipgrid."/>

  <link rel="stylesheet" href="assets/css/main.css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.js"></script>

  <!-- Redirect urls with a hash to the student site -->
  <script>
    // Check if page is embedded
    function inIframe () {
      try {
        return window.self !== window.top;
      } catch (e) {
        return true;
      }
    }

    if (window.location.hash && window.location.hash.indexOf('access_token') === -1) {
      if (inIframe()) {
        window.location = "https://flipgrid.com/iframe/" + window.location.hash.replace('#', '');
      } else {
        window.location = "https://flipgrid.com/" + window.location.hash.replace('#', '');
      }
    }
  </script>

  <!-- Mixpanel -->
   <script type="text/javascript">
     (function(e,a){if(!a.__SV){var b=window;try{var c,l,i,j=b.location,g=j.hash;c=function(a,b){return(l=a.match(RegExp(b+"=([^&]*)")))?l[1]:null};g&&c(g,"state")&&(i=JSON.parse(decodeURIComponent(c(g,"state"))),"mpeditor"===i.action&&(b.sessionStorage.setItem("_mpcehash",g),history.replaceState(i.desiredHash||"",e.title,j.pathname+j.search)))}catch(m){}var k,h;window.mixpanel=a;a._i=[];a.init=function(b,c,f){function e(b,a){var c=a.split(".");2==c.length&&(b=b[c[0]],a=c[1]);b[a]=function(){b.push([a].concat(Array.prototype.slice.call(arguments,0)))}}var d=a;"undefined"!==typeof f?d=a[f]=[]:f="mixpanel";d.people=d.people||[];d.toString=function(b){var a="mixpanel";"mixpanel"!==f&&(a+="."+f);b||(a+=" (stub)");return a};d.people.toString=function(){return d.toString(1)+".people (stub)"};k="disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config reset people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
      for(h=0;h<k.length;h++)e(d,k[h]);a._i.push([b,c,f])};a.__SV=1.2;b=e.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";c=e.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c)}})(document,window.mixpanel||[]);
    mixpanel.init("3824720e89a6152d323db8a4ad6cb221");
  </script>

  <!-- Marketo -->
  <script type="text/javascript">
    (function() {
      var didInit = false;
      function initMunchkin() {
        if(didInit === false) {
          didInit = true;
          Munchkin.init('790-HVW-647');
        }
      }
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      s.src = '//munchkin.marketo.net/munchkin.js';
      s.onreadystatechange = function() {
        if (this.readyState == 'complete' || this.readyState == 'loaded') {
          initMunchkin();
        }
      };
      s.onload = initMunchkin;
      document.getElementsByTagName('head')[0].appendChild(s);
    })();
  </script>
</head>
<body>

  <nav class="text-center">
  <a class="logo pull-left" href="/">
    <img src="assets/images/topLogo@2x.png" alt="Flipgrid Logo" />
  </a>

<!--   <ul class="center-links list-unstyled list-horizontal">
    <li><a class="active" href="/">Classrooms</a></li>
    <li><a href="<?php echo $server; ?>enterprises">Enterprises</a></li>
  </ul> -->

  <ul class="right-links list-unstyled list-horizontal pull-right">
    
    <li class="hide-for-mobile">
      <a class="btn btn-primary smaller" href="http://pages.exacttarget.com/page.aspx?QS=38dfbe491fab00ea398ea25714e1466c8e13b4f958024c797f6d8cafa78ef47c" target="_blank">Get Started</a>
    </li>
    
    <li class="hide-for-mobile">
      <a class="btn-link ff-r" href="//admin.flipgrid.com/manage">Log in</a>
    </li>
    <li>
      <div class="dropdown">
        <button class="btn btn-circle nav-toggle" type="button" data-placement="bottom-left" data-animation='fade' aria-label="Open additional links"><i>...</i></button>
        <div id="popup" class="webui-popover-content">
          <div class="popup-container" tabindex="-1">
            <button class="btn btn-link close" type="button" aria-label="Close additional links">
              <i class="icon-close" aria-hidden="true"></i>
            </button>

            <div class="popup-body">
              <ul class="list-unstyled popup-mainLinks">
                <li><a href="http://pages.exacttarget.com/page.aspx?QS=38dfbe491fab00ea398ea25714e1466c8e13b4f958024c797f6d8cafa78ef47c"><i class="icon-next" target="_blank"></i> Get Started</a></li>
              </ul>
              
              <ul class="list-unstyled popup-secondaryLinks">
                <li class="sm-6"><a href="//support.flipgrid.com">Support Center</a></li>
                <li class="sm-6"><a target="_blank" href="//blog.flipgrid.com">News</a></li>
                <li class="sm-6"><a href="//docs.flipgrid.com">Integration</a></li>
                <li class="sm-6"><a class="emailsupport" href="mailto:support@flipgrid.com">Contact</a></li>
              </ul>

              <div class="popup-appLinks">
                <a class="sm-6" target="_blank" href="https://itunes.apple.com/us/app/flipgrid./id756972930?mt=8&ign-mpt=uo%3D4">
                  <img class="img-fluid" src="assets/images/appBtnApple@2x.jpg" alt="Download our app from the apple store">
                </a>
                <a class="sm-6" target="_blank" href="//play.google.com/store/apps/details?id=com.vidku.app.flipgrid">
                  <img class="img-fluid" src="assets/images/appBtnGoogle@2x.jpg" alt="Download app on the google play store">
                </a>
              </div>      
            </div>

            <div class="popup-footer">
              <a class="btn btn-primary" target="_blank" href="//flipgrid.com/manage">Admin Dashboard <i class="icon-arrow-right8" aira-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div>
    </li>
  </ul>
</nav>

<div class="gridCode">
  <input id="hashinput" class="form-control" type="text" placeholder="Enter your grid code"/>
  <button id="goBtn" class="btn btn-fluid" type="button">Go</button>
</div>


<script>
$(document).ready(function(){
// RIGHT SIDE POPUP HANDLING /////////////////////////////////////////
  $('.nav-toggle').webuiPopover({url:'#popup'});

// JUMP TO GRID HANDLING ///////////////////////////////////////////
  function goToGrid() {
    var hash = $("#hashinput").val();
    if(hash.length === 0 ){
      alert("Please enter a grid code.");
    } else{
      window.location = 'https://flipgrid.com/' + hash;
    }
  }

  //fg-code jumpper
  $("#goBtn").on('click', function(){
    mixpanel
      mixpanel.track(
        "Hash Jump Click",
        {"referrer": document.referrer}
    );
    goToGrid();
  });

  $('#hashinput').bind("keypress", function(e) {
    if (e.keyCode == 13) {
      goToGrid();
      return false; // prevent the button click from happening
    }
  });

  $('#hashinput').focus(function(e) {
    $('#goBtn').addClass( "btn-primary" );
  });

  $("#hashinput").focusout( function(e) {
      if( $(this).val().length === 0 ){
        $('#goBtn').removeClass( "btn-primary" );
      } else{
        $('#goBtn').addClass("btn-primary");
      }
  });
  
});
</script>


  <main>
    <div class="top-feature">
	<div class="container">
		<h1>Seeing is Believing</h1>
		<p>Use video the way your students use video. Students capture short videos to share ideas and experiences with their classmates on the topics you define.</p>
		<div class="btns">
			<a href="http://pages.exacttarget.com/page.aspx?QS=38dfbe491fab00ea398ea25714e1466c8e13b4f958024c797f6d8cafa78ef47c" id="freetrialhero" class="btn btn-primary" target="_blank">Get Started for FREE</a>
			<a id="flipgrid45sec" class="popup-vimeo outlineBtn" href="https://vimeo.com/177572275" ><!-- <img src="images/play.png" height="25" width=""> -->Flipgrid in 60 sec</a>
		</div>
	</div>
</div>
<div class="communnity-banner">
	<p>Want to see Flipgrid in action? Visit the <a target="_blank" id="voice" href="https://flipgrid.com/voice">Global Flipgrid Community</a> grid today.</p>
</div>
<div class="orgs">
	<div class="container">
		<div class="imgHolder">
			<img src="assets/images/ORG_01_@2x.jpg" height="87" width="">
			<img src="assets/images/ORG_02_@2x.jpg" height="87" width="">
			<img src="assets/images/ORG_03_@2x.jpg" height="87" width="">
			<img src="assets/images/ORG_04_@2x.jpg" height="87" width="">
			<img src="assets/images/ORG_05_@2x.jpg" height="87" width="">
			<img src="assets/images/ORG_06_@2x.jpg" height="87" width="">
			<img src="assets/images/ORG_07_@2x.jpg" height="87" width="">
			<img src="assets/images/ORG_08_@2x.jpg" height="87" width="">
		</div>
		<p>30,000+ classrooms. 136 countries. 7 continents. (yep...even <a class="td-u" target="_blank" href="https://flipgrid.com/antarctica">Antarctica</a>).</p>
	</div>
</div>
<div class="tour">
	<div class="container">
		<h2>Flipgrid Tour</h2>
		<div class="rectangle blue"></div>
	</div>
	<div class="container">
	<div class="tournav">
		<div class="sliderTourBtn tourbtn-0 active"><h3>Grids.</h3></div><div class="sliderTourBtn tourbtn-1"><h3>Topics.</h3></div><div class="sliderTourBtn tourbtn-2"><h3>Responses.</h3></div><div class="sliderTourBtn tourbtn-3" ><h3>Replies.</h3></div>
	</div>
		<div class="tour-slider">
			<div>
				<p class="tourTxt">A grid is where your students go to view your topics, record their responses, and reply to their classmates. Grids can be open or locked and embedded into any LMS or website.</p>
				<img class="slider-img" src="assets/images/tourImg-1.png" width="450" height="auto">
			</div>
			<div>
				<p class="tourTxt">Topics spark ideas and fuel the conversation. Add a new topic for an upcoming project, weekly readings, around current events, or wherever you want to lead the discussion.</p>
				<img class="slider-img" src="assets/images/tourImg-2.png" width="450" height="auto">
			</div>
			<div>
				<p class="tourTxt">Students respond with videos recorded on their laptop, iOS, or Android device. Students have unlimited retakes, can pause and resume, and flip the camera to share their environment.</p>
				<img class="slider-img" src="assets/images/tourImg-3.png" width="450" height="auto">
			</div>
			<div>
				<p class="tourTxt">Inspire student leaders. Prompt students to ask questions and explore each other’s perspectives through replies. Each video can be the spark for an entirely new discussion.</p>
				<img class="slider-img" src="assets/images/tourImg-4.png" width="450" height="auto">
			</div>
		</div>
	</div>
</div>
<div class="stories">
	<div class="container">
		<h2>Success Stories</h2>
		<div class="rectangle green"></div>
		<!-- <p>See how educators everywhere are transforming dialogue and igniting active, social learning in their PreK-20 classrooms.</p> -->
	</div>
	<div class="container">
	<div class="storynav">
		<div class="sliderStoryBtn storybtn-0 active"><h3>Elementary.</h3></div><div class="sliderStoryBtn storybtn-1"><h3>Middle.</h3></div><div class="sliderStoryBtn storybtn-2"><h3>High.</h3></div><div class="sliderStoryBtn storybtn-3" ><h3>University.</h3></div>
	</div>
		<div class="stories-slider">
			<div>
				<a class="popup-vimeo fgembed" href="https://flipgrid.com/embed/response/3e542233"><img class="story-img" src="assets/images/andy.jpg" width="450" height="auto"></a>
				<div class="info-block">
					<p>Andy empowers 2nd graders to share their perspectives on current events such as Black History Month. He also connects 2nd grade students with college students to share their diverse understandings of September 11.  Finally, Andy has 3rd - 5th grade students reflect on STEM topics during Makerspace projects.
					</p>
					<p class="projects">
						<a target="_blank" href="https://expectmiraculous.com/2016/09/22/students-as-teachers-exploring-text-structure-with-flipgrid/">Students as Teachers</a><br>
						<a target="_blank" href="http://www.ilovelibraries.org/librariestransform/article/because-andy-plemmons-sees-learning-global-connected-context">Students in a Global, Connected World</a><br>
						<a target="_blank" href="http://blog.flipgrid.com/news/andy-plemmons-black-history-month-project-year-2">Black History Month + Flipgrid</a>
					</p>
				</div>
			</div>
			<div>
				<a class="popup-vimeo fgembed" href="https://flipgrid.com/embed/response/af5fa341"><img class="story-img" src="assets/images/jennifer.jpg" width="450" height="auto"></a>
				<div class="info-block">
					<p>Jennifer prompts her 6th and 7th grade math students to work in small groups and record solutions to multi-step math equations, helping students speak their math thinking. She also champions her school’s parent-teacher relationship by having all teachers introduce themselves via Flipgrid at the start of the year.
					</p>
					<p class="projects">
						<a target="_blank" href="http://blog.flipgrid.com/news/2016/10/4/flipgrid-story-jen-saarinen">Jen's Flipgrid Story</a><br>
						<a target="_blank" href="https://flipgrid.com/7c018695">Jen's Math Integration</a><br>
						<a target="_blank" href="https://www.youtube.com/watch?v=7DmQsiNVXXo&feature=youtu.be">Jen's Youtube Video</a><br>
					</p>
				</div>
			</div>
			<div>
				<a class="popup-vimeo fgembed" href="https://flipgrid.com/embed/response/6e9320fe"><img class="story-img" src="assets/images/nicole.jpg" width="450" height="auto"></a>
				<div class="info-block">
					<p>Nicole challenges her 9th grade English students to compare historical figures with a modern-day equivalent. She also encourages a fun and creative learning environment by asking her students to record their best Shakespearean insult. Finally, she utilizes the Socratic seminar method of classroom discussion with Flipgrid videos.
					</p>
					<p class="projects">
						<a target="_blank" href="http://blog.flipgrid.com/news/2016/9/1/flipgrid-story-nicole-lafave">Nicole's Flipgrid Story</a><br>
						<a target="_blank" href="http://edtechpicks.org/2016/09/give-your-students-a-voice-with-flipgird/">Give Your Students a Voice</a><br>
						<a target="_blank" href="https://flipgrid.com/826a97bc">Shakespearean Insults</a><br>
					</p>
				</div>
			</div>
			<div>
				<a class="popup-vimeo fgembed" href="https://flipgrid.com/embed/response/a8ced700"><img class="story-img" src="assets/images/kali.jpg" width="450" height="auto"></a>
				<div class="info-block">
					<p>Kali fosters an active learning environment in his online and hybrid courses, replacing online text forums with richer Flipgrid discussions. He believes that learning occurs when students get out of a textbook and engage with their peers. He promotes minimal “teaching and preaching” and a strong emphasis on reflection and discussion.
					</p>
					<p class="projects">
						<a target="_blank" href="https://vimeo.com/187338194">Kali's Flipgrid Tip</a><br>
						<a target="_blank" href="https://flipgrid.com/0dfa4a95">Importance of Student Voice</a><br>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="slice-vid">
  <div class="container">
    <div class="text-center">
      <a class="popup-vimeo" href="https://vimeo.com/188210645">
      <img class="mt1 mb1" src="assets/images/play@2x.png" width="120" height="120">
      <h2 class="mb05 mt05 white">The Power of Student Voice</h2>
      </a>
    </div>
  </div>
</div>
<div class="pricing">
	<div class="container">
		<h2>PreK-20 Educator Pricing</h2>
		<div class="rectangle purple"></div>
		<p>Our pricing is simple and transparent. Each PreK-20 educator pays a yearly fee for unlimited use and ALL of their students
	have free access. We don’t limit student voice because we know you empower it.</p>
	</div>
</div>
<div class="pricing-blocks">
  <div class="container">
    <ul class="list-unstyled">
      <li class="demo-top">Demo</li>
      <li class="demo mb1"><h1>Free</h1><p class="label">for 30 days</p></li>
      <li><strong>Unlimited</strong> use
      <p>Try Flipgrid for free in your classroom for 30 days. This is a fully functional demo, so enjoy fueling student voice!</p></li>
      <li><a id="freedemo" href="http://pages.exacttarget.com/page.aspx?QS=38dfbe491fab00ea398ea25714e1466c8e13b4f958024c797f6d8cafa78ef47c"><div class="btn btn-primary">Get Started for FREE</div></a></li>
    </ul>
    <ul class="list-unstyled">
      <li class="teacher-top">Single Educator</li>
      <li class="teacher mb1"><h1>$65</h1><p class="label">per year</p></li>
      <li><strong>Unlimited</strong> students</li>
      <li><strong>Unlimited</strong> grids</li>
      <li><strong>Unlimited</strong> topics</li>
      <li><strong>Unlimited</strong> responses + replies</li>
      <li>Free iPhone, iPad + Android apps</li>
      <li>Exclusive webinars</li>
      <li>Premium support</li>
      <li><a id="single" href="http://pages.exacttarget.com/page.aspx?QS=38dfbe491fab00ea398ea25714e1466c8e13b4f958024c797f6d8cafa78ef47c"><div class="btn btn-primary">Get Started for FREE</div></a></li>
    </ul>
    <ul class="list-unstyled">
      <li class="school-top">School, University, Org Licenses</li>
      <li class="school mb1"><h1>Let's talk</h1><p class="label">discounted pricing</p></li>
      <li class="schoolp">Want to transform discussions throughout your entire school, district, department, or University? Package discounts start at 10 licenses. Let’s talk!</li>
      <li><a id="licensecontact" href="mailto:sales@flipgrid.com?subject=Custom%20Flipgrid%20Account&body=Flipgrid%20offers%20discounted%20rates%20based%20on%20number%20of%20teachers.%20Please%20include%20an%20estimate%20number%20of%20teacher%20accounts%20needed%20in%20your%20email%20so%20we%20can%20better%20help%20you."><div class="btn btn-outline">sales@flipgrid.com</div></a></li>
    </ul>
  </div>
</div>

<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script>
  // video player modal
  $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
    // disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false,
  });

  //slider
  $('.tour-slider').slick({
    autoplay: false,
    autoplaySpeed: 5000,
    arrows: false,
    dots: false,
    fade: false,
    infinite: true
  });

  $('.stories-slider').slick({
    autoplay: false,
    autoplaySpeed: 5000,
    arrows: false,
    dots: false
  });
  //fix for resizing the flipgrid embed in vimeo player modal
  $('.fgembed').on('click', function(){
    $('.mfp-content').addClass('fgembedsizer');
  });
  //tour slider logic
  $('.tour-slider').on('swipe', function(event, slick, direction){
	getcurrentTourSlide()
	removeTourActive();
    $('.tourbtn-' + currentTourSlide).addClass('active');

  });
  var currentTourSlide = $('.tour-slider').slick('slickCurrentSlide');
  function getcurrentTourSlide(){
    currentTourSlide = $('.tour-slider').slick('slickCurrentSlide');
  };
  //click events
  $('.tourbtn-0').on('click', function(){
    $('.tour-slider').slick('slickGoTo','0');
    removeTourActive();
    $(this).addClass('active');
  });
  $('.tourbtn-1').on('click', function(){
    $('.tour-slider').slick('slickGoTo','1');
    removeTourActive();
    $(this).addClass('active');
  });
  $('.tourbtn-2').on('click', function(){
    $('.tour-slider').slick('slickGoTo','2');
    removeTourActive();
    $(this).addClass('active');
  });
  $('.tourbtn-3').on('click', function(){
    $('.tour-slider').slick('slickGoTo','3');
    removeTourActive();
    $(this).addClass('active');
  });
  function removeTourActive(){
    $('.tourbtn-0').removeClass('active');
    $('.tourbtn-1').removeClass('active');
    $('.tourbtn-2').removeClass('active');
    $('.tourbtn-3').removeClass('active');
  };
  //story slider logic
  // On swipe event
  $('.stories-slider').on('swipe', function(event, slick, direction){
	getcurrentSlide()
	removeActive();
    $('.storybtn-' + currentSlide).addClass('active');

  });
  var currentSlide = $('.stories-slider').slick('slickCurrentSlide');
  function getcurrentSlide(){
    currentSlide = $('.stories-slider').slick('slickCurrentSlide');
  };
  //click events
  $('.storybtn-0').on('click', function(){
    $('.stories-slider').slick('slickGoTo','0');
    removeActive();
    $(this).addClass('active');
  });
  $('.storybtn-1').on('click', function(){
    $('.stories-slider').slick('slickGoTo','1');
    removeActive();
    $(this).addClass('active');
  });
  $('.storybtn-2').on('click', function(){
    $('.stories-slider').slick('slickGoTo','2');
    removeActive();
    $(this).addClass('active');
  });
  $('.storybtn-3').on('click', function(){
    $('.stories-slider').slick('slickGoTo','3');
    removeActive();
    $(this).addClass('active');
  });
  function removeActive(){
    $('.storybtn-0').removeClass('active');
    $('.storybtn-1').removeClass('active');
    $('.storybtn-2').removeClass('active');
    $('.storybtn-3').removeClass('active');
  };
</script>

  </main>

  <footer>
  <!-- Pre footer -->
  <div class="prefooter">
    <div class="container">
      <ul class="list-unstyled">
        <li>Flipgrid</li>
       <!--  <li><a href="support">For PreK-20 Classrooms</a></li>
        <li><a href="support">For Enterprises</a></li> -->
        <li><a href="http://pages.exacttarget.com/page.aspx?QS=38dfbe491fab00ea398ea25714e1466c8e13b4f958024c797f6d8cafa78ef47c">Get Started</a></li>
        <li><a class="emailsupport" href="mailto:support@flipgrid.com?subject=Flipgrid Help">Contact Us</a></li>
      </ul>
      <ul class="list-unstyled">
        <li>Support</li>
        <li><a href="https://support.flipgrid.com/" alt="Support Center">Support Center</a></li>
        <li><a href="https://docs.flipgrid.com/" alt="Integration Documents">Integration Docs</a></li>
        <li><a target="_blank" href="http://blog.flipgrid.com/" alt="Flipgrid Blog">News + updates</a></li>
      </ul>
      <ul class="list-unstyled">
        <li>Legal</li>
        <li><a target="_blank" href="<?php echo $server; ?>/legal/#terms">Terms of Use</a></li>
        <li><a target="_blank" href="<?php echo $server; ?>/legal/#privacy">Privacy Policy</a></li>
        <li><a target="_blank" href="<?php echo $server; ?>/legal/#childrensprivacy">COPPA</a></li>
        <li><a target="_blank" href="//static.flipgrid.com/docs/vpat.pdf">VPAT Accessibility</a></li>
      </ul>
      <ul class="list-unstyled">
        <li>Downloads</li>
        <li><a target="_blank" href="https://itunes.apple.com/us/app/flipgrid./id756972930?mt=8&ign-mpt=uo%3D4" alt="iOS apps">iPhone / iPad app</a></li>
        <li><a target="_blank" href="https://play.google.com/store/apps/details?id=com.vidku.app.flipgrid" alt="Android app">Android app</a></li>
        <li><a href="//static.flipgrid.com/docs/Flipgrid_media_kit.zip">Press + media kit</a></li>
        <li><a href="//static.flipgrid.com/docs/Flipgrid_presentation_kit.zip">Presentation kit</a></li>
      </ul>
    </div>
  </div>
  <!-- footer -->
  <div class="footer">
    <div class="container text-center">
      <p>&copy; 2016 Flipgrid, Inc. Made with love in Minnesota
        <a href="https://twitter.com/flipgrid" target="_blank">
          <img src="//static.flipgrid.com/assets/btmSocial-tweet@2x.png" width="35" height="30">
        </a>
      </p>
    </div>
  </div>
</footer>  

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-60062004-8', 'auto');
    ga('send', 'pageview');
  </script>

  <script src="assets/js/detect.min.js"></script>
  <script src="assets/js/main.js"></script>
  <!-- Live reload script -->
  <!-- <script src="http://localhost:35729/livereload.js"></script> -->
</body>
</html>