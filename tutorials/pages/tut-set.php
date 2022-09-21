<?php
	$title = 'Expert - Set &amp; Unset';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Set &amp; Unset</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'expert';
    $comm_sec = 'Expert';
    $comm_lists =   '   
                        <li>set -h  Remember location of commands as they are looked up.</li>
                        <li>set -n  Read commands but do not execute them.</li>
                    ';
    $comm_name = 'SET / UNSET';
    $comm_desc = 'Set is used to define/view shell and environment variables along with shell functions. When no arguement is given for the command, every environment variable is displayed in the terminal. Unset is used to delete already existing environment variables. ';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-set.PNG" alt="Screenshot">
                        <p>In the example above, the user has created a variable, ar, and set its value to 4. This is a new environment variable that will be assigned a value of 4. After creating this variable, the set command is used without any arguements to display every environment and shell variable in the system. The listing is extensive, and the newly created variabe \'ar\' is able to be seen if the page is scrolled with its assigned value being 4. </p>
                        ';//Duplicate this as many times as you have screenshots
                        
                        '
                        <img class="tut-image" src="../../assets/images/tut-unset.PNG" alt="Screenshot">
                        <p>In the example above, the user has deleted the \'Columns\' variable. When the set command is given to show the current shell and environment variables, it no longer exists. </p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-ssh.php';
    $comm_nextL = 'tut-dmesg.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>
