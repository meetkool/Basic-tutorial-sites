<?php
	$title = 'Intermediate - CHMOD';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Change Mode</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'inter';
    $comm_sec = 'Intermediate';
    $comm_lists =   '   
                        <li>chmod u=rwx, g=rx,o=r myfile (sets permissions of the file to the corresponding numbers or letters)</li>
                        <li>chmod 7(read, write, and execute) 5 (read, execute only) 4 (read only) myfile (the numbers are in combination to set a permission, where each digit represents the permission for the user, group, and others) </li>
                    ';
    $comm_name = 'CHMOD';
    $comm_desc = 'Short for "change mode", the chmod command allows users to change permissions of files or directories.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-chmod.PNG" alt="Screenshot">
                        <p>In the example above, the user is shown displaying the permssions of "file1" before and after they are changed. The user is using chmod to set the new permssions to "777" which means that the user, group, and all others can read, write, and execute the file. Previously, only the user could do all three.</p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-grep.php';
    $comm_nextL = 'tut-chown.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>