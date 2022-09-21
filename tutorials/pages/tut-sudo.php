<?php
	$title = 'Beginner - SUDO';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Super User Do</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'begin';
    $comm_sec = 'Beginner';
    $comm_lists =   '   
                        <li>sudo apt-get update updates the packages of your computer</li>
                        <li>sudo -V prints our the version and the number</li>
                        <li>sudo -K this removes the timestamps</li>
                    ';
    $comm_name = 'SUDO';
    $comm_desc = 'Be careful with this command! Used when you do not normally have admin privileges on this computer, usually this is for good reason and is set up to protect valuable data, only use the sudo command if necessary and if you are sure you know what you are doing/changing. Can be used on every command, it is a prefix that allows administrative action/override of commands.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-sudo.PNG" alt="Screenshot">
                        <p>In the example above,downloads the package lists from the repositories and "updates" them to get information on the 
						newest versions of packages and their dependencies.</p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-find.php';
    $comm_nextL = 'tut-su.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>