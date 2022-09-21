<?php
	$title = 'Expert - Crontab';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Crontab</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'expert';
    $comm_sec = 'Expert';
    $comm_lists =   '   
                        <li>df -h  Presents disk information in a human readable format.</li>
                        <li>df -l  Limits the list of information to local file systems. </li>
                        <li>df --total  Produces a grand total of disk space. </li>
                    ';
    $comm_name = 'CRONTAB';
    $comm_desc = 'Cron is a daemon that is able to execute specific commands/scripts at specific times. Crontab can be used to schedule important tasks such as backup files or generate logs. To edit the crontab file, enter the command crontab -e. Crontab works using time and command arguments. After typing crontab -e, insert the action or script you wish to happen by typing it into the page using the command \'crontab -e\'. If a shell script is used for a task to be completed, the path to the script can be placed in the /etc/cron.daily, hourly, monthly or weekly files.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-cron1.PNG" alt="Screenshot">
                        <p>In the example above, the user wishes to go directly into the crontab file and enter new information. This file is located in the /etc/ directory.</p>
                        
                        <img class="tut-image" src="../../assets/images/tut-cron2.PNG" alt="Screenshot">
                        <p>After opening the file with a text editor, actions can now be scheduled using cron. The pattern of cron follows format for entries: minuite, hour, dayOfMonth, month, dayOfWeek, commandOrScriptToExecute. For time measurements that are irrelevant, an asterisk is placed instead of a number. The action that would be completed on line 16 would be done at the 53 minuite mark of the first hour of the first day of every month (on any day of the month and any day of the week).</p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-nslookup.php';
    $comm_nextL = 'tut-quiz-expert.php';#QUIZ?
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>