<?php 


function homepage_carousel(){ 

$carousel_component = '<section class="homepage-carousel">
    <!-- Carousel
    ================================================== -->
    <div id="bannerCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="img/banner/1.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Steven Jackson CV - 2017</h1>
              <p>Everything you want to know about me</p>
              <p><a class="btn btn-lg btn-primary" href="#about-me" role="button">Find Out a Little About Me</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="img/banner/2.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>My Coding Experience?</h1>
              <p>Find out what my coding experience is.</p>
              <p><a class="btn btn-lg btn-primary" href="#experienceSilder" role="button">Coding Experience</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="img/banner/3.png" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Have I Worked before?</h1>
              <p>Find out more about the places I used to call home.</p>
              <p><a class="btn btn-lg btn-primary" href="#workExperience" role="button">Work Experience</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#bannerCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#bannerCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
     </section>
    </header>' ;


return $carousel_component; } 



function homepage_about_me(){ 

$about_me_component = ' <section id="about-me" class="text-center">
    <div class="container">
    <h2>About Me</h2>

    <p>My name is Steven Jackson. 
     <br>I love being immersed in code and learning new things.
     <br>I have the capability and the interest to learn any language or framework. 
   </p>
   <a href="/about-me.html">More information about me</a>

   <br><br>
</div>
 </section>' ;


return $about_me_component; } 


function homepage_experience_slider(){ 

$experience_slider_component = '<section id="experienceSilder" >

  <div   class="container">
    <h2 class="text-center">My Coding Experience</h2>

    <div id="main_area">
      <!-- Slider -->
      <div class="row">
        <div class="col-xs-12" id="slider">
          <!-- Top part of the slider -->
          <div class="row">
            <div class="col-sm-8" id="carousel-bounding-box">
              <div class="carousel slide" id="myCarousel">
                <!-- Carousel items -->
                <div class="carousel-inner">
                  <div class="active item" data-slide-number="0">
                    <img src="img/homepage-coding-experience/html.png"></div>

                    <div class="item" data-slide-number="1">
                      <img src="img/homepage-coding-experience/css.png"></div>

                      <div class="item" data-slide-number="2">
                        <img src="img/homepage-coding-experience/javascript.png"></div>

                        <div class="item" data-slide-number="3">
                          <img src="img/homepage-coding-experience/php.png"></div>

                          <div class="item" data-slide-number="4">
                            <img src="img/homepage-coding-experience/wordpress.png"></div>

                            <div class="item" data-slide-number="5">
                              <img src="img/homepage-coding-experience/bootstrap.png"></div>
                            </div><!-- Carousel nav -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left"></span>                                       
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right"></span>                                       
                            </a>                                
                          </div>
                        </div>

                        <div class="col-sm-4" id="carousel-text"></div>

                        <div id="slide-content" style="display: none;">
                          <div id="slide-content-0">
                            <h3>HTML5</h3>
                            <p><strong>Moderate Experience </strong><br>Duration: 24 Months+</p>
                            <a class="coding-experience-link" href="/coding-experience.html">See All of my Coding Experience</a>
                          </div>

                          <div id="slide-content-1">
                            <h3>CSS3</h3>
                            <p><strong>Moderate Experience </strong><br>Duration: 24 Months+</p>
                            <a class="coding-experience-link" href="/coding-experience.html">See All of my Coding Experience</a>
                          </div>

                          <div id="slide-content-2">
                            <h3>Javascript</h3>
                            <p><strong>Moderate Experience </strong><br>Duration: 24 Months+</p>
                            <a class="coding-experience-link" href="/coding-experience.html">See All of my Coding Experience</a>
                          </div>

                          <div id="slide-content-3">
                            <h3>PHP</h3>
                            <p><strong>Moderate Experience </strong><br>Duration: 12 Months+</p>
                            <a class="coding-experience-link" href="/coding-experience.html">See All of my Coding Experience</a>
                          </div>

                          <div id="slide-content-4">
                            <h3>Wordpress</h3>
                            <p><strong>Moderate Experience </strong><br>Duration: 10 Months+</p>
                            <a class="coding-experience-link" href="/coding-experience.html">See All of my Coding Experience</a>
                          </div>

                          <div id="slide-content-5">
                            <h3>Bootstrap</h3>
                            <p><strong>Moderate Experience </strong><br>Duration: 18+ Months</p>
                            <a class="coding-experience-link" href="/coding-experience.html">See All of my Coding Experience</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!--/Slider-->

                  <div class="row hidden-xs" id="slider-thumbs">
                    <!-- Bottom switcher of slider -->
                    <ul class="hide-bullets">
                      <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-0"><img src="img/homepage-thumbnail/html.png"></a>
                      </li>

                      <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-1"><img src="img/homepage-thumbnail/css.png"></a>
                      </li>

                      <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-2"><img src="img/homepage-thumbnail/javascript.png"></a>
                      </li>

                      <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-3"><img src="img/homepage-thumbnail/php.png"></a>
                      </li>

                      <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-4"><img src="img/homepage-thumbnail/wordpress.png"></a>
                      </li>

                      <li class="col-sm-2">
                        <a class="thumbnail" id="carousel-selector-5"><img src="img/homepage-thumbnail/bootstrap.png"></a>
                      </li>
                    </ul>                 
                  </div>
                </div>
              </div>
            </section> 

            <!-- Work Experience  -->
' ;


return $experience_slider_component; } 


