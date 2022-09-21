<?php
	$title = 'Intermediate - WHICH';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Which</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'inter';
    $comm_sec = 'Intermediate';
    $comm_lists =   '   
                        <li>which -a [filename] (prints all matching pathnames of each matching filename) </li>
                        <li>which sh (locates the pathname of the file which would be run if the "sh" command were executed)</li>
                    ';
    $comm_name = 'WHICH';
    $comm_desc = 'At times a user may forget where an executable file is, so this command provides the user with the full path of shell commands that would run by the shell if a given was issued.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-which.PNG" alt="Screenshot">
                        <p>In the example above, the user is locating the pathname of the file which would be run if the "cd" command were executed.</p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-alias.php';
    $comm_nextL = 'tut-who.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>