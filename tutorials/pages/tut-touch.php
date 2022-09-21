<?php
	$title = 'Beginner - TOUCH';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Touch</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'begin';
    $comm_sec = 'Beginner';
    $comm_lists =   '   
                        <li>touch -a  sets the access time ONLY</li>
                        <li>touch -m  sets modification time ONLY</li>
                        <li>touch -t  formats in a full timestamp [CC][YY]MMDDhhmm[ss]</li>
                    ';
    $comm_name = 'TOUCH';
    $comm_desc = 'The touch command changes the timestamps of whichever file the user chooses. A timestamp in linux can be 1 of 3 different versions.
	The access timestamp, which is the time the file was last read, the modification timestamp, the last time content from the file was modified, and the change time, which is when the user changed the permissions and whenever the file was ever modified, the timestamp will be updated. As well has the ability to make empty files.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-touch.PNG" alt="Screenshot">
                        <p>In the screenshot, the user creates an empty file called touchfile.</p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-rmdir.php';
    $comm_nextL = 'tut-vi.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>