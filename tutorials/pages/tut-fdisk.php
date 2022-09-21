<?php
	$title = 'Expert - FDISK';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">FDISK</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'expert';
    $comm_sec = 'Expert';
    $comm_lists =   '   
                        <li>fdisk -l  Lists all available partitions on the machine. </li>

                        
                    ';
    $comm_name = 'FDISK';
    $comm_desc = ' Fdisk is a disk partitioning tool that allows users to divide the storage between hard disks into one or more logical disks. Partitioning can be very useful for data organization and recovery in case of disk failure. It can also potentially increase system performance. Fdisk guides users through the process via a series of menus and options.
. 
';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-fdisk1.PNG" alt="Screenshot">
                        <p>In the example above, the user checks which disks are available using the fdisk -l commmand. The sda1 disk is going to be partitioned, so that disk location is passed in as an arguement for fdisk. </p>
                        ';//Duplicate this as many times as you have screenshots
'
                        <img class="tut-image" src="../../assets/images/tut-fdisk2.PNG" alt="Screenshot">
                        <p>In the example above, the user has gone through and partitioned the disk successfully. The \'n\' was entered initially in order to create a new partition. The partition is going to be a primary partition, so the letter \'p\' was entered next. It is the first partition, so \'1\' was entered next. The default values were selected for the first and last sectors of memory. This led to the successful creation of a new partition.</p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-du.php';
    $comm_nextL = 'tut-rsync.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>