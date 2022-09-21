<?php
	$title = 'Expert - RSYNC';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">RSYNC</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'expert';
    $comm_sec = 'Expert';
    $comm_lists =   '   
                        <li>rsync -z  Will compress the data that is to be transferred. </li>
                        <li>rsync -a  Activates archive mode, which allows copying files recursively and preserves symbolic links, file permissions, user & group ownerships and timestamps.</li>                   
                    ';
    $comm_name = 'RSYNC';
    $comm_desc = 'The rsync utility is used to copy and synchronize files both locally and remotely in Unix systems. Can be used to perform backups and mirroring between machines. It takes in two arguments, a source followed by a destination. Their absolute paths are used if the file transfer is local.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-rsync.PNG" alt="Screenshot">
                        <p>In the example above, the directory test1 is transferred to test2. This is an example of a local transfer using rsync. If a destination location was not already created, it would be created by the utility.</p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-fdisk.php';
    $comm_nextL = 'tut-nslookup.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>