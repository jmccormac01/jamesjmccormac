<!doctype html>
<html>
<head>
    <title>Python</title>
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
            <div id='python_summary'>    
                <p> 
                    Most of my code is written in Python. Everything from my Ph.D was in Python 
                    as were all the scripts I wrote while working at the ING on La Palma. 
                    Nothing has changed now that I am at Warwick. Around mid-2015 I began embracing 
                    the power of version control (using Git) and I am slowly going back through all my 
                    projects, creating repositories and pushing them to GitHub. I am tidying up and 
                    documenting those that can be made public. My plan for this page is to highlight 
                    anything I found interesting when coding a particular problem in Python, plus links
                    to my public repositories. 
                </p>

                The python modules I mainly use are:
                <ul>
                    <li><a href="http://www.scipy.org/">SciPy</a></li>
                    <li><a href="http://www.numpy.org/">NumPy</a></li>
                    <li><a href="http://matplotlib.org/">Matplotlib</a></li>
                    <li><a href="http://ipython.org/">IPython</a></li>
                    <li><a href="http://www.astropy.org/">Astropy</a></li>
                    <li><a href="http://rhodesmill.org/pyephem/">PyEphem</a></li>
                    <li><a href="https://github.com/PyMySQL/PyMySQL">PyMySQL</a></li>
                    <li><a href="https://pythonhosted.org/Pyro4/">Pyro4</a></li>
                </ul>

                <div class='break'></div>

                <p>
                    <strong>Numpy</strong>, <strong>Matplotlib</strong> and <strong>IPython</strong> are all 
                    part of the <strong>SciPy</strong> mathematical ecosystem. 
                    <strong>Astropy</strong> acts like astronomy glue allowing interactivity between 
                    lots of existing astronomy codes. It includes FITS handling, space and time systems plus 
                    much more. <strong>PyEphem</strong> provides astronomical computations in Python. It is 
                    based the powerful XEphem code. <strong>PyMySQL</strong> is (as the name suggests) a python 
                    interface to MySQL databases. Several Python interfaces to SQL databases exist, I picked 
                    this one first and it seems to do the job for what I need. <strong>Pyro4</strong> is a library
                    that enables Python objects to communicate over a network. This is useful if you have scripts
                    running on different servers that need to be aware of one another. 
                </p>
                <p>
                    Below is a summary of my public activity on GitHub for the past year. I will add snippets 
                    and Python tips here over time.
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
