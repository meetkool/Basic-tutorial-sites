<?php
	$title = 'Expert - NSLOOKUP';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Name Server Lookup</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'expert';
    $comm_sec = 'Expert';
    $comm_lists =   '   
                        <li>nslookup -z  Will compress the data that is to be transferred. </li>
                        <li>nslookup -a  Activates archive mode, which allows copying files recursively and preserves symbolic links, file permissions, user & group ownerships and timestamps. </li>

                        
                    ';
    $comm_name = 'NSLOOKUP';
    $comm_desc = 'Name server lookup is a tool used to learn information concerning a domain by querying DNS. DNS is the service that allows IP addresses to be translated into human-readable web links such as google.com. When entering a domain name, such as nslookup microsoft.com A response will come in giving the IP Address and other information of a domain. A reverse dns lookup can be done by giving the ip address as an arguement instead of the translated address, and the translated address will be given in return.



. 
';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-nslookup.PNG" alt="Screenshot">
                        <p>In the example above, the user wishes to lookup the domain information of rit.edu. The system looks in its records and retrurns a non-authoritative answer concerning the server and address information. This is very useful when troubleshooting address-related issues.  </p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-rsync.php';
    $comm_nextL = 'tut-crontab.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>