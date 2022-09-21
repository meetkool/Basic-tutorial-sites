<?php
	$title = 'Beginner - FIND';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Finding</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'begin';
    $comm_sec = 'Beginner';
    $comm_lists =   '   
                        <li>find NAME -name flag will make an exact match search for a file.</li>
                        <li>find NAME -iname flag will make the search not case sensitive.</li>
                    ';
    $comm_name = 'FIND';
    $comm_desc = 'Finds the file or files you give it and displays their full file path name.x Quotes are necessary for finding a specific file name. A wildcard ( * ) can be used to return all locations of files of a 
    certain type/extension.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-find.PNG" alt="Screenshot">
                        <p>In the example above, the user is switching directories to the Document directory and then searches for the findfile file.
                        </p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-ls.php';
    $comm_nextL = 'tut-sudo.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>