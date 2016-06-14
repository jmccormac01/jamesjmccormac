<!doctype html>
<html>
<head>
    <title>Homepage</title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <!-- Prepare a container for your calendar. -->
    <script src="https://cdn.rawgit.com/IonicaBizau/github-calendar/gh-pages/dist/github-calendar.min.js"></script>
    <!-- Optionally, include the theme (if you don't want to struggle to write the CSS) -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/IonicaBizau/github-calendar/gh-pages/dist/github-calendar.css"/>
</head>

<!-- Ideas:
        Add twitter back in, but make it nicer with flex
        Add a contact form with captcha
        Anything interactive? No JS or JQuery yet! I suppose I could use angular to load the publications and photos in an ng- loop?    
-->

<body>
    <div id='main'>
        <div class='fixedwidth'>
            <div id='topbar'>
                <!-- NAV -->
                <?php
                    include("includes/nav.html");
                ?>
            </div>    
        
            <div id='landing'>
                <p>My name is James McCormac, I am a postdoc at the University of Warwick, UK. I work in the field of Transiting Exoplanets. I am currently the operations postdoc for the Next Generation Transit Survey. NGTS is a new exoplanet survey located in the southern hemisphere at ESO's Paranal Observatory, Chile.</p>
                <p>In my free time I enjoy spending time with my son, mainly playing with trains and building LEGO. I also enjoy running, learning more about programming and web development techniques and tinkering with a Raspberry Pi.</p>
                <p>Follow me on Twitter: <b>@jmccormac001</b> and GitHub: <b>jmccormac01</b></p>
            </div>

            <div id='photo'>
                <img src="img/me.png">
            </div>

            <!-- 
            <div id='twitter'>
                <a class="twitter-timeline" href="https://twitter.com/jmccormac001" data-widget-id="688138208245231618">Tweets by @jmccormac001</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
             -->
            
            
            <div id='githistory'>
                <div class="calendar">
                    Loading the data just for you.
                    <script>
                        new GitHubCalendar(".calendar", "jmccormac01");
                    </script>
                </div>
            </div>
        </div>
    </div>   
</body>
</html>
