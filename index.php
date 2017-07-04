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
        <?php 
            include('includes/nav.html');
        ?>
        <div id='main' class='container'>
            <div class = 'row'>
                <div class='col-md-5 col-sm-12 col-xs-12' id='photo_div'>
                    <img id='photo' src="img/CV_Photo.jpg">
                </div>
                <div class='col-md-7 col-sm-12 col-xs-12 text-center' id='landing'>
                    <p> My name is James McCormac, I am a postdoc at the University of Warwick, UK.
                        I work in the field of Transiting Exoplanets. I am currently the operations 
                        postdoc for the Next Generation Transit Survey. NGTS is a new exoplanet 
                        survey located in the southern hemisphere at ESO's Paranal Observatory, Chile.
                    </p>
                    <p> I also manage the 0.4m NITES telescope on La Palma in the Canary Islands, and 
                        I'm a member of the SuperWASP, Warwick 1m telescope and GOTO projects, all 
                        of which are on La Palma.
                    </p>
                    <p>Previously, I worked as a Telescope Operator and Support Astronomer on the 4.2m
                        William Herschel Telescope at the Isaac Newton Group of Telescopes (ING) on
                        La Palma. I also did a 1.5 year placment as a Student Support Astronomer at 
                        the ING, working on the 2.5m Isaac Newton Telescope.
                    </p>
                    <p> In my free time I enjoy spending time with my son, mainly playing with trains
                        and building LEGO. I also enjoy running, learning more about programming and 
                        web development techniques and tinkering with a Raspberry Pi.
                    </p>
                    <p> A copy of my CV can be found
                        <a href="https://github.com/jmccormac01/CV/blob/master/CV_JamesMcCormac.pdf">on GitHub</a>
                    </p>
                    <p>Follow me on Twitter: <a href='https://twitter.com/jmccormac001'>@jmccormac001</a>
                       and GitHub <a href='https://github.com/jmccormac01'>jmccormac01</a>
                    </p>
                </div>
            </div>
            <div class='row hidden-sm-down'>
                <div id='githistory' class='container center-block'>
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
    <script>
    $(document).ready(function(){
        $('#home_page').addClass('active');
    });
    </script>
  </body>
</html>

