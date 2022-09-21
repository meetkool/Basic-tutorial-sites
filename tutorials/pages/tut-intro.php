<?php
	$title = 'Beginner - Intro';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Introduction</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'begin';
    $comm_sec = 'Beginner';   
    $comm_name = 'Intro';
    $intro_desc = 'When getting started with Unix, there are a few key terms that you need to know. Each one is vital to the Unix user, and to be able to use your system to it\'s full extent, it is essential to understand what these terms mean. The terms I am refferring to are: terminal, commands, directories, and shell.';
    $intro_term =    '
                        <p>The UNIX terminal is a command line interface for a computer system. There is no special graphical interface for a terminal, and users must input established commands by direct keyboard input to achieve their desired actions. When mastered by a unix user, the terminal provides a very efficient way to navigate, configure, change or monitor a system. Terminals allow the user to interact with a computer through direct input as opposed to clicking buttons or utilizing a fancy interface.</p>
                        ';//Duplicate this as many times as you have screenshots
    $intro_comm = '<p>A command is an instruction that is typed by the user to tell the computer what to do. Using a command is usually issued by typing in the command line followed by pressing the ENTER key which passes on into the shell. The commands in UNIX are usually either built-in or external commands. A command usually consists of a command name followed by a “string” that comprises of options and arguments. Most commands have a fair amount of options that usually require arguments, but some commands do not accept arguments. As well as not having that many options. There is a “clear” command that removes any previous commands and outputs so that the user may have a clean display screen.</p>';
    $intro_direct = '<p>The UNIX terminal gives you another way to move around the file structure on your computer. Normally, you could use the default File Explorer which gives you a Graphical User Interface with buttons and fancy menus to navigate through your folders and files. Although UNIX removes the simplicity of the GUI, it gives you more power and control with how you arrive at where you want to be. You are able to display files of only a specific size, files with a certain word in their name, files of a certain type only, directories with specific subdirectories, etc. The GUIs will restrict how you organize your files and folders, how you sort them, how you name them, how you interact with them. With UNIX you can more easily access and modify the specific group of files and directories you want. In the shell, directories are bold and do not have a file type extension next to it.</p>';
    $intro_shell = '<p>The shell provides the interface to the UNIX system. It is the command-line interface between the user and internal parts of the operating system. Once logged into the system, the user is in the shell and interacts with it.  Its primary purpose is to receive input from the user and execute programs based on the input. The program’s output is then displayed when it finishes executing. The user can also browse directories and view processes that are currently running. The shell is located a layer above the operating system, so operations can be performed that aren’t always possible using the GUI. Examples include deleting locked files or moving files within the system folder.</p>';
    $comm_nextL = 'tut-pwd.php';
    include ($path.'assets/inc/tutorial-desc-intro.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>