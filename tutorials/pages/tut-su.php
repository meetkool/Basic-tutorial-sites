<?php
	$title = 'Beginner - SU';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Super User</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'begin';
    $comm_sec = 'Beginner';
    $comm_lists =   '   
                        <li>su -login or -l would prompt the user to login just as the user expects </li>
                        <li>su -c or --command specifies which command </li>
                    ';
    $comm_name = 'SU';
    $comm_desc = 'Related to the sudo command. Allows you to switch to another user. This will require you to enter a password if the user you are trying to login in has a password. Not specifying a username will default to entering the super user. The super user is like the administrator, it has root access.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-su.PNG" alt="Screenshot">
                        <p>In the example above, the user is trying to log onto another user and the terminal is prompting the user to login with the password of the other account.</p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-sudo.php';
    $comm_nextL = 'tut-mkdir.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>