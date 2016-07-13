@extends('layouts.master')
@section('title', 'Portfolio')
@section('content')

<main role="main">

<div id="home-section-background">
</div>

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
  
  <div class="container-fluid">
    <div id="intro-box">
      
      <h2>Web Developer</h2>
      
      <h1 id="name-box">Emrah Seidov</h1>
      
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
    </div>
    
  </div>
  
  <button id="down-arrow">
  <h3>Scroll</h3>
  <div class="icon icon-Mouse"></div>
  </button>
</section>
<!--end section-home-->

<section id="section-about">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-7">
        <div class="about-me">
          <h2>About Me</h2>
          <p>
            Hi, my name is Emra Seidov, a self-taught (full-stack) web developer currently designing, developing and maintaining front-end and back-end functionalities of multiple websites. I have 2 years’ experience in front-end and 1 year’s experience in back-end (Ruby on Rails) development. I am also a 2nd year university student at the University of Waterloo studying computer engineering with 2 co-op work terms under my belt. Firstly, I was an Agile Test Engineer at Pivotal Labs, where I tested mobile and web applications. Next I worked at TD Securities as a Quality Assurance Analyst. There, I created test plans, mocked up data according to Business requirements, coded SQL, and executed tests on our risk reporting application and its database. This website is a showcase of the web development work that I have done over that past 2 years and an interactive resume. If you would like to get in touch you can visit the contact section of this website.
          </p>
        </div>
      </div>
      <div class="col-md-5">
        <div class="profile">
          <h2>Profile</h2>
          <ul>
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
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section-skills" id="skills">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="skills">
          <h2>Skills</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="web-skills">
          <h3>Web Developer</h3>
          <div class="small-line"></div>
        </div>
      </div>
      <div class="col-md-6">
        <p style="color:black;">wut</p>
      </div>
    </div>
  </div>
</section>
<section></section>
</main>
@endsection