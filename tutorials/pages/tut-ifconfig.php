<?php
	$title = 'Intermediate - IFCONFIG';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Interface Configuration</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'inter';
    $comm_sec = 'Intermediate';
    $comm_lists =   '   
                        <li>ifconfig -a  The a flag will display all interfaces of the system, including those that are inactive</li>
                        <li>ifconfig (interfaceName) Will only display information of a given interface represented by the interface name</li>
                        <li>ifconfig (interfaceName) up  Will activate the given network interface so long as it exists</li>
                    ';
    $comm_name = 'IFCONFIG';
    $comm_desc = 'The ifconfig command displays the network and configuration information, such as the IP and MAC addresses of the machine. More information regarding the network interface, such as the subnet mask and information concerning the different interfaces of a machine can also be found using this command.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-ifconfig.PNG" alt="Screenshot">
                        <p>In the example above, the user wishes to view their network information. The IP address, subnet mask, MAC address, broadcast information and other network metrics are available for viewing.</p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-ping.php';
    $comm_nextL = 'tut-traceroute.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>