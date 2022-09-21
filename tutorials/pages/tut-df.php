<?php
	$title = 'Expert - DF';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Disk Free</h2>';
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
    $comm_name = 'DF';
    $comm_desc = 'Df displays the amount of disk space taken or available on a given file system. When no arguements are given, the command lists
    the memory status on every mounted file system. This information can be useful when examining how much space is still available on a machine. Arguements for this command can be a specific file system, a specific file or no arguements to show all filesystems. ';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-df.PNG" alt="Screenshot">
                        <p>In the example above, the user issues the command without any arguements or flags. This version of the command shows all mounted filesystems on the machine. The name of the filesystem, where it is mounted, and its memory capacity/usage is displayed for the user to see. </p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-dmesg.php';
    $comm_nextL = 'tut-du.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>
