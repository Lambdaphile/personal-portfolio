@extends('layouts.master')
@section('title', 'Portfolio')
@section('content')

<main role="main">

<section style="position: relative;" class="section-home" id="home">
  <div class="container-fluid">
    <nav role="navigation">
      <li><a href="#about">About</a></li>
      <li><a href="#skills">Skills</a></li>
      <li><a href="#projects">Projects</a></li>
      <li><a href="#contact">Work & Education</a></li>
      <li><a href="">Contact</a></li>
    </nav>
  </div>

  <div class="container-fluid intro-box">
    <h2>Web Developer</h2>
    <h1 id="name">Emrah Seidov</h1>
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
    <button id="down-arrow">
      <h3>Scroll</h3>
      <div class="icon icon-Mouse"></div>
        
    </button>
    </div>

  </div>
</section>
<section class="section-projects" id="projects">
  
</section>
<section class="section-skills" id="skills">
  
</section>
<section class="section-contact" id="contact">
  
</section>
</main>
@endsection