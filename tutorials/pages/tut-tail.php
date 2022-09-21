<?php
	$title = 'Beginner - TAIL';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Tail</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'begin';
    $comm_sec = 'Beginner';   
    $comm_lists =   '   
                        <li>tail -number file-name displays that number of lines at the end of the file</li>
                    ';
    $comm_name = 'TAIL';
    $comm_desc = 'The tail command is used mainly in scripts to display the last few lines of a file. It works like head, but works with the end of the file as opposed to the eginning.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-tail.PNG" alt="Screenshot">
                        <p>In the example, the user first issues the cat copyfile command to view the contents of the file. They then issue the command: tail -1 copyfile. This displays the last line in copyfile.</p>
                        ';
    $comm_previousL = 'tut-head.php';
    $comm_nextL = 'tut-wc.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>