<?php
	$title = 'Intermediate - SSH';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Secure Socket Shell</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'inter';
    $comm_sec = 'Intermediate';
    $comm_lists =   '   
                        <li>ssh -l username example.com  Allows user to enter their username as a seperate entity from the domain that is being logged into</li>
                        <li>ssh -h  This command will provide a short description of all the available usages of the ssh protocol</li>
                    ';
    $comm_name = 'SSH';
    $comm_desc = 'Secure Socket Shell is a network protocol that allows a user to securely log in and work on a remote computer using an encrypted connection between two hosts. This protocol allows for safe file transfers and administration from users in remote locations.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-ssh.PNG" alt="Screenshot">
                        <p>In the example above, the user wishes access the serenity server via SSH at the Rochester Institute of Technology. The format for an SSH connection is username@serverIPAddressorDomainName. A login prompt is then given, and if the credentials match, the user has access to their server space.</p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-sftp.php';
    $comm_nextL = 'tut-quiz-inter.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>