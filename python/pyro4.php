<!doctype html>
<html>
<head>
    <title>Pyro4</title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="../highlight/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <link rel="stylesheet" href="../highlight/styles/monokai-sublime.css">
</head>

<body>
    <div id='main'>
        <div class='fixedwidth'>
            <div id='topbar'>
                <!-- NAV -->
                <?php
                    include("../includes/nav.html");
                ?>
            </div>    
            
            <div class='narrowwidth'>
                <h1>Pyro</h1>

                <div class='problem_explanation'>
                    <p>
                    Say we have a distribuated system where there are several vital pieces of code running on multiple servers. We would like to monitor the health and performance of these scripts and warn us if something has crashed. Here we outline a simple 'check in' system whereby we can monitor which programs are running or not. 
                    This is where Pyro (<a href="https://pythonhosted.org/Pyro4/">PYthon Remote Object</a>) allows objects to communicate across a network and enables both control and monitoring. 
                    </p>
                    
                </div>
             

<pre>
<code class='python'>
import threading
import time
import Pyro4
import argparse
Pyro4.config.REQUIRE_EXPOSE = True
class CentralHub(object):
    def __init__(self, output_filename, ntimes, sleeptime):
        self.output_filename = output_filename
        self._ntimes = ntimes
        self._sleeptime = sleeptime
        self.monitors = sorted(['system1', 'system2', 'system3','system4', 'system5'])
        self.status = {monitor: False for monitor in self.monitors}
        self.connections = {monitor: 0 for monitor in self.monitors}
        self.print_thread = threading.Thread(target=self.print_status)
        self.print_thread.daemon = True
        self.print_thread.start()

</code>
</pre>
                
            
                <div class='break'></div>

                <div class='highlight_reference'>
                    <p>This page uses the <a href="https://github.com/isagalaev/highlight.js">Javascript Syntax Highlighter</a> by Ivan Sagalaev</p>
                </div>
            </div> <!-- end of narrowwidth --> 

        </div>
    </div>   
</body>
</html>
