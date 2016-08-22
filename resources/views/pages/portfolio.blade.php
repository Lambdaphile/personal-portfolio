<!-- Stored in resources/views/pages/portfolio.blade.php -->
@extends('layouts.master')
@section('portfolio')

<main role="main">

<div id="main-section-background">
</div>
<!-- /#main-section-background -->

<section id="main">
  <div class="container-fluid">
    <nav role="navigation">
      <li><a href="#about">About</a></li>
      <li><a href="#skills">Skills</a></li>
      <li><a href="#projects">Projects</a></li>
      <li><a href="#timeline">Work & Education</a></li>
      <li><a href="#contact">Contact</a></li>
    </nav>
  </div>
  <!-- /.container-fluid -->
  <div class="container-fluid">
    <div id="intro-box">
      <h2>Web Developer</h2>
      <h1 id="name-box">Emrah Seidov</h1>
      <!-- /#name-box -->
      <h2>Portfolio & Resume</h2>
      <div id="contact-buttons-box">
        <a class="contact-buttons" href="#">
          <i class="fa fa-at fa-2x" aria-hidden="true"></i>
        </a>
        <a class="contact-buttons btn-git" href="#">
          <i class="fa fa-github-alt fa-2x" aria-hidden="true"></i>
        </a>
        <a class="contact-buttons" href="#">
          <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
        </a>
        <a class="contact-buttons" href="#">
          <i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i>
        </a>
      </div>
      <!-- /#contact-buttons-box -->
    </div>
    <!-- /#intro-box -->
  </div>
  <!-- /.container-fluid -->
  <button id="down-arrow">
  <h3>Scroll</h3>
  <div class="icon-Mouse"></div>
  </button>

</section>
<!-- /#main -->

<section id="about">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-1 col-lg-5 col-lg-offset-2">
        <div class="about-col">
          <h2 class="about-heading">About Me</h2>
          <!-- /.about-heading -->
          <div class="small-line"></div>
          <!-- /.small-line -->
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt dolore delectus vel eos commodi saepe numquam molestiae, eaque repellat cum omnis asperiores, ipsa, molestias nobis repellendus eligendi laboriosam! Dignissimos, molestias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt dolore delectus vel eos commodi saepe numquam molestiae, eaque repellat cum omnis asperiores, ipsa, molestias nobis repellendus eligendi laboriosam! Dignissimos, molestias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt dolore delectus vel eos commodi saepe numquam molestiae, eaque repellat cum omnis asperiores, ipsa, molestias nobis repellendus eligendi laboriosam! Dignissimos, molestias.
          </p>
        </div>
        <!-- /.about-col -->
      </div>
      <!-- /.col-sm-6 col-sm-offset-1 col-lg-5 col-lg-offset-2 -->
      <div class="prf-clr col-sm-5">
        <div class="profile-col">
          <h2 class="profile-heading">Profile</h2>
          <!-- /.profile-heading -->
          <div class="small-line"></div>
          <!-- /.small-line -->
          <ul>
            <li class="profile-list">Student at</li>
            <li>
              <p>University of Ruse</p>
            </li>
            <div class="small-line"></div>
            <!-- /.small-line -->
            <li class="profile-list">Program</li>
            <li>
              <p>Mathematics & IT</p>
            </li>
            <div class="small-line"></div>
            <!-- /.small-line -->
            <li class="profile-list">Co-op terms</li>
            <li>
              <p>2</p>
            </li>
            <div class="small-line"></div>
            <!-- /.small-line -->
            <li class="profile-list">Hobies</li>
            <li>
              <p>Gaming | Running</p>
            </li>
            <div class="small-line"></div>
            <!-- /.small-line -->
          </ul>
        </div>
        <!-- /.profile-col -->
      </div>
      <!-- /.prf-clr col-sm-5 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /#about -->

<section id="skills">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 col-lg-offset-2">
        <h2 class="skills-heading">Skills</h2>
        <!-- /.skills-heading -->
        <div class="small-line"></div>
        <!-- /.small-line -->
      </div>
      <!-- /.col-sm-10 col-sm-offset-1 col-lg-offset-2 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-5 col-sm-offset-1 col-lg-offset-2">
        <div class="web-skills">
          <h3>Web Developer</h3>
          <div class="small-line"></div>
        </div>
        <!-- /.web-skills -->
        <div class="row">
          <div class="col-xs-6">
            <ul>
              <li>PHP</li>
              <li>AngliarJS</li>
              <li>MVC Methodology</li>
              <li>HTML5</li>
              <li>CSS3</li>
              <li>Sass</li>
            </ul>
          </div>
          <!-- /.col-xs-6 -->
          <div class="col-xs-6">
            <ul>
              <li>JavaScript</li>
              <li>JQuery</li>
              <li>JSON</li>
              <li>Ajax</li>
              <li>Bootstrap</li>
              <li>MySQL</li>
            </ul>
          </div>
          <!-- /.col-xs-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.col-sm-5 col-sm-offset-1 col-lg-offset-2 -->
      <div class="col-sm-6 col-lg-5">
        <div class="web-skills">
          <h3>Languages & Technologies</h3>
          <div class="small-line"></div>
          <!-- /.small-line -->
        </div>
        <!-- /.web-skills -->
        <div class="row">
          <div class="col-xs-5">
            <ul>
              <li>C#</li>
              <li>C++</li>
              <li>Java</li>
              <li>GIT</li>
              <li>SQL</li>
            </ul>
          </div>
          <!-- /.col-xs-5 -->
          <div class="col-xs-6">
            <ul>
              <li>Laravel</li>
              <li>Win/Unix terminal</li>
              <li>Sublime text & NetBeans</li>
              <li>Gimp</li>
              <li>MySQL Workbench</li>
            </ul>
          </div>
          <!-- /.col-xs-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.col-sm-6 col-lg-5 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /#skills -->

