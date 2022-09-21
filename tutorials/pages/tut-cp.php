<?php
	$title = 'Beginner - CP';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Copy</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'begin';
    $comm_sec = 'Beginner';
    $comm_lists =   '   
                        <li>cp -R will copy directories and everything inside them over to somewhere else </li>
                        <li>cp -d copies symbolic links rather the files. This preserves the hard links between the source code in the copies.</li>
                    ';
    $comm_name = 'CP';
    $comm_desc = 'This copies the contents of file1 to file2 and creates file2 if it does not currently exist. This is different from 
	mv because file1 will still exist whereas mv will delete file1.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-cp.PNG" alt="Screenshot">
                        <p> In the screenshot, the user copies the content from a file to another. In this instance, the user 
						copies the entire contents of movefile and created another file called copyfile.</p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-mv.php';
    $comm_nextL = 'tut-cat.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>