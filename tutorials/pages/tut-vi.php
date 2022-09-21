<?php
	$title = 'Beginner - VI';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Visual Instrument</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'begin';
    $comm_sec = 'Beginner';
    $comm_lists =   '   
                        <li>vi -r(filename)  allows you to edit any files that have already been edited or a system crashed you wanted it to recover</li>
                        <li>vi -s  supresses all interactive feedback.</li>
                        <li>vi (filename)  edits the specific file</li>
                    ';
    $comm_name = 'VI';
    $comm_desc = ' Vi is a built in text editor that can be used to edit the contents of files. Using the vi command will open up a text editor that
	takes up the full view of the terminal. This essentially dumps you into a completely different 
	program with its own commands that don’t respond to shell commands. ';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-vi1.PNG" alt="Screenshot">
                        <p> In the screenshot above, the user has just used the vi touchfile command and is shown the screen that will allow
						the use to edit the text file in the screenshot below. The screen also gives the options the user may use in order to edit the empty file.</p>
                        <img class="tut-image" src="../../assets/images/tut-vi2.PNG" alt="Screenshot">
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-touch.php';
    $comm_nextL = 'tut-mv.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>