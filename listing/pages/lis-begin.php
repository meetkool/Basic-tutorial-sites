<?php
	$title = 'Command Listing - Beginner';
    $active_lis = 'active';
    $path='../../';
	$head_title =   '
                    <h1 class="head-title">Beginner</h1>
				    <h2 class="head-title">Command Listing</h2>
                    ';
	include($path.'assets/inc/header.php');
?>

        <div>
            <ul class="content-trail">
                <li><a href="<?php echo $path;?>index.php">Home</a></li>
                <li><a href="<?php echo $path;?>listing/index.php">Command Listing</a></li>
                <li><a href="#">Beginner Command Listing</a></li>
            </ul>
        </div>

        <div class="lis-white">
            <div class="lis-term">
                <h3>pwd</h3>
                <p>Writes full pathname of current working directory</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-pwd.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
            
            <div class="lis-term">
                <h3>cd</h3>
                <p>Changes current directory to another one</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-cd.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
            
            <div class="lis-term">
                <h3>ls</h3>
                <p>Lists out names and relevant information about files in a directory</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-ls.php">Link to Tutorial</a></div>
            </div>
        </div>

        <div class="lis-black">
            <div class="lis-term">
                <h3>find</h3>
                <p>Searches for files throughout the directory tree based on certain commands</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-find.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
            
            <div class="lis-term">
                <h3>sudo</h3>
                <p>Run commands as the SuperUser</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-sudo.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
			
			<div class="lis-term">
                <h3>su</h3>
                <p>Switch to another user or run commands as another user</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-su.php">Link to Tutorial</a></div>
            </div>    
        </div>

        <div class="lis-white">
            <div class="lis-term">
                <h3>mkdir</h3>
                <p>Creates a new directory</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-mkdir.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
            
            <div class="lis-term">
                <h3>rmdir</h3>
                <p>Deletes a directory</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-rmdir.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
            
            <div class="lis-term">
                <h3>touch</h3>
                <p>Creates new empty file in the current directory</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-touch.php">Link to Tutorial</a></div>
            </div>
        </div>
            
        <div class="lis-black">
            <div class="lis-term">
                <h3>vi</h3>
                <p>Text editor built into UNIX</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-vi.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
            
            <div class="lis-term">
                <h3>mv</h3>
                <p>Move a file to another directory</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-mv.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
            
            <div class="lis-term">
                <h3>cp</h3>
                <p>Copies the content in a file to another new file</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-cp.php">Link to Tutorial</a></div>
            </div> 
        </div>
            
        <div class="lis-white">
            <div class="lis-term">
                <h3>cat</h3>
                <p>Concatenate files into a new file</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-cat.php">Link to Tutorial</a></div>
            </div>
            
			<div class="lis-dash"></div>
            
			<div class="lis-term">
                <h3>cut</h3>
                <p>Remove sections of each line of a file</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-cut.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
            
            <div class="lis-term">
                <h3>paste</h3>
                <p>join files horizontally</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-paste.php">Link to Tutorial</a></div>
            </div>
        </div>
            
        <div class="lis-black">
            <div class="lis-term">
                <h3>head</h3>
                <p>Prints the first few lines of a file out to standard input</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-head.php">Link to Tutorial</a></div>
            </div>
			
			<div class="lis-dash"></div>
			
			<div class="lis-term">
                <h3>tail</h3>
                <p>Prints the last few lines of a file</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-tail.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
            
            <div class="lis-term">
                <h3>wc</h3>
                <p>Counts lines, words, and characters in a file</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-wc.php">Link to Tutorial</a></div>
            </div>
        </div>
            
        <div class="lis-white">
            <div class="lis-term">
                <h3>tar</h3>
                <p>Rip collection of files and directories into a compressed archive</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-tar.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
			
			<div class="lis-term">
                <h3>gzip</h3>
                <p>Compress and archive files, similar to windows zip</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-gzip.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
            
            <div class="lis-term">
                <h3>cal</h3>
                <p>Displays the calendar in standard output with extra information</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-cal.php">Link to Tutorial</a></div>
            </div>
        </div>

        <div class="lis-black">
            <div class="lis-term">
                <h3>man</h3>
                <p>Manual pages, verbose descriptions of UNIX commands and how to use them</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-man.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
			
			<div class="lis-term">
                <h3>date</h3>
                <p>display current date and time</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-date.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
			
			<div class="lis-term">
                <h3>logout</h3>
                <p>logout from current user session</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-logout.php">Link to Tutorial</a></div>
            </div>
        </div>

        <div class="lis-white">
            <div class="lis-term">
                <h3>exit</h3>
                <p>causes shell to exit and close</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-exit.php">Link to Tutorial</a></div>
            </div>
			
			<div class="lis-dash"></div>
			
			<div class="lis-term">
                <h3>echo</h3>
                <p>display line of text</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-echo.php">Link to Tutorial</a></div>
            </div>
        </div>    
            
<?php
	include($path.'assets/inc/footer.php');
?>