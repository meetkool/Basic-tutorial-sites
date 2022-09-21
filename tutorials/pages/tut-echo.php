<?php
	$title = 'Beginner - ECHO';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Echo</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'begin';
    $comm_sec = 'Beginner';   
    $comm_lists =   '   
                        <li>echo -e allows the usage of backslash options below</li>
                        <li>echo \b adds a backspace</li>
                        <li>echo \c everything after this will not be output</li>
                        <li>echo \n inserts a newline</li>
                        <li>echo \t adds a tab to the output</li>
                    ';
    $comm_name = 'ECHO';
    $comm_desc = 'The echo command outputs a line of text for the user to see. While this is mainly used when building tasks and scripts, echo can also be used to display certain system information that is stored in system variables.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-echo.PNG" alt="Screenshot">
                        <p>In the image above, the user has enter the command \'echo "Hello world"\'. The output is the exact text the user typed, which was \"Hello world\".</p>
                        ';
    $comm_previousL = 'tut-exit.php';
    $comm_nextL = 'tut-quiz-begin.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>