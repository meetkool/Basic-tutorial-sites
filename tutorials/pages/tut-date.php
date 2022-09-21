<?php
	$title = 'Beginner - DATE';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Date and Time</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'begin';
    $comm_sec = 'Beginner';   
    $comm_lists =   '   
                        <li>date -d=STRING allows the user to view the date of specific day. Ex. date -d="next mon" outputs the date of next monday</li>
                        <li>date -s sets the system date to the user imput after -s</li>
                        <li>date -u displays the universal time</li>
                        <li>date +%A displays the current day name</li>
                        <li>date +%B displays the current month name</li>
                        <li>date +%D displays date in MM/DD/YY format</li>
                    ';
    $comm_name = 'DATE';
    $comm_desc = 'The date command does exactly what it sounds like. It displays the date and time specifed. Using date by itself without options will return the current date and time set on the system.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-date.PNG" alt="Screenshot">
                        <p>The example show that when the user inputs the date command by itself, it returns the unformatted date and time. In this case, the date is Monday, April 16th, 2018, and the time is 2:20 PM.</p>
                        ';
    $comm_previousL = 'tut-man.php';
    $comm_nextL = 'tut-logout.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>