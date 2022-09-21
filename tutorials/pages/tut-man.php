<?php
	$title = 'Beginner - MAN';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Manual</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'begin';
    $comm_sec = 'Beginner';
    $comm_lists =   '   
                        <li>man (commandName) this will give the specifics/descriptions of the command</li>
                    ';
    $comm_name = 'MAN';
    $comm_desc = 'Man stands for manual, this command outputs a large explanation of the usage, definition and parameters of the command. It is very useful to find out more than what is listed here in these tutorials as we do not list every possible parameter as it may be too advanced.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-man1.PNG" alt="Screenshot">
                        <p>In the example above, the user used "man ls". In the image below, the manual for the ls command is displayed. It gives information such as a small description of the command, and what options can be used.</p>
                        <img class="tut-image" src="../../assets/images/tut-man2.PNG" alt="Screenshot">
                        ';
    $comm_previousL = 'tut-cal.php';
    $comm_nextL = 'tut-date.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>