@extends('_master')

@section('page_title')
    Profile - P1
@stop

@section ('header')

<!-- begin:header -->
    <section id="header" class="heading" style="background: url(/img/img03.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="title-desc">
                        <h2>Project 1 - Portfolio</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </section>
<!-- end:header -->

    <!-- begin:featured -->
    <div id="featured">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-3">
            <div class="featured-container">
              <div class="featured-img" style="background: url(img/img00.jpg);">
                <h3><a href="http://p1.pamelalim.org">Portfolio</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-3">
            <div class="featured-container">
              <div class="featured-img" style="background: url(http://imgs.xkcd.com/comics/password_strength.png);">
                <h3><a href="http://p2.pamelalim.org">XDCD Password</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-3">
            <div class="featured-container">
              <div class="featured-img" style="background: url(/img/homer.jpg);">
                <h3><a href="http://p3.pamelalim.org">Developer's Best Friend</a></h3>
              </div>
            </div>
          </div>
		            <div class="col-md-3 col-sm-3">
            <div class="featured-container">
              <div class="featured-img" style="background: url(img/img03.jpg);">
                <h3><a href="p4.pamelalim.org">Math Diagnostic Test App</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end:featured -->
@stop

@section('content')
    <!-- begin:content -->
    <section id="content">
      <div class="container">
        <div class="row">
            <!-- begin:article -->
            <div class="col-md-8 col-sm-8">
                <div class="featured-container">
                  <div class="featured-img featured-img-avatar" style="background: url(img/img00.jpg);">
                      <h3>Pamela Lim - Mother | Educator | Entrepreneur</h3>
                  </div>
                </div>
                <br>
                <div class="heading-title">
                    <h2>Pamela Lim</h2>
                </div>
                <p>My name is Pamela Lim, and I was an award-winning and well-known entrepreneur in Asia in the late 1990s and early 2000s who became a university lecturer for the last decade. Over the next five years, I will focus my research on Education.</p>
                <p>I decided to take a course on Web Applications knowing that there will be a final project, and I'd like to take that opportunity to build a web application to do an adaptive Math testing system. I hope to get good advice and insights from experienced programmers and do at least a prototype during the course.</p>
                <p>My experience in programming is varied. I started my career as a programmer in 1990 with Citibank, designing and programming ATMs. We used PL1, COBOL, Assembler in those days.</p>
                <p>I subsequently moved on to become a business woman, and employed hundreds of programmers in seven countries. We were early adopters of the object oriented technology in mid-1990s. Afterwhich, I listed the company and retired into a university to teach entrepreneurship and raised five children.</p>
                <p>Over the last few years, I have engaged a few programmers to do work for me. Have been quite disappointed, so I picked up programming myself to fill that gap. I've picked up C sharp, used the MVC stuff in Visual Studio, learned Java, learned Javascript and found out how HTML/CSS work. I have also taken courses in cloud computing. I hope to get up to speed on programming just to implement some systems. I find that it is much faster to code than to explain and ask people to code. I have also explored CMS like Moodle, Drupal and Joomla, and wrote some simple extensions. All self-taught.</p>
                <p>I like working on Linux, but since the platform used in the class is xampp, I will be using a PC. I also like to use Microsoft Azure, but will take this opportunity to learn Digital Ocean this semester. Happy to learn anything!</p>
            </div>
            <!-- end:article -->
        </div>
      </div>
    </section>
    <!-- end:content -->

    <!-- begin:partner -->
    <div id="featured">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="featured-container">
                        <div class="featured-img" style="background: url(/img/img00.jpg);">
                            <h3><a href="http://p1.pamelalim.org">Portfolio</a></h3>
                        </div>
                        <p><a href="https://github.com/2ppaamm/p1">Project 1 Github link</a></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="featured-container">
                        <div class="featured-img" style="background: url(http://imgs.xkcd.com/comics/password_strength.png);">
                            <h3><a href="http://p2.pamelalim.org">XKCD Password</a></h3>
                        </div>
                        <p><a href="https://github.com/2ppaamm/p2">Project 2 Github link</a></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="featured-container">
                        <div class="featured-img" style="background: url(/img/homer.jpg);">
                            <h3><a href="http://p3.pamelalim.org">Developer's Best Friend</a></h3>
                        </div>
                        <p><a href="https://github.com/2ppaamm/p3">Project 3 Github link</a></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="featured-container">
                        <div class="featured-img" style="background: url(img/img03.jpg);">
                            <h3><a href="http://p4.pamelalim.org">Math Diagnostic Test</a></h3>
                        </div>
                        <p><a href="https://github.com/2ppaamm/p4">Project 4 Github link</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- end: partner -->
@stop

