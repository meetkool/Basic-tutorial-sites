<?php
	$title = 'Beginner - GZIP';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Gzip File Compression Tool</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'begin';
    $comm_sec = 'Beginner';   
    $comm_lists =   '   
                        <li>gzip by itself will compress a file</li>
                        <li>gzip -d will decompress a file</li>
                        <li>gzip -f forces a file to compress</li>
                        <li>gzip -r directory-name compresses an entire folder</li>
                        <li>gzip -k file-name compresses a file and keeps a copy of the uncompressed file</li>
                    ';
    $comm_name = 'GZIP';
    $comm_desc = 'Similar to tar, gzip is a file compression tool used to decrease the file size of a single file or folder so that it can be transferred more easily. The gzip command allows you to both compress and decompress files.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-gzip.PNG" alt="Screenshot">
                        <p>In the image above, the user first issues an ls command to view the files in the directory, where we see a file named copyfile. The user then issues the command: gzip copyfile to compress the file. The ls command is entered again and we see that copyfile has now been compressed to copyfile.gz. The user then issues: gzip -d copyfile.gz to decompress the file. After another ls command, copyfile.gz is once again just copyfile.</p>
                        ';
    $comm_previousL = 'tut-tar.php';
    $comm_nextL = 'tut-cal.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>