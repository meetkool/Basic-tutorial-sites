<?php
	$title = 'Intermediate - DIFF';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Difference</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'inter';
    $comm_sec = 'Intermediate';
    $comm_lists =   '   
                        <li>diff file1.txt file2.txt (In this example this output will display which lines between both files are different)</li> 
                    ';
    $comm_name = 'DIFF';
    $comm_desc = 'Diff also known as compare or difference is a command used to analyze two files and observe their difference. This comes in handy when you have file that are similar, but slightly different and you want to make them identical.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-diff.PNG" alt="Screenshot">
                        <p>In the example above, the user finds the difference between file1 and file2 to be "lcl" after using the command.</p>
                        ';
    $comm_previousL = 'tut-mount.php';
    $comm_nextL = 'tut-comm.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>