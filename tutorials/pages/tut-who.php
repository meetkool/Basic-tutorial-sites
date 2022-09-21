<?php
	$title = 'Intermediate - WHO';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Who</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'inter';
    $comm_sec = 'Intermediate';
    $comm_lists =   '   
                        <li>who -aH (displays all information about the user and categorizes the data by corresponding columns)</li>
                        <li>who am i (displays information only for the terminal session where the command was issued)</li> 
                    ';
    $comm_name = 'WHO';
    $comm_desc = 'THis command figures out and displays which users are currently logged onto the machine.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-who.PNG" alt="Screenshot">
                        <p>In the example above, the user is displaying the username, line, and time of all currently logged-in sessions.</p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-which.php';
    $comm_nextL = 'tut-ping.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>