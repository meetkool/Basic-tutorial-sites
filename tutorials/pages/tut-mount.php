<?php
	$title = 'Intermediate - MOUNT';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Mount</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'inter';
    $comm_sec = 'Intermediate';
    $comm_lists =   '   
                        <li>mount -t (option) type device dir (The following tells the kernel to attach the filesystem found on the designated type of device to the dir directory which is the root of the device")</li>
                        <li>mount /dir (/When using the command like this, it attempts to mount for any entry in /etc/fstab and attempts to connect the corresponding device to your machine)</li>               
                    ';
    $comm_name = 'MOUNT';
    $comm_desc = 'At some point you are going to need to connect a device to your machine. That’s when the mount command comes into play. This command allows users to access a storage device or filesystem, making it accessible and attaching it to a directory structure';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-mount.PNG" alt="Screenshot">
                        <p>In the example above, the user mounts a SD card corresponding to the directory it is located in.</p>
                        ';
    $comm_previousL = 'tut-echo.php';
    $comm_nextL = 'tut-diff.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>