<?php
	$title = 'Intermediate - SFTP';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Secure File Transfer Protocol</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'inter';
    $comm_sec = 'Intermediate';
    $comm_lists =   '   
                        <li> sftp> get (file) After establishing a connection with the server, this command allows a user to download files and directions from the sftp server</li>
                        <li> sftp>? After establishing a connection with the server, this command will provide a short description of all the available commands one can use on the system</li>                     
                    ';
    $comm_name = 'SFTP';
    $comm_desc = 'SFTP is used to transfer files securely over a network connection whether it’s uploading or downloading files remotely. SFTP adds a layer of encryption through a Secure Shell (SSH) session of transfer requiring a public key authentication to send a file and receive it. This is a great improvement from its less secure predecessor, FTP.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-sftp.PNG" alt="Screenshot">
                        <p>In the example above, the user wishes access the serenity server via SFTP at the Rochester Institute of Technology. The format for an SFTP connection is username@serverIPAddressorDomainName. A login prompt is then given, and if the credentials match, the user has access to their server space.</p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-traceroute.php';
    $comm_nextL = 'tut-ssh.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>