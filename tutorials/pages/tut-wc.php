<?php
	$title = 'Beginner - WC';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Word Count</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'begin';
    $comm_sec = 'Beginner';   
    $comm_lists =   '   
                        <li>wc -c displays the byte count of the file</li>
                        <li>wc -m displays the character count of the file</li>
                        <li>wc -l displays the newline count of the file</li>
                        <li>wc -w displays the word count of the file</li>
                    ';
    $comm_name = 'WC';
    $comm_desc = 'By using the wc command, a user can determine the contents of a file in terms of word count, line count, and character count';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-wc.PNG" alt="Screenshot">
                        <p>In the example image, the user first used the cat touchfile command to see the exact contents of file named touchefile. Then the users issues the command: wc touchfile. This displays that there are 4 lines, 28 words, and 132 chracters present in the file.</p>
                        ';
    $comm_previousL = 'tut-tail.php';
    $comm_nextL = 'tut-tar.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>