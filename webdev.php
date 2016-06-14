<!doctype html>
<html>
<head>
    <title>Web Development</title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <!-- Prepare a container for your calendar. -->
    <script src="https://cdn.rawgit.com/IonicaBizau/github-calendar/gh-pages/dist/github-calendar.min.js"></script>
    <!-- Optionally, include the theme (if you don't want to struggle to write the CSS) -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/IonicaBizau/github-calendar/gh-pages/dist/github-calendar.css"/>
</head>


<body>
    <div id='main'>
        <div class='fixedwidth'>
            <div id='topbar'>
                <!-- NAV -->
                <?php
                    include("includes/nav.html");
                ?>
            </div>
            <div id='web_dev_summary'>    
                <p> 
                    When I began working on NGTS at Warwick one of my tasks was to develop a webpage to monitor the observatory. 
                    Through trial and error (and now a slightly more methodical approach) I am brushing up
                    on the skills and techniques required to create interactive and (most importantly?) pretty websites. Hence
                    this personal project of my own website.  
                </p>

                So far I have mainly been using:
                <ul>
                    <li><a href="http://www.w3schools.com/html/html5_intro.asp">HTML5</a></li>
                    <li><a href="http://www.w3schools.com/css/">CSS</a></li>
                    <li><a href="http://www.w3schools.com/js/">Javascript</a></li>
                    <li><a href="https://jquery.com/">JQuery</a></li>
                    <li><a href="http://www.w3schools.com/php/">PHP</a></li>
                </ul>

                <div class='break'></div>

                <p>
                    <strong>HTML</strong> is what is used to generate the content of a website. This text is written in HTML. 
                    <strong>CSS</strong> is what gives the content its appearance. For example the font 
                    colour/size or the background colour of the header bar at the top. <strong>Javascript</strong> is the programming
                    language of HTML and the web. It can be used to make websites interactive. For example, clicking buttons to submit
                    a form. <strong>JQuery</strong> is a powerful Javascript wrapper that enables easier Javascript coding. <strong>PHP</strong>
                    is another scripting language for web development. I mainly use PHP for database interaction and form handling. 
                </p>
                <p>
                    Below is a summary of my public activity on GitHub for the past year. I will add snippets 
                    and web development tips here over time.
                </p>
            </div>            

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
