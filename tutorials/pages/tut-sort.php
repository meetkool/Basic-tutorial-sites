<?php
	$title = 'Intermediate - SORT';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Sort</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'inter';
    $comm_sec = 'Intermediate';
    $comm_lists =   '   
                        <li>sort -n (option) testfile (filename) (This command sorts a file in numerical form descending from greatest to lowest by default)</li>
                        <li>sort -r (option) testfile (filename) (The following will sort all the lines in the file in reverse order to see what’s towards the end of the file)</li>
                        
                    ';
    $comm_name = 'SORT';
    $comm_desc = 'Staying organize is key when it comes structuring files. A simple way to organize the lines in a text file either numerically or alphabetically is by using the "sort" command. This command can be a great friend when you need to find specific content on a file and rearrange it so that it’s easier to read, whether it’s by number, month or reverse order. The following command can event sort mixed-case text and it’s a great way to not show duplicate content if there is any.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-sort.PNG" alt="Screenshot">
                        <p>In the example above, the user alphabetically sorts the content within the file.</p>
                        ';
    $comm_previousL = 'tut-shred.php';
    $comm_nextL = 'tut-source.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>