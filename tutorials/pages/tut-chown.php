<?php
	$title = 'Intermediate - CHOWN';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Change Owner</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'inter';
    $comm_sec = 'Intermediate';
    $comm_lists =   '   
                        <li>chown newuser testfile.txt (current file owner gives ownership to "newuser")</li>
                        <li>chown -hR (option) root (owner) /testdirectory (changes owner of directory "/testdirectory" and the subfiles in it to "root")</li>
                        <li>chown -R (option) newuser:newgroup /testdirectory (uses the recursive option to add a user and group together. Now they have ownership of every file, subdirectory, and subdirectory files in the directory "testdirectory")</li> 
                    ';
    $comm_name = 'CHOWN';
    $comm_desc = 'Once permissions for a file or directory are set, it is crucial to set who has ownership over the file or directory. Short for Change Owner, the chown command changes ownership of files and directories which can be a user and a group.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-chown.PNG" alt="Screenshot">
                        <p>In the example above, the user changes the permissions of "file1" from the default root account to student.</p>
                        ';
    $comm_previousL = 'tut-chmod.php';
    $comm_nextL = 'tut-wget.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>