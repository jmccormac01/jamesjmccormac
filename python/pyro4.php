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
            <nav>
                <ul class='nav nav-pills'>
                    <li id='home_page' class='nav-item'><a class='nav-link' href="/index.html">Home</a></li>
                    <li id='astronomy_page'class='nav-item'><a class='nav-link' href="/astronomy.html">Astronomy</a></li>
                    <li id='photography_page'class='nav-item hidden-xs-down'><a class='nav-link' href="/photography.html">Photography</a></li>
                    <li id='timelapse_page'class='nav-item hidden-sm-down'><a class='nav-link' href="/timelapse.html">Time-lapse</a></li>
                    <li id='publications_page'class='nav-item'><a class='nav-link' href="/publications.html">Publications</a></li>
                    <li id='python_page'class='nav-item hidden-lg-down'><a class='nav-link' href="/python.html">Python</a></li>
                    <li id='webdev_page'class='nav-item hidden-lg-down'><a class='nav-link' href="/webdev.html">Web Dev</a></li>
                </ul>
            </nav>

            </div>    
            
            <div class='narrowwidth'>
                <h1>Pyro4 - <a href="https://pythonhosted.org/Pyro4/">PYthon Remote Object</a></h1>

                <div class='problem_explanation'>
                    <p>
                    Pyro4 allows objects to communicate across a network and enables both control and monitoring. Say we have a distribuated system where there are several vital pieces of code running on multiple servers. We would like to monitor the health and performance of these scripts and warn us if something has crashed. Here we outline a simple 'check in' system whereby we can see which programs are running and which are not. 
                    </p>

                    <p>
                    Below we set up a CentralHub class that can be used to 
                    monitor the status of several remote subsystems (1 - 4). Each subsystem reports in through a connection to the central hub. A thread running in central hub code continually checks the status of the connections. The class methods are explained in the docstrings and running comments.
                    </p>
                    
                </div>
             

<pre>
<code class='python'>
# import the required python modules
import threading
import time
import Pyro4

# hide methods unless explicitly exposed
Pyro4.config.REQUIRE_EXPOSE = True

class CentralHub(object):
    '''
    This is exposed through Pyro4 and monitors the status of the
    individual helper processes running.
    '''

    def __init__(self, ntimes, sleeptime):
        '''
        Set up the monitor and start monitoring. The variables 
        ntimes and sleeptime control the timeouts of the checks.

        Parameters
        ----------
        ntimes : int
            The number of checks after a True value where
            the status will remain True
        sleeptime : int 
            The amount of time between each poll check
        
        Attributes
        ----------
        monitors : array-list
            List of system IDs to monitor

        Returns 
        -------
        None
        '''
        self._ntimes = ntimes
        self._sleeptime = sleeptime
        # set up the subsystem IDs - these are used for checking in
        self.monitors = sorted(['system1', 'system2', 'system3','system4', 'system5'])
        # initialise the status for each connection to be False
        self.status = {monitor: False for monitor in self.monitors}
        # initialise the number of connections to 0
        self.connections = {monitor: 0 for monitor in self.monitors}
        # set up a thread to monitor the connections via the 
        # print_status() function 
        self.print_thread = threading.Thread(target=self.print_status)
        self.print_thread.daemon = True
        self.print_thread.start()

    def single_report_in(self, name):
        '''
        Update the connection status for a given monitored system

        Parameters
        ----------
        name : str
            The name of the system reporting in

        Returns
        -------
        Upon completion, a dictionary containing:
        ok : bool
            Status of the update
        name : str
            Name of the connection that just reported
        previous : dict 
            connections : old connections 
            status :  old status   

        Upon failure, a dictionary containing:
        ok : bool 
            Status of the update
        reason : str
            Description of the failure
        '''
        # make all characters lowercase
        lower_name = name.lower()
        # check the system checking in is registered
        # if not return False with short explanation
        if lower_name not in self.monitors:
            return {'ok': False,
                    'reason': 'No monitor for {}. Available monitors: {}'.format(
                        name, list(self.monitors))}
        # update the old connection status
        old_connections = self.connections[lower_name]
        # reset the connection to OK
        self.connections[lower_name] = self._ntimes
        # store the previous status
        old_status = self.status[lower_name]
        # update the current status
        self.status[lower_name] = True
        # return OK (True) and a short summary of connection/status
        return {'ok': True, 'name': lower_name, 'previous': {
            'connections': old_connections, 'status': old_status,
        }}

    # expose this method to objects connecting via Pyro4
    @Pyro4.expose
    def report_in(self, *names):
        '''
        Method to report in to central hub. This is
        used to confirm a system is alive

        Parameters
        ----------
        *names : array-like
            Name(s) of the system reporting in

        Returns
        -------
        out : array-like
            List of systems reporting in
        '''
        # split names into a list of systems
        # that are checking in
        out = []
        for name in names:
            out.append(self.single_report_in(name))
        return out

    def print_status(self):
        '''
        Display the current status of connections to 
        Central Hub

        Parameters
        ----------
        None

        Returns
        -------
        None
        '''
        while True:
            print(self.status)
            self.update_connections()
            time.sleep(self.sleeptime)

    def update_connections(self):
        '''
        Update the current connections status

        Parameters
        ----------
        None

        Returns
        -------
        None
        '''
        for monitor in self.monitors:
            if self.connections[monitor] > 0:
                self.connections[monitor] -= 1
            if self.connections[monitor] <= 0:
                self.connections[monitor] = 0
                self.status[monitor] = False   

</code>
</pre>

                <div class='problem_explanation'>
                    <p>
                    Finally we create a <code class='python'>main()</code> 
                    function to set up our Central Hub
                    and get ready for monitoring the subsystems. We set values for <code class='python'>sleeptime</code> and <code class='python'>ntimes</code> according to how frequently we want to poll for the global connection status and the level of persistance each connection maintains. 
                    </p>                    
                </div>

<pre>
<code class='python'>
def main():
    '''
    Setup the central hub, expose it via Pyro4
    using the name server and enter a request loop
    waiting for connections. 

    Parameters
    ----------
    None

    Returns
    -------
    None
    '''
    hub = CentralHub(
        ntimes=5,
        sleeptime=30
    )
    daemon = Pyro4.Daemon(args.daemon_host)
    ns = Pyro4.locateNS()
    uri = daemon.register(hub)
    ns.register('central.hub', uri)
    daemon.requestLoop()    

if __name__ == 'main':
    main()             

</code>
</pre>

                <div class='problem_explanation'>
                    <p>
                    With a central hub set up we can now add the following
                    to each of our subsystems. Subsystems check in with the central hub at a suitable point in their operation cycle (e.g. start/end of the main control loop).
                    </p>      
                </div>

<pre>
<code class='python'>
import Pyro4

hub = Pyro4.Proxy('PYRONAME:central.hub')

# Example check in from the system1 program:
hub.report_in('system1')             

</code>
</pre>  

                <div class='problem_explanation'>
                    <p>
                    This example assumes we have a Pyro4 name server running. It is possible for objects to communicate without a name server (using the unique uri strings). As we have several Pyro4 systems communicating I prefer to use a name server. I will let you figure out which you prefer.
                    </p>      
                </div>              
            
                <div class='break'></div>

                <div class='highlight_reference'>
                    <p>This page uses the <a href="https://github.com/isagalaev/highlight.js">Javascript Syntax Highlighter</a> by Ivan Sagalaev</p>
                </div>
            </div> <!-- end of narrowwidth --> 

        </div>
    </div>   
</body>
</html>
