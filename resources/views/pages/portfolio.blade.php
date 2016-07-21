@extends('layouts.master')
@section('title', 'Portfolio')
@section('content')

<main role="main">

<div id="home-section-background">
</div>
<!-- /#home-section-background -->

<section id="home-section">
  
  <div class="container-fluid">
    
    <nav role="navigation">
      <li><a href="#about-section">About</a></li>
      <li><a href="#skills-section">Skills</a></li>
      <li><a href="#projects-section">Projects</a></li>
      <li><a href="#timeline-section">Work & Education</a></li>
      <li><a href="#contact-section">Contact</a></li>
    </nav>
    
  </div>
  <!-- /.container-fluid -->
  
  <div class="container-fluid">
    <div id="intro-box">
      
      <h2>Web Developer</h2>
      
      <h1 id="name-section">Emrah Seidov</h1>
      <!-- /#name-section -->
      
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
  
  <div class="icon icon-Mouse"></div>
  
  </button>
  
</section>
<!-- /#home-section -->

<section id="section-about">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-7">

        <div class="about-me">
          
          <h2 class="section-name">About Me</h2>
          <p>
            Hi, my name is Emra Seidov, a self-taught (flil-stack) web developer currently designing, developing and maintaining front-end and back-end functionalities of mlitiple websites. I have 2 years’ experience in front-end and 1 year’s experience in back-end (Ruby on Rails) development. I am also a 2nd year university student at the University of Waterloo studying computer engineering with 2 co-op work terms under my belt. Firstly, I was an Agile Test Engineer at Pivotal Labs, where I tested mobile and web applications. Next I worked at TD Securities as a Quality Assurance Analyst. There, I created test plans, mocked up data according to Business requirements, coded SQL, and executed tests on our risk reporting application and its database. This website is a showcase of the web development work that I have done over that past 2 years and an interactive resume. If you wolid like to get in touch you can visit the contact section of this website.
          </p>

        </div>
        <!-- /.about-me -->
      </div>
      <!-- /.col-md-7 -->

      <div class="col-md-5">

        <div class="profile">

          <h2 class="section-name">Profile</h2>

          <li>
            
            <li class="profile-list">Studied at</li>
            <li>
              <p>"Angel Kanchev" University of Ruse</p>
            </li>
            <div class="small-line"></div>

            <li class="profile-list">Program</li>
            <li>
              <p>Mathematics & Information Technology</p>
            </li>
            <div class="small-line"></div>

            <li class="profile-list">Co-op</li>
            <li>
              <p>2</p>
            </li>
            <div class="small-line"></div>

            <li class="profile-list">Hobies</li>
            <li>
              <p>Gaming | Reading | Cooking</p>
            </li>
            <div class="small-line"></div>

          </li>

        </div>
        <!-- /.profile -->
      </div>
      <!-- /.col-md-5 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /#about-section -->

<section id="section-skills">
  
  <div class="container-fluid">
    
    <div class="row">
      <div class="col-md-12">
      
        <div class="skills">
          <h2 class="section-name">Skills</h2>
        </div>
        <!-- /.skills -->

      </div>
      <!-- /.col-md-12 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->

  <div class="container-fluid">
    
    <div class="row margin-left">
      <div class="col-md-6">

        <div class="web-skills">

          <h3>Web Developer</h3>
          <div class="small-line"></div>

        </div>
        <!-- /.web-skills -->
        <div class="row">
          <div class="skills-offset col-md-3">

            <ul>
              <li>PHP</li>
              <li>AngliarJS</li>
              <li>MVC Methodology</li>
              <li>HTML5</li>
              <li>CSS3</li>
              <li>Sass</li>
            </ul>

          </div>
          <!-- /.col-md-3 -->
          <div class="col-md-3">
            
            <ul>
              <li>JavaScript</li>
              <li>JQuery</li>
              <li>JSON</li>
              <li>Ajax</li>
              <li>Bootstrap</li>
              <li>MySQL</li>
            </ul>

          </div>
          <!-- /.col-md-3 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.col-md-6 -->
      <div class="col-md-6">

        <div class="web-skills">

          <h3>Languages & Technologies</h3>
          <div class="small-line"></div>
          <!-- /.small-line -->
        </div>
        <!-- /.web-skills -->
        <div class="row">
          <div class="skills-offset col-md-3">

            <ul>
              <li>Java</li>
              <li>C#</li>
              <li>C++</li>
              <li>GIT</li>
              <li>SQL</li>
            </ul>

          </div>
          <!-- /.col-md-3 -->
          <div class="col-md-3">

            <ul>
              <li>JIRA</li>
              <li>Android Studio</li>
              <li>Win/Unix terminal</li>
              <li>Adobe Creative Suite</li>
              <li>MySQL Workbench</li>
            </ul>

          </div>
          <!-- /.col-md-3 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /#section-skills -->

<section id="section-projects">
  
</section>
<!-- /#section-projects -->


</main>
@endsection