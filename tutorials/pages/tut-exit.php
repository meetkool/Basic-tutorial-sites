<?php
	$title = 'Beginner - EXIT';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Exit</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'begin';
    $comm_sec = 'Beginner';   
    $comm_lists =   '   
                        <li>The exit command does not include options</li>
                    ';
    $comm_name = 'EXIT';
    $comm_desc = 'While similar to the logout command, the two are infact different. Logout simply logs out the users and disconnects them from all active tasks. On the other hand, exit actually exits the shell, therefore stopping all tasks on the machine. In most cases, the shell is set to auto restart, but there is a chance that it does not. Between the two, it is recommended that you always use the logout command over exit.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-exit1.PNG" alt="Screenshot">
                        <p>The example above shows the user entering the exit command on the command line. The system does have the shell set to auto restart, so this simply closes the terminal session for the user, as seen in the image below.</p>
                        <img class="tut-image" src="../../assets/images/tut-exit2.PNG" alt="Screenshot">
                        ';
    $comm_previousL = 'tut-logout.php';
    $comm_nextL = 'tut-echo.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>