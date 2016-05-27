<!-- Stored in resources/views/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- General description of the site -->
    <meta name="description" content="Emrah Seidov - full stack web developer specialized in PHP, Laravel, CMS systems like WordPress and many other web technologies."/>
    <meta name="keywords" content="Emrah Seidov, Web Developer, PHP, Laravel, Freelancer, WordPress, Bootstrap, JavaScript, Front-end, Back-end">
    <meta name="author" content="Emrah Seidov"/>
    <link rel="icon" href="http://i.imgur.com/WclrpxA.png">
    <title>Emrah Seidov</title>
    
    <!-- Costum fonts -->
    <link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
    
    <!-- Costum stylesheets -->
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    
    <style type="text/css">
    body {
      font-family: 'Yanone Kaffeesatz', sans-serif;
      font-size: 18px;
    }
    </style>
  </head>
  
  <body>
    @yield('content')
    
    <!-- Scripts section -->
    <!-- Latest compressed, production jQuery 2.2.3 -->
    <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
  
</html>