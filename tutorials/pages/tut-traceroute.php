<?php
	$title = 'Intermediate - TRACEROUTE';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Traceroute</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'inter';
    $comm_sec = 'Intermediate';
    $comm_lists =   '   
                        <li>traceroute -m 35  The m flag, followed by a number, changes the maximum number of hops allowable for a  packet to reach its destination. This is called TTL (Time to Live)</li>
                        <li>traceroute -n  Will only display information of each hop using its IP address instead of its symbolic and IP related information both being displayed</li>     
                    ';
    $comm_name = 'TRACEROUTE';
    $comm_desc = 'The traceroute command uses IP protocol to show exactly where a packet must go to reach its destination. Traceroute shows every \'hop\' that must be made for each packet to reach its destination. A hop occurs when a packet must pass through another router/network to reach its intended destination. This tool shows each hop and the time it takes to move on, making it excellent for diagnosing a broken connection.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-traceroute.PNG" alt="Screenshot">
                        <p>In the example above, the user wishes to view the hops across the internet a packet must take to reach google.com. There were 13 hops that were necessary for the packet to reach its destination. The IP of each location the packet reached is available, along with information relating to how fast it reached each destination. </p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-ifconfig.php';
    $comm_nextL = 'tut-sftp.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>