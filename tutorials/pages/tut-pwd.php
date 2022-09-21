<?php
	$title = 'Beginner - PWD';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Print Working Directory</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'begin';
    $comm_sec = 'Beginner';   
    $comm_lists =   '   
                        <li>pwd -L  displays the absolute path to the directory</li>
                        <li>pwd -P  displays the path without symbolic links</li>
                        <li>pwd --help  displays the pwd help menu</li>
                        <li>pwd --version displays the version number</li>
                    ';
    $comm_name = 'PWD';
    $comm_desc = 'Short for Print Working Directory, the pwd command simply outputs the full path of the currecnt directory you are working in. This is useful when navigating your file system and you need to know the path of a specific file';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-pwd.PNG" alt="Screenshot">
                        <p>In the example above, the user is displaying their current directory in two different place. They first use the pwd command and it shows they are in the /home/osboxes directory. Then the user changes to the desktop before using pwd again to show they are in the /home/osboxes/Desktop directory.</p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-intro.php';
    $comm_nextL = 'tut-cd.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>