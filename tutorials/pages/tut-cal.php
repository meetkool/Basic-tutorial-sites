<?php
	$title = 'Beginner - CAL';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Calendar</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'begin';
    $comm_sec = 'Beginner';   
    $comm_lists =   '   
                        <li>cal -m displays a calendar with Monday displayed as the first day of the week</li>
                        <li>cal -j displays the julian dates on the calendar</li>
                        <li>cal -y displays a calendar for the current year</li>
                    ';
    $comm_name = 'CAL';
    $comm_desc = 'The cal command is used to show a calendar to the user. The command can be customized to show a specific month of a certain year and is input as: cal -option month-number year.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-cal.PNG" alt="Screenshot">
                        <p>The example image show the user entering the cal command without options or a specific month or year. By default, the command will show you the current month of the current year and will highlight the day. In the example, it shows that the current date is April 16th, 2018.</p>
                        ';
    $comm_previousL = 'tut-gzip.php';
    $comm_nextL = 'tut-man.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>