<section id="projects">
  <div class="container-fluid">
    <div class="row">
      <div class="prjct-h col-sm-10 col-sm-offset-1 col-lg-offset-2">
        <h2 class="projects-heading">Projects</h2>
        <!-- /.projects-heading -->
        <div class="small-line"></div>
        <!-- /.small-line -->
      </div>
      <!-- /.prjct-h col-sm-10 col-sm-offset-1 col-lg-offset-2 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-5 col-sm-offset-1 col-lg-4 col-lg-offset-2">
        <img class="project-pic-full" src="/images/portfolio-capture.png" alt="portfolio-pic"/>
        <div class="project-description">
          <h2>This Website</h2>
          <div class="small-line"></div>
          <!-- /.small-line -->
          <p>My current personal resume and portfolio website.</p>
        </div>
        <!-- /.project-description -->
        <div class="used-technologies">
          <h3>PHP</h3>
          <h3>Laravel</h3>
          <h3>Responsive</h3>
          <h3>HTML5</h3>
          <h3>CSS3</h3>
          <h3>Sass</h3>
          <h3>Bootstrap</h3>
          <h3>JQuery</h3>
          <p>July 2016</p>
        </div>
        <!-- /.used-technologies -->
      </div>
      <!-- /.col-sm-5 col-sm-offset-1 col-lg-4 col-lg-offset-2 -->
      <div class="col-sm-5 col-lg-4">
        <img class="project-pic-full" src="https://alyssasfu.files.wordpress.com/2015/03/screen-shot-2015-03-21-at-11-01-39-am.png" alt="riot-game-api-app-pic"/>
        <div class="project-description">
          <h2>Meta Headz</h2>
          <div class="small-line"></div>
          <!-- /.small-line -->
          <p>A League Of Legends app for tracking pro players builds, masteries and runes using Riot Games API.</p>
        </div>
        <!-- /.project-description -->
        <div class="used-technologies">
          <h3>PHP</h3>
          <h3>Laravel</h3>
          <h3>JavaScript</h3>
          <h3>JQuery</h3>
          <h3>Responsive</h3>
          <h3>HTML5</h3>
          <h3>CSS3</h3>
          <h3>Sass</h3>
          <h3>Bootstrap</h3>
          <p>July 2016</p>
        </div>
        <!-- /.used-technologies -->
      </div>
      <!-- /.col-sm-5 col-lg-4 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container fluid -->
</section>
<!-- /#projects -->

<section id="contacts-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 col-lg-offset-2">
        <h2 class="contacts-heading">Contact</h2> 
        <!-- /.contacts-heading -->
        <div class="small-line"></div>
        <!-- /.small-line -->
      </div>
      <!-- /.col-sm-10 col-sm-offset-1 col-lg-offset-2 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-5 col-sm-offset-1 col-lg-offset-2">
        <a href="mailto:eseidov@gmail.com">
          <i class="fa fa-at"></i>
          eseidov@gmail.com
        </a> <br> <!-- i will fix this later -->
        <a href="https://github.com/noumenonsc">
          <i class="fa fa-github-alt"></i>
          github.com/noumenonsc
        </a>
      </div>
      <!-- /.col-sm-5 col-sm-offset-1 col-lg-offset-2 -->
      <div class="col-sm-6 col-md-5">
        <a href="#">
          <i class="fa fa-linkedin-square"></i>
          linkedin.com/in/emrahseidov
        </a> <br> <!-- i will fix this later -->
        <a href="https://github.com/noumenonsc">
          <i class="fa fa-file-pdf-o"></i>
          .pdf Resume
        </a>
      </div>
      <!-- /.col-sm-6 col-md-5 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.contacts-section -->

<footer>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 col-lg-offset-2">
        <h2>
          <i class="fa fa-copyright"></i>
          Emrah Seidov 2016
        </h2>
      </div>
      <!-- /.col-sm-10 col-sm-offset-1 col-lg-offset-2 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</footer>

</main>

@endsection