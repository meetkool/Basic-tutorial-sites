<?php
	$title = 'Beginner - TAR';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Tape Archiving</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'begin';
    $comm_sec = 'Beginner';   
    $comm_lists =   '   
                        <li>tar -c creates and archives files</li>
                        <li>tar -x will extract a file or directory</li>
                    ';
    $comm_name = 'TAR';
    $comm_desc = 'Tar is a utility used to archive files and directories';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-tar1.PNG" alt="Screenshot">
                        <p>In this example, the files "copyfile", "movefile" and "touchfile" are being zipped into an archive folder that will be created with the file name "docs.tar." We can view the contents of the zipped file by using the vi command on the newly created file. This combination of flags is used to create a backup that is named before the contents of the backup is done, and archive its contents.</p>
                        <img class="tut-image" src="../../assets/images/tut-tar2.PNG" alt="Screenshot">
                        <p>As you can see, the new TAR file has "copyfile", "movefile" and "touchfile" located inside of it. They have been archived into this new file. TAR is often used by UNIX administrators for backup purposes, especially when using magnetic tape to store their backup,  hence the full title "Tape Archiving".</p>
                        ';
    $comm_previousL = 'tut-wc.php';
    $comm_nextL = 'tut-gzip.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>