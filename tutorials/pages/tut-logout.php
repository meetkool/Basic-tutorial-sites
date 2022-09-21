<?php
	$title = 'Beginner - LOGOUT';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Logout User</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'begin';
    $comm_sec = 'Beginner';   
    $comm_lists =   '   
                        <li>The logout command does not have any specific options</li>
                    ';
    $comm_name = 'LOGOUT';
    $comm_desc = 'By issuing the logout command, the user is immediatly logged out of their session and disconnected from any taks or processes.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-logout.PNG" alt="Screenshot">
                        <p>In the example image, the user enters the logout command. This instantly closes the terminal windows and removes them from any tasks they were connected to, as seen in the image below.</p>
                        <img class="tut-image" src="../../assets/images/tut-exit2.PNG" alt="Screenshot">
                        ';
    $comm_previousL = 'tut-date.php';
    $comm_nextL = 'tut-exit.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>