<?php
	$title = 'Intermediate - PING';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Ping</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'inter';
    $comm_sec = 'Intermediate';
    $comm_lists =   '   
                        <li>ping -c 4  The c flag limits the number of transmissions to the integer that follows it</li>
                        <li>ping -d Adds a timestamp for each request and reply message</li>
                        <li>ping -4 (or) -6  Checks for IPV4 or IPV6 interface (respectively) connectivity</li>
                    ';
    $comm_name = 'PING';
    $comm_desc = 'The ping command is used to test network connectivity between two machines. This is done by a host sending network data to another machine on a local or external network, and the other machine responding if a connection is established. This allows for a test of network connectivity between two machines, and can also diagnose connectivity issues over a network.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-ping.PNG" alt="Screenshot">
                        <p>In the example above, the user wishes to test their connection to google.com. The command is issued, and the website replies to the request. The connection is alive, and will continue to test the connection until the user closes the process.</p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-who.php';
    $comm_nextL = 'tut-ifconfig.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>