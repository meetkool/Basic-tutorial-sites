<?php
	$title = 'Intermediate - SOURCE';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Source</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'inter';
    $comm_sec = 'Intermediate';
    $comm_lists =   '   
                        <li>source first.txt (filename) (This command takes the contents of the specified file and executes it, if there are any errors the return value from sources is the return value that will be returned)</li>
                        <li>2.	source /path/to/file (directory) (This works the same it just reads and executes commands given from the filename in the current shell)</li>
                        
                    ';
    $comm_name = 'SOURCE';
    $comm_desc = 'The source command evaluates a file or resource as Tcl script which is a language that provides variables, procedures and control structures. This command is mainly used to execute files in which reads a file and interprets what the script means and allowing the user to make changes in the current shell itself.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-source.PNG" alt="Screenshot">
                        <p>In the example above, the user locates the location of the myscript.sh file and evaluates everything within that file.</p>
                        ';
    $comm_previousL = 'tut-sort.php';
    $comm_nextL = 'tut-grep.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>