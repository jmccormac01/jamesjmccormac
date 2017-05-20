<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <!-- Prepare a container for your calendar. -->
    <script src="https://cdn.rawgit.com/IonicaBizau/github-calendar/gh-pages/dist/github-calendar.min.js"></script>
    <!-- Optionally, include the theme (if you don't want to struggle to write the CSS) -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/IonicaBizau/github-calendar/gh-pages/dist/github-calendar.css"/>
  </head>

  <body>
        <div class='container-fluid'>
            <?php 
                include('includes/nav.html');
            ?>
        </div>
        <div id='main' class='container'>
            <div class = 'row'>
                <div class='col-sm-6 text-center' id='landing'>
                    <p> My name is James McCormac, I am a postdoc at the University of Warwick, UK.
                        I work in the field of Transiting Exoplanets. I am currently the operations 
                        postdoc for the Next Generation Transit Survey. NGTS is a new exoplanet 
                        survey located in the southern hemisphere at ESO's Paranal Observatory, Chile.
                    </p>
                    <p> In my free time I enjoy spending time with my son, mainly playing with trains
                        and building LEGO. I also enjoy running, learning more about programming and 
                        web development techniques and tinkering with a Raspberry Pi.
                    </p>
                </div>

                <div class='col-sm-6 text-center' id='photo'>
                    <img src="img/me.png">
                </div>
            </div>
            
            <div class='row'>
                <div id='githistory' class='container center-block'>
                    <p>Follow me on Twitter: <b>@jmccormac001</b> and GitHub: <b>jmccormac01</b></p>
                    <div class="calendar">
                        Loading the data just for you.
                        <script>
                            new GitHubCalendar(".calendar", "jmccormac01");
                        </script>
                    </div>
                </div>
            </div>
        </div>
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>

