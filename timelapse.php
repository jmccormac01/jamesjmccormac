<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Python</title>
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <!-- Prepare a container for your calendar. -->
    <script src="https://cdn.rawgit.com/IonicaBizau/github-calendar/gh-pages/dist/github-calendar.min.js"></script>
    <!-- Optionally, include the theme (if you don't want to struggle to write the CSS) -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/IonicaBizau/github-calendar/gh-pages/dist/github-calendar.css"/>
  </head>

  <body>
        <?php 
            include('includes/nav.html');
        ?>
        <div class='container'>
            <p>Below are a few timelapse videos from several projects that I've been involved with</p>
            <h1>Gravitational-wave Optical Transient Observer (GOTO)</h1>
            <div class='timelapse_container'>
                <iframe class='timelapse' src="https://www.youtube.com/v/=6ImuRkCM8Os&index=1&list=PLwEaxpVUbVvsYXPZdFO3YRsDxtmhGbjdb" frameborder="0" allowfullscreen></iframe>
            </div>
            <p> GOTO dome construction, part 1. We installed the wall sections of the 18 foot Astrohaven clam shell dome on 28 November 2016. A delayed start meant we could not finish construction of the roof sections that day. The dome was left partially built and completed the following day (credit: Paul Chote)</p>
            <div class='timelapse_container'>
                <iframe class='timelapse' src="https://www.youtube.com/v/=Ms-dzrvVO0s&index=3&list=PLwEaxpVUbVvsYXPZdFO3YRsDxtmhGbjdb" frameborder="0" allowfullscreen></iframe>
            </div>
            <p>Dome construction, part 2. Here we complete the construction of the GOTO dome and close it for the first time after the sunsets and the rain arrived. Building a dome in winter is not advised ;) (credit: Paul Chote)</p>
            
            <!-- Warwick 1m Mirror Washing -->
            <h1>Warwick 1m Telescope (Wim)</h1>
            <div class='timelapse_container'>
                <iframe class='timelapse' src="https://www.youtube.com/embed/hTh0WNl_dAA" frameborder="0" allowfullscreen></iframe>
            </div>
            <p>In this video I am giving the Warwick 1m primary mirror its first proper cleaning. First the mirror is cleaned using compressed air, then it is soaked quite liberally with deionised water to carry away large grains of Saharan sand (calima). We then use a special soapy solution and a natural sponge to dab the mirror clean. Several cycles are repeated. The mirror is dried with compressed air to leave a streak-free finish.</p>
            <!-- Work. -->
            <h1>Misc. Astronomy</h1>
            <div class='timelapse_container'>
                <iframe class='timelapse' src="https://www.youtube.com/embed/A-XOlZU62SQ" frameborder="0" allowfullscreen></iframe>
            </div>
            <p>A random collection of short timelapse videos stiched together. I accumulated these videos while working on the William Herschel Telescope in 2013 and 2014.</p>
        </div>
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(){
        $('#timelapse_page').addClass('active');
    });
    </script>
  </body>
</html>
