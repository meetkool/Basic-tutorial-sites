<?php
	$title = 'Intermediate - SCP';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Secure Copy</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'inter';
    $comm_sec = 'Intermediate';
    $comm_lists =   '   
                        <li>scp user@test.com (host #1) :/somedir/somefile.txt user@beta.com (host #2) :/anotherdir (The following command transfer a file from one remote host to another)</li>
                        <li>scp /home/test/image*.jpg (directory) user@myhost.com (host) /home/test2/archive (directory output) (This command will copy all files from the test directory whose name starts with image as a jpg file and send to the directory archive in her home directory</li>   
                    ';
    $comm_name = 'SCP';
    $comm_desc = 'Remember using cp to copy a file? Well this command extends that command with a secure copy where both location; the source and destination are on a remote system. This means that as a user you can specify a remote host as the source or destination.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-scp.PNG" alt="Screenshot">
                        <p>In the example above, the user copies the content of file1 over to file2.</p>
                        ';
    $comm_previousL = 'tut-comm.php';
    $comm_nextL = 'tut-shred.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>