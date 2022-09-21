<?php
	$title = 'Beginner - MKDIR';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Make Directory </h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'begin';
    $comm_sec = 'Beginner';
    $comm_lists =   '   
                        <li>mkdir dir1/dir2/dir3  Creates a nested directory</li>
                        <li>mkdir -v  This prints out a message for each directory created</li>
                        <li>mkdir -p This creates a "parent" directory but will not give off an error message if the directory already exists</li>
                    ';
    $comm_name = 'MKDIR';
    $comm_desc = 'Creates a directory in the current location of the user or at a given location. Unless specified, the directory will be empty. The name of the directory is given as an argument to the command. Directories can be nested into each other.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-mkdir.PNG" alt="Screenshot">
                        <p>In the example above, the user created a new directory called NewDirectory. 
						This also displays the other directories that are in the same location.</p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-su.php';
    $comm_nextL = 'tut-rmdir.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>