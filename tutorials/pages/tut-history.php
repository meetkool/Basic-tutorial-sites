<?php
	$title = 'Intermediate - HISTORY';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">History</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'inter';
    $comm_sec = 'Intermediate';
    $comm_lists =   '   
                        <li>history -anrw(options) [filename] (appends history lines from the current session to the history file,  and reads all the history lines not already read from the history line. The history file is then read and appends the content to the history list. The current history is lastly written to the history file and appends them to the history list)</li>
                    ';
    $comm_name = 'HISTORY';
    $comm_desc = 'This command provides the user with a list of up to 1000 recent commands given in the terminal.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-history.PNG" alt="Screenshot">
                        <p>In the example above, the most recent commands used by the user are listed in numerical order from the most recently executed command.</p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-wget.php';
    $comm_nextL = 'tut-alias.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>