<!doctype html>
<html>
<head>
    <title>Astronomy</title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/main.css" type="text/css">
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

            <div id='ngts_cover'>
                <img src="img/NGTS_original.jpg">
            </div>

            <div id='nites_w1m_cover'>
                <img src="img/NITES_W1M_original.jpg">
            </div>
            
            <div id='ngts_summary'>
                <p class='facility_summary'> 
                    The Next Generation Transit Survey (NGTS) is an array of twelve 20-cm robotic telescopes 
                    located at the European Southern Observatory (ESO) Paranal site in the Atacama Desert, Chile.
                    NGTS is surveying the southern sky for transiting exoplanets around bright stars and is 
                    sensitive to Neptune and super-Earth sized exoplanets.

                    NGTS has been observing robotically since January 2015 and we are currently running with 8 of 12 
                    telescopes. The final 4 cameras will be installed in February 2016 and the first exoplanet 
                    discoveries are immanent. 
                </p>
            </div>
            
            <div id='nites_w1m_summary'>
                <p class='facility_summary'>
                    The Near Infra-red Transiting ExoplanetS (NITES) telescope is 0.4-m semi-robotic telescope 
                    located at El Observatorio del Roque de los Muchachos (ORM) on La Palma in the Canary Islands. 
                    NITES is used to obtain high-precision light curves of transiting exoplanets from the SuperWASP
                    survey.

                    Next to the NITES telescope is the Warwick 1-m (W1m) robotic telescope. W1m is used to measure 
                    a host of transient objects (variable white dwarfs, eclipsing binaries, transiting exoplanets) 
                    simultaneously in two colours.  
                </p>
            </div>

            <div id='superwasp_cover'>
                <!-- img -->
                <p> <!-- class='facility_summary' -->
                    SuperWASP (Wide Angle Survey for Planets) consists of 2 robotic telescopes (ORM and South Africa) 
                    each with 8 wide field cameras (Cannon 200mm f/1.8) and has been in operation since 2004. 
                    With over 150 exoplanets discovered and confirmed, SuperWASP is the most sucessful ground-based 
                    transiting exoplanet survey to date. 
                </p>
            </div>

        </div>
    </div>   
</body>
</html>
