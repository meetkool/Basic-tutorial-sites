<?php
	$title = 'Intermediate - COMM';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Compare</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'inter';
    $comm_sec = 'Intermediate';
    $comm_lists =   '   
                        <li>comm testfile (file one) testfile2 (file two)  (In this example this output will display which lines between both files are different)</li>
                        <li>comm -3 (suppress column 3) testfile (file one) testfile2 (file two) (With this command we only show two columns where the third one is removed. You can enter which column number you would like to suppress)</li>
                    ';
    $comm_name = 'COMM';
    $comm_desc = 'Let’s say we have two files and we want to compare the two line by line to see if they share anything in common, the "comm" commands sorts two files and compares them. The results are outputted in three columns, one that contains file one,file two and then the third one shares the similarities between the two.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-comm.PNG" alt="Screenshot">
                        <p>In the example above, the user compares file1 with file2 but did not find any similarities because the files are not in sorted order.</p>
                        ';
    $comm_previousL = 'tut-diff.php';
    $comm_nextL = 'tut-scp.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>