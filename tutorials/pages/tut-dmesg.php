<?php
	$title = 'Expert - DMESG';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Display Message or Driver Message</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'expert';
    $comm_sec = 'Expert';
    $comm_lists =   '   
                        <li>dmesg -c  Clears logs of previous test results.</li>
                        <li>dmest | grep -i usb  Filter results by searching for a specific driver/device, such as a usb in this case, by using the grep command. The -i flag disregards capitalization. </li>
                    ';
    $comm_name = 'DMESG';
    $comm_desc = 'The kernel is the core of an operating system, being the first part that is loaded into memory when a machine boots up. Dmesg allows a user to view the kernel messages that detect whether a device is functioning properly or not. This command is convenient when troubleshooting, debugging, or diagnosing hardware/device issues, as it gives the user details about hardware drivers that are loaded into the kernel.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-dmesg.PNG" alt="Screenshot">
                        <p>In the example above, the user issues the command without any arguements or flags. What results is a massive list of system status updates and checks that can be used to diagnose isseus with connected devices or other pieces of the system. The green number on the left of the output is the timestamp of when these events occurred upon running the diagnostics. </p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-set.php';
    $comm_nextL = 'tut-df.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>