function homepage_work_experience(){ 

$work_experience_component = ' <section id="workExperience">
 <div class="container">
              <h2 class="text-center">My Work Experience</h2>

              <div class="col-md-3">
                <div class="panel panel-default" onclick="tabChange(this)" data-tabs="sj-tab1" >
                  <div class="panel-body">
                    <strong>( June 2015 - Current )</strong> <br><br>Freelance 
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-body" onclick="tabChange(this)"  data-tabs="sj-tab2">
                    <strong>( April 2015 - June 2015 )</strong><br><br>ROI Digital - Junior Developer 
                  </div>
                </div>
                <div class="panel panel-default" onclick="tabChange(this)" data-tabs="sj-tab3">
                  <div class="panel-body">
                    <strong>( July 2012 - August 2014 )</strong><br><br>ROI Digital - I.T. Technician 
                  </div>
                </div>
              </div>

              <div class="col-md-8 col-md-offset-1">
                <p  class="sj-tab1 tabs animated slideInRight active">
                  Responsibilities <br><br>
                  > Build and testing / QA of email newsletters and websites (e-commerce focused) <br>
                  > Accountable for building and sending mailers, QA and sign off from designer and project owner before distribution <br>
                  > Create, build and manage assets for the websites and affiliate sites including homepage, category banners, competition pages <br>
                  > Keep up to date with email best practice and work with Content Manager to implement changes <br>
                  > Maintain consistent look and feel across the websites <br>
                  > Understand and contribute to usability best practice in site navigation and emails <br>
                  > Build assets and apps for social networking sites as required <br>
                  > Ensuring the look and feel of the site follows the brand guidelines <br>
                  > Development / Coding of landing pages and Websites (CS Cart and Wordpress) <br>
                  > Draft business requirements and technical specs that are robust and meet the needs of client and developers <br>
                  > Responsible for specifications and outsource developer liaison (focus on CS-Cart and other) <br><br>
                  <a href="/work-experience.php">View All Responsibilities</a>

                </p>
                <p class="sj-tab2 animated slideInUp tabs ">
                  Responsibilities <br><br>
                  > Build and testing / QA of email newsletters and websites (e-commerce focused) <br>
                  > Accountable for building and sending mailers, QA and sign off from designer and project owner before distribution <br>
                  > Create, build and manage assets for the websites and affiliate sites including homepage, category banners, competition pages <br>
                  > Keep up to date with email best practice and work with Content Manager to implement changes <br>
                  > Maintain consistent look and feel across the websites <br>
                  > Understand and contribute to usability best practice in site navigation and emails <br>
                  > Build assets and apps for social networking sites as required <br>
                  > Ensuring the look and feel of the site follows the brand guidelines <br>
                  > Development / Coding of landing pages and Websites (CS Cart and Wordpress) <br>
                  > Draft business requirements and technical specs that are robust and meet the needs of client and developers <br>
                  > Responsible for specifications and outsource developer liaison (focus on CS-Cart and other) <br><br>
                  <a href="/work-experience.php">View All Responsibilities</a>

                </p>
                <p class="sj-tab3 animated zoomIn tabs">
                  Responsibilities <br><br>
                  > Repairing and Replacing PCs <br>
                  > Setting up Pc’s for new Users as well as company logins <br>
                  > Testing sites <br>
                  > General I.T. Issues <br>
                  > Setting up User Accounts <br>
                  > Full updated Audit sheet <br>
                  > Updated Uniform Hosting Sheet <br>
                  > Setting up sites on Development environment <br>
                  > Testing hardware <br>
                  > Contacting suppliers for replacement stock and repairs <br><br>
                  <a href="/work-experience.php">View All Responsibilities</a>
                </p>
              </div>

              <span class="clearfix"></span>
            </div>
            </section>' ;


return $work_experience_component; } 



function homepage_portfolio(){ 

$portfolio_component = ' <section id="portfolio">
              <div class="container">
                <h2 class="text-center">Portfolio</h2>
                <div class="row">
                  <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                      <img src="img/portfolio-images/earthchild.png" alt="...">
                      <div class="caption">
                        <h4>Websites</h4>
                        <p>Websites that I have worked on.</p>
                        <p><a href="http://steven-daniell-jackson.github.io/portfolio/#/latest" class="btn btn-primary" role="button">See more</a></p>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                      <img src="img/portfolio-images/aa-intouch.png" alt="...">
                      <div class="caption">
                        <h4>Landing Pages</h4>
                        <p>Landing Pages I have built.</p>
                        <p><a href="http://steven-daniell-jackson.github.io/portfolio/#/landingpages" class="btn btn-primary" role="button">See more</a> </p>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                      <img src="img/portfolio-images/blue-train.png" alt="...">
                      <div class="caption">
                        <h4>Newsletters</h4>
                        <p>Newsletters that I have built.</p>
                        <p><a href="http://steven-daniell-jackson.github.io/portfolio/#/newsletters" class="btn btn-primary" role="button">See more</a></p>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                      <img src="img/portfolio-images/limabean.png" alt="...">
                      <div class="caption">
                        <h4>Other</h4>
                        <p>Tests and other projects.</p>
                        <p><a href="http://steven-daniell-jackson.github.io/portfolio/#/other" class="btn btn-primary" role="button">See more</a> </p>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

              <h4 class="text-center">Please not that Portfolio has not been updated for a long time. </h4>
            </section>
' ;


return $portfolio_component; } 































?>