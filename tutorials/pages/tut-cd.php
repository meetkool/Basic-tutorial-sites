<?php
	$title = 'Beginner - CD';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Change Directory</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'begin';
    $comm_sec = 'Beginner';
    $comm_lists =   '   
                        <li>cd  takes you to your home directory </li>
                        <li>cd .. takes you back up one level to the parent directory</li>
                        <li>cd myDirectory takes you to the specified directory</li>
                    ';
    $comm_name = 'CD';
    $comm_desc = 'Short for Change Directory, the cd command prints out the current directory/folder you are in. Navigating your directories is like a mouse navigating a maze. You can only see one place at a time. Unix is very handy for quickly getting around your file structure. It was once the only way to access directories and files on a computer. Now we have a Graphical User Interface with buttons and icons to navigate through your computer’s files. GUIs restrict the user to the developer’s will. Now that you know some Unix commands, you will be exposed to the deep expansive file system that actually lies on your machine.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-cd.PNG" alt="Screenshot">
                        <p>In the example above, the user uses pwd to show the current directory. After changing directory with cd to his Desktop, the user prints the working directory again to show that he has indeed changed directories.</p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-pwd.php';
    $comm_nextL = 'tut-ls.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

        <?php
	include $path.'assets/inc/footer.php';
?>
