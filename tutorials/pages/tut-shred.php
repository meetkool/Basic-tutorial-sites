<?php
	$title = 'Intermediate - SHRED';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Shred</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'inter';
    $comm_sec = 'Intermediate';
    $comm_lists =   '   
                        <li>shred -u (option) file1.txt (file name) (The following command uses the default shredding method of overwriting data from file1.txt and removing the file after overwriting</li>
                        <li>shred /dev/hda6 (directory) (Here we are completing deleting all files in the directory saving space on the disk</li>
                        
                    ';
    $comm_name = 'SHRED';
    $comm_desc = 'Vulnerabilities are everywhere so at times we need to get rid of sensitive information or content for security purpose. The command shred helps in deleting important information that needs to be hidden by overwriting a file to hide its content or optionally deleting it.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-scp.PNG" alt="Screenshot">
                        <p>In the example above, the user completely overwrites file1 using "shred" to hide the content within the file.</p>
                        ';
    $comm_previousL = 'tut-scp.php';
    $comm_nextL = 'tut-sort.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>