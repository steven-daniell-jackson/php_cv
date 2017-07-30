<?php 

function about_me_summary(){ 

$about_summary_component = ' <section id="about-me-summary">
      <div class="container wrapper">
        <div class="col-md-4"><img class="img-responsive" src="img/about-me/steven-jackson.jpg" alt=""></div>
        <div class="col-md-6 col-md-offset-1">

          <div class="list-group">
            <h4 class="list-group-item-heading">Full Name:</h4>
            <p class="list-group-item-text">Steven Daniell Jackson</p>
            <h4 class="list-group-item-heading">Birth Date:</h4>
            <p class="list-group-item-text">2nd November 1988</p>
            <h4 class="list-group-item-heading">Personality Type</h4>
            <p class="list-group-item-text"><a href="https://www.16personalities.com/intj-personality">INTJ</a></p>
            <h4 class="list-group-item-heading">Hobbies</h4>
            <p class="list-group-item-text">Anime, Gaming, Coding and Youtube video creation</p>
          </div>
        </div>
      </div>
    </section>' ;


return $about_summary_component; } 


function about_me_content(){ 

$about_content_component = '<section id="about-me-content">
      <div class="container">

        <h2 class="text-center">About Me</h2>

        <div class="col-md-3">
          <div class="panel panel-default" onclick="tabChange(this)" data-tabs="sj-tab1" >
            <div class="panel-body">
              Personality Type 
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-body" onclick="tabChange(this)"  data-tabs="sj-tab2">
              Hobbies 
            </div>
          </div>
          <div class="panel panel-default" onclick="tabChange(this)" data-tabs="sj-tab3">
            <div class="panel-body">
              Education 
            </div>
          </div>
          
        </div>

        <div class="col-md-6 col-md-offset-2">
          <p  class="sj-tab1 tabs animated slideInUp active">
            <span class="row">

              <span class="col-md-6"> <b>STRENGTHS</b>  <br><br>
                Quick Thinker<br>
                Imaginative and Strategic Mind<br>
                Highly Self-Confident<br>
                Independent and Decisive<br>
                Hard-working and determined<br>
                Open-minded<br>
                Jacks-of-all-Trades<br>
                Logical<br>
              </span>

              <span class="col-md-6"> <b>WEAKNESSES</b> <br><br>
                Honesty  <br>
                Loyalty <br>
                Overly analytical<br>
                Highly structured environments<br>

              </span>

            </span>
            <br>

          </p>
          <p class="sj-tab2 animated bounceInRight tabs ">
            <span class="row">
            Anime <br>
            Coding<br>
            Gaming<br>
            Creating Youtube Videos<br>
            Researching<br><br>
            <a href="#youtubeChannels">View my Youtube Channels</a>
</span>
          </p>
          <p class="sj-tab3 animated zoomIn tabs">
            <span class="row">
              <span class="col-md-6">
                <b>Education</b><br><br>

 <b>Self Study</b> <br>
            2008 - Current <br> 
            <br> <br>


            <b>Varsity College</b> <br>
            Diploma — 2008 <br> 
            Diploma in Information Technology  <br>
            (Software Development)  <br> <br>

            <b>Matric:</b> <br>
            Northlink College <br>
            Certificate — 2005/2006  <br>
            </span>
             <span class="col-md-6">
                <b>Awards</b><br><br>
ABBOTT’S COLLEGE:  <br>

Annual award for Computer Studies Higher Grade  <br> <br>

BOSMANSDAM HIGH SCHOOL: <br>

Student Monitor <br>
Grade 9 and 10 top achievers award in Mathematics <br>
Member of the debate society <br>
Member of chess society <br> <br>

BOSMANSDAM PRIMARY SCHOOL: <br>

Computor Monitor: <br>
Duty was to lead the computer monitor group. <br>
Responsible for upgrading of schools computers for student’s use

 </span>
</span>
</p>
</div>
<span class="clearfix"></span>
 </div>
</section>' ;


return $about_content_component; } 


function about_profile_links(){ 

$about_profile_links_component = '
<section class="container profile-links">
  <h1 class="heading-about-me text-center">
   Profile links
 </h1>
 <div class="row col-md-12">
  <div class="panel panel-default col-md-3 text-center">


    <div class="panel-body" data-trigger="linkedin">
      <i class="fa fa-linkedin-square"></i><br>
      LinkedIn
    </div>
  </div>

  <div class="panel panel-default col-md-3 text-center">

    <div class="panel-body" data-trigger="github">
      <i class="fa fa-github-square"></i><br>
      Github
    </div>
  </div>

  <div class="panel panel-default col-md-3 text-center">

    <div class="panel-body" data-trigger="google-docs">
     <i class="fa fa-google"></i> <i class="fa fa-hdd-o"></i><br>
     Google Drive
   </div>
 </div>

<div class="panel panel-default col-md-3 text-center">
  <div class="panel-body" data-trigger="porfolio">
    <i class="fa fa-picture-o"></i><br>
    Screenshot Portfolio
  </div>
</div>

</div>
<div class="row col-md-12 text-center profile-link-information" style="opacity: 1;">Google Drive Document containing Work Done, Portfolio of Websites worked on, Skills Matrix and Responsibilies. <br><a href="https://docs.google.com/spreadsheets/d/1s7Or_0nZ1YYS3KibGAVgGdPnjmqB6iYWQPnXvEVpUmw/edit?usp=sharing" target="_blank">View Google Drive Document</a></div>
</section>' ;


return $about_profile_links_component; } 


function homepage_youtubeChannels(){ 

$about_youtubeChannels_component = '<section id="youtubeChannels">
      <div class="container">
        <h2 class="text-center">My Youtube Channels</h2>
        <div class="row">
          <h3 class="text-center">Sanguinezor - World of Warcraft Videos</h3>
          <span class="sanguinezorResults"></span>
        </div>

        <div class="row">
          <h3 class="text-center">Epic Overwatch - Overwatch Gameplay and Clips</h3>
          <span class="epicOverwatchResults"></span>

        </div>
      </div>
    </section>
' ;


return $about_youtubeChannels_component; } 






 ?>