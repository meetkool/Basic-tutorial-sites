<?php
	$title = 'Beginner - RMDIR';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Remove Directory</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'begin';
    $comm_sec = 'Beginner';
    $comm_lists =   '   
                        <li>rmdir directoryName deletes a specific directory that is empty</li>
                    ';
    $comm_name = 'RMDIR';
    $comm_desc = 'This command is used to delete a directory only if it is empty.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-rmdir.PNG" alt="Screenshot">
                        <p>In the example above, previously the user created a directory called NewDirectory. Then the user uses the RMDIR command on the NewDirectory directory. Notice how the NewDirectory has vanished.</p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-mkdir.php';
    $comm_nextL = 'tut-touch.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>