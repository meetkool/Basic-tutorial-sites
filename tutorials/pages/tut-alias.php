<?php
	$title = 'Intermediate - ALIAS';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Alias</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'inter';
    $comm_sec = 'Intermediate';
    $comm_lists =   '   
                        <li>  alias cls=’clear (creates an alias to clear the screen, essentially adding a shortcut to an existing command)</li>
                        <li>alias ls=’ls –a’ (creates an alias to change the default action of the command "ls")</li>
                    ';
    $comm_name = 'ALIAS';
    $comm_desc = 'This command works the same as adding another name to a current name. The user is allowed to assign a string to be recognized as a different one, often as a command.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-alias.PNG" alt="Screenshot">
                        <p>In the example above, the user assigns the string "listit" to be recognized as the command "ls". We see that the new string functions the same as the command.</p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-history.php';
    $comm_nextL = 'tut-which.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>