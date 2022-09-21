<?php
	$title = 'Beginner - Paste';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Paste</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'begin';
    $comm_sec = 'Beginner';
    $comm_lists =   '   
                        <li>paste -d”-” file1.txt file2.txt a deliminter can be specified using the -d option</li>
						<li>paste -s file1.txt file2.txt files can be merged sequentially using the -s option</li>
                    ';
    $comm_name = 'PASTE';
    $comm_desc = 'This command combines lines from multiple files. 
	Then it sequentially writes the correspondoing lines from each file separated by a tab delimiter on the unix terminal.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-paste.PNG" alt="Screenshot">
                        <p>In the example above, the user copies the line from "copyfile" into "movefile" displayed in parallel.</p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-cut.php';
    $comm_nextL ='tut-head.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>