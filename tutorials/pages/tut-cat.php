<?php
	$title = 'Beginner - CAT';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Cat</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'begin';
    $comm_sec = 'Beginner';
    $comm_lists =   '   
                        <li>cat file1.txt file2.txt > file3.txt adds the contents of file1 and file2 and writes it all out to file3</li>
                    ';
    $comm_name = 'CAT';
    $comm_desc = 'Short for concatenate, this command reads data from files and displays their contents. It can also be used to copy text files into a new document and combine contents of two text files.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-cat.PNG" alt="Screenshot">
                        <p>In the example above, the user is first displaying contents of the files "findfile" and "touchfile" separately. When the user specifies more than
						one file name, the two files are displayed one after another in the same output.</p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-cp.php';
    $comm_nextL ='tut-cut.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>