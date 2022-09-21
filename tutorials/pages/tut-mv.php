<?php
	$title = 'Beginner - MV';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Move</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'begin';
    $comm_sec = 'Beginner';
    $comm_lists =   '   
                        <li>mv --backup creates a backup of all existing destination file</li>
                        <li>mv (filename) (directory) manually moving a specific file to a specific directory</li>
                        <li>mv -n never overights any existing files</li>
                    ';
    $comm_name = 'MV';
    $comm_desc = 'Moves a file or directory somewhere else. This can also be used to rename files or directories as it can move to another file or directory in the same spot just  named differently.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-mv.PNG" alt="Screenshot">
                        <p> In the screenshot, the user moves a file to a spcific directory. In this case, the movefile file was moved from the desktop to the Documents directory.</p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-vi.php';
    $comm_nextL = 'tut-cp.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>