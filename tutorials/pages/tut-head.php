<?php
	$title = 'Beginner - HEAD';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Head</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'begin';
    $comm_sec = 'Beginner';   
    $comm_lists =   '   
                        <li>head -number file-name displays that number of lines at the beginning of the file</li>
                    ';
    $comm_name = 'HEAD';
    $comm_desc = 'The head command is used to display the first few lines of a file without opening the file.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-head.PNG" alt="Screenshot">
                        <p>In the example, the user first issues the cat copyfile command to view the contents of the file. They then issue the command: head -1 copyfile. This displays the first line in copyfile.</p>
                        ';
    $comm_previousL = 'tut-paste.php';
    $comm_nextL = 'tut-tail.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>