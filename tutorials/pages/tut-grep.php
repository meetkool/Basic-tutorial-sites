<?php
	$title = 'Intermediate - GREP';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Global Regular Expression Print</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'inter';
    $comm_sec = 'Intermediate';
    $comm_lists =   '   
                        <li>greptestfile/myPC/testdirectory (searches for any file in the /myPC/testdirectory path that contains the text ‘myPC’)</li>
                        <li>grep wel testfile (searches and matches any words containing "wel" such as welcome)</li>
                        <li>grep -c hi|bye /myPC/testdirectory/testfile (reports number of times the pattern has been matched for each file using -c(count) option)</li>
                    ';
    $comm_name = 'GREP';
    $comm_desc = 'Short for "global regular expression print", the grep command searches a file for keywords and returns the line in which it appears in the file.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-grep.PNG" alt="Screenshot">
                        <p>In the example above, the user is using the grep command to search the file 2 directory for the keyword "line". A single line contains the pattern so grep outputs it to to the terminal with the keyword highlighted.</p> 
                        ';
    $comm_previousL = 'tut-source.php';
    $comm_nextL = 'tut-chmod.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>