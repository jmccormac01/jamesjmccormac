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
            <div id='python_summary'>
                <p> 
                    Most of my code is written in Python. Everything from my Ph.D was in Python 
                    as were all the scripts I wrote while working at the ING on La Palma. 
                    Nothing has changed now that I am at Warwick. Around mid-2015 I began embracing 
                    the power of version control (using Git) and I am slowly going back through all my 
                    projects, creating repositories and pushing them to GitHub. I am tidying up and 
                    documenting those that can be made public. My plan for this page is to highlight 
                    anything I found interesting when coding a particular problem in Python, plus links
                    to my public repositories. The python modules I mainly use are:
                </p>

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
        $('#python_page').addClass('active');
    });
    </script>
  </body>
</html>
