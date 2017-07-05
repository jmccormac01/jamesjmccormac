<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Timelapse</title>
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
            <h1>Next Generation Transit Survey (NGTS)</h1>
            <div class='timelapse_container'>
                <iframe class='timelapse' src="https://www.youtube.com/embed/UZlRon4Gevc" frameborder="0" allowfullscreen></iframe>
            </div>
            <p>Meteor above NGTS. While taking a series of exposures to stack inside a star-trailed image, I caught a meteor burn up above NGTS. You can see this streak in the combined photo on my photography page.</p>
            <h1>Gravitational-wave Optical Transient Observer (GOTO)</h1>
            <div class='timelapse_container'>
                <iframe class='timelapse' src="https://www.youtube.com/embed/6ImuRkCM8Os" frameborder="0" allowfullscreen></iframe>
            </div>
            <p> GOTO dome construction, part 1. We installed the wall sections of the 18 foot Astrohaven clam shell dome on 28 November 2016. A delayed start meant we could not finish construction of the roof sections that day. The dome was left partially built and completed the following day (credit: Paul Chote)</p>
            <div class='timelapse_container'>
                <iframe class='timelapse' src="https://www.youtube.com/embed/Ms-dzrvVO0s" frameborder="0" allowfullscreen></iframe>
            </div>
            <p>Dome construction, part 2. Here we complete the construction of the GOTO dome and close it for the first time after the sun sets and the rain arrived. Building a dome in winter is not advised ;) (credit: Paul Chote)</p>
            <div class='timelapse_container'>
                <iframe class='timelapse' src="https://www.youtube.com/embed/EThjQouB9Ik" frameborder="0" allowfullscreen></iframe>
            </div>
            <p>GOTO filter wheel and camera integration. Here I am assembling four five-colour Finger Lakes Instrumentation filter wheels and four FLI microline cameras in preparation for installation telescopes 1-4.</p>
            
            <!-- Warwick 1m Mirror Washing -->
            <h1>Warwick 1m Telescope (W1m)</h1>
            <div class='timelapse_container'>
                <iframe class='timelapse' src="https://www.youtube.com/embed/hTh0WNl_dAA" frameborder="0" allowfullscreen></iframe>
            </div>
            <p>In this video I am giving the Warwick 1m primary mirror its first proper cleaning. First the mirror is cleaned using compressed air, then it is soaked quite liberally with deionised water to carry away large grains of Saharan sand (calima). We then use a special soapy solution and a natural sponge to dab the mirror clean. Several cycles are repeated. The mirror is dried with compressed air to leave a streak-free finish.</p>
            <div class='timelapse_container'>
                <iframe class='timelapse' src="https://www.youtube.com/embed/W9qQtWZ-Zg8" frameborder="0" allowfullscreen></iframe>
            </div>
            <p>Warwick 1m Telescope primary mirror removal, part 1. Here we are preparing the 1m mirror for removal. It was sent back to the US for repair after we discovered some optical defects in the glass. The mirror was washed and covered with linen to protect the surface during transit (credit: Paul Chote)</p>
            <div class='timelapse_container'>
                <iframe class='timelapse' src="https://www.youtube.com/embed/y7lMarJqg7Q" frameborder="0" allowfullscreen></iframe>
            </div>
            <p>Warwick 1m Telescope primary mirror removal, part 2. In this timelapse we remove the top end of the W1m telescope, including the trusses and then remove the primary mirror and mirror cell. The primary mirror is then removed from its cell and placed into a padded metal box for shipping. (credit Paul: Chote) </p>
            <!-- Work. -->
            <h1>Misc. Astronomy</h1>
            <div class='timelapse_container'>
                <iframe class='timelapse' src="https://www.youtube.com/embed/A-XOlZU62SQ" frameborder="0" allowfullscreen></iframe>
            </div>
            <p>A random collection of short timelapse videos stiched together. I accumulated these videos while working on the William Herschel Telescope in 2013 and 2014.</p>
            <div class='timelapse_container'>
                <iframe class='timelapse' src="https://www.youtube.com/embed/p80hRVX5cfs" frameborder="0" allowfullscreen></iframe>
            </div>
            <p>A rather nauseating timelapse video of the drive back from the ESO Paranal observatory to Antofagasta in the north of Chile. The drive takes around 1 hour, passing through the Atacama Desert, to reach the southern limit of the city.</p>
            <div class='timelapse_container'>
                <iframe class='timelapse' src="https://www.youtube.com/embed/gUiK2rEfCi4" frameborder="0" allowfullscreen></iframe>
            </div>
            <p>Arriving in Santiago, Chile. I was visiting Chile to work on NGTS and Yaiza had just gotten me GoPro Hero for Christmas, this was my first timelapse with the new camera. The final part of this flight is over the Andes and is always quite bumpy. </p>
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
