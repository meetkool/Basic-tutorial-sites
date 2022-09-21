<?php
	$title = 'Beginner - LS';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">List</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'begin';
    $comm_sec = 'Beginner';
    $comm_lists =   '   
                        <li>ls -l list files in long form, with file permissions, the owner, the group the owner is in, when the file was created, and the file size</li>
                        <li>ls -hl lists files in long form but makes it human-readable and prettier</li>
						<li>ls -al lists all files in directory in long form, including dot files</li>
                    ';
    $comm_name = 'LS';
    $comm_desc = 'Short for list, the ls command lists the files in the current directory. You can string flags together to get the output you want and you can list out files in a directory that you are not currently in. Dotfiles are files (or even folders) which are hidden to the user from normally printing them out on ls commands. They are inaccessible from the cd command unless explicitly written out: $bash: cd ./myHiddenDir';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-ls.PNG" alt="Screenshot">
                        <p>In the example above, the user is displaying the current files and subdirectories (directories withing directories) in the current directory.</p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-cd.php';
    $comm_nextL = 'tut-find.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

        <?php
	include $path.'assets/inc/footer.php';
?>
