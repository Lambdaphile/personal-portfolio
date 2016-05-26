@extends('layouts.master')

@section('content')

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="">Page 1<span class="caret"></span></a>
      </li>
      <li><a href="{{ $url = route('about') }}">About</a></li>
      <li><a href="{{ $url = route('contact') }}">Contact</a></li>
    </ul>
  </div>
</nav>
<main role="main">
<!-- All the content website content is ralesed here -->
<section id="home">
  <form action="post">
    <input type="text" class="form-control" placeholder="Text input">
  </form>
</section>
<section id="projects">
  <div class="container-fluid">
    
  </div>
</section>

<section id="skills">
  <div class="container">
    <p>
      
      Page Load19

      Impact on page load time

      Tip: Using many font styles can slow down your webpage, so only select the font styles that you actually need on your webpage.
      2. Choose the character sets you want:
      Latin (latin)
      Latin Extended (latin-ext)

      Tip: If you choose only the languages that you need, you'll help prevent slowness on your webpage.
    </p>
  </div>
</section>

<section id="contact">
</section>
</main>
<footer>
</footer>

@endsection