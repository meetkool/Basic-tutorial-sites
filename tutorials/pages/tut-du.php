<?php
	$title = 'Expert - DU';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Disk Usage</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'expert';
    $comm_sec = 'Expert';
    $comm_lists =   '   
                        <li>du -a  Shows disk usage of all files and directories in a given location. </li>
                        <li>du -h  Presents memory information in a human readable format.</li>
                        <li>du -s  Presents grand total of memory used in a directory. </li>
                        
                    ';
    $comm_name = 'DU';
    $comm_desc = ' The Disk Usage command shows the sizes of main directories and their subdirectories, and can show the size of individual files. This is useful for finding directories and files that consume too much space. Entering the command without arguments will show the total disk usage in the current directory. Arguments for this command can be an absolute file or directory location to find specific disk use information. 
';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-du.PNG" alt="Screenshot">
                        <p>In the example above, the user looks to find the usage of the /tmp directory. Each of the files has a given number assigned to it that represents the memory taken up by the file. At the bottom is the total memory taken up by the directory in its entirety. </p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-df.php';
    $comm_nextL = 'tut-fdisk.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>