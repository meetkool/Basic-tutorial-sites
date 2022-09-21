<?php
	$title = 'Command Listing - Overall';
    $active_lis = 'active';
    $path='../../';
	$head_title =   '
                    <h1 class="head-title">Overall</h1>
				    <h2 class="head-title"> Command Listing</h2>
                    ';
	include($path.'assets/inc/header.php');
?>

        <div>
            <ul class="content-trail">
                <li><a href="<?php echo $path;?>index.php">Home</a></li>
                <li><a href="<?php echo $path;?>listing/index.php">Command Listing</a></li>
                <li><a href="#">Complete Command Listing</a></li>
            </ul>
        </div>

        <div class="lis-white">
            <div class="lis-term">
                <h3>alias</h3>
                <p>Assign a string to be recognized as a different one. Often used with a command.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-alias.php">Link to Tutorial</a></div>
            </div>

            <div class="lis-dash"></div>

            <div class="lis-term">
                <h3>cal</h3>
                <p>Displays the calendar in standard output with extra information.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-cal.php">Link to Tutorial</a></div>
            </div>

            <div class="lis-dash"></div>

            <div class="lis-term">
                <h3>cat</h3>
                <p>Concatenate files into a new file.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-cat.php">Link to Tutorial</a></div>
            </div>
        </div>

        <div class="lis-black">
            <div class="lis-term">
                <h3>cd</h3>
                <p>Changes current directory to another one.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-cd.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
            
            <div class="lis-term">
                <h3>chmod</h3>
                <p>Modify the read, write, and execute priveleges of files for users and groups.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-chmod.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
        
            <div class="lis-term">
                <h3>chown</h3>
                <p>Change ownership information of files.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-chown.php">Link to Tutorial</a></div>
            </div>
        </div>

        <div class="lis-white">
            <div class="lis-term">
                    <h3>comm</h3>
                    <p>Compare two sorted files line by line.</p>
                    <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-comm.php">Link to Tutorial</a></div>
            </div>

            <div class="lis-dash"></div>

            <div class="lis-term">
                    <h3>cp</h3>
                    <p>Copies the content in a file to another new file.</p>
                    <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-cp.php">Link to Tutorial</a></div>
            </div>

            <div class="lis-dash"></div>

            <div class="lis-term">
                    <h3>crontab</h3>
                    <p>Schedule tasks or operations to run at given times.</p>
                    <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-crontab.php">Link to Tutorial</a></div>
            </div>
        </div>

        <div class="lis-black">
            <div class="lis-term">
                <h3>cut</h3>
                <p>Remove sections of each line of a file.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-cut.php">Link to Tutorial</a></div>
            </div>

            <div class="lis-dash"></div>

            <div class="lis-term">
                <h3>date</h3>
                <p>display current date and time.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-date.php">Link to Tutorial</a></div>
            </div>

            <div class="lis-dash"></div> 

            <div class="lis-term">
                <h3>diff</h3>
                <p>analyzes two files and prints the lines that are different.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-diff.php">Link to Tutorial</a></div>
            </div>
        </div>

        <div class="lis-white">
			<div class="lis-term">
                <h3>df</h3>
                <p>Shows amount of disk space being used by the machine's file systems.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-df.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
        
			<div class="lis-term">
                <h3>dmesg</h3>
                <p>Troubleshooting tool for driver and hardware issues.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-dmesg.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
        
            <div class="lis-term">
                <h3>du</h3>
                <p>Shows disk usage by specific files and directories and files.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-du.php">Link to Tutorial</a></div>
            </div>
        </div>

        <div class="lis-black">
			<div class="lis-term">
                <h3>echo</h3>
                <p>display line of text.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-echo.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
        
            <div class="lis-term">
                <h3>exit</h3>
                <p>causes shell to exit and close.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-exit.php">Link to Tutorial</a></div>
            </div>
			
			<div class="lis-dash"></div>
        
            <div class="lis-term">
                <h3>fdisk</h3>
                <p>Used to create, edit, delete, or move partitions on a hard drive.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-fdisk.php">Link to Tutorial</a></div>
            </div>
        </div>

        <div class="lis-white">
            <div class="lis-term">
                <h3>find</h3>
                <p>Searches for files throughout the directory tree based on certain commands.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-find.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
        
            <div class="lis-term">
                <h3>gzip</h3>
                <p>Compress and archive files, similar to windows zip.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-gzip.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
        
            <div class="lis-term">
                <h3>grep</h3>
                <p>Search a file for keywords and return the line in which it appears in the file.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-grep.php">Link to Tutorial</a></div>
            </div>
        </div>

        <div class="lis-black">
            <div class="lis-term">
                <h3>head</h3>
                <p>Prints the first few lines of a file out to standard input.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-head.php">Link to Tutorial</a></div>
            </div>

            <div class="lis-dash"></div>
    
            <div class="lis-term">
                <h3>history</h3>
                <p>Lists up to the 1000 most recent commands executed in the terminal.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-history.php">Link to Tutorial</a></div>
            </div>
        
            <div class="lis-dash"></div>
        
			<div class="lis-term">
                <h3>ifconfig</h3>
                <p>Used to view network and configuration information like IP and MAC addresses.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-ifconfig.php">Link to Tutorial</a></div>
            </div>
        </div>

        <div class="lis-white">
            <div class="lis-term">
                <h3>ls</h3>
                <p>Lists out names and relevant information about files in a directory.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-ls.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
        
			<div class="lis-term">
                <h3>logout</h3>
                <p>logout from current user session.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-logout.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
        
			<div class="lis-term">
                <h3>man</h3>
                <p>Manual pages, verbose descriptions of UNIX commands and how to use them.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-man.php">Link to Tutorial</a></div>
            </div>
        </div>

        <div class="lis-black">
            <div class="lis-term">
                <h3>mkdir</h3>
                <p>Creates a new directory.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-mkdir.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
        
            <div class="lis-term">
                <h3>mount</h3>
                <p>Make particular file system accessible at a certain point in the directory tree.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-mount.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
        
			<div class="lis-term">
                <h3>mv</h3>
                <p>Move a file to another directory.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-mv.php">Link to Tutorial</a></div>
            </div>
        </div>

        <div class="lis-white">
			<div class="lis-term">
                <h3>nslookup</h3>
                <p>Troubleshooter for DNS related information.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-nslookup.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
        
            <div class="lis-term">
                <h3>paste</h3>
                <p>join files horizontally.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-paste.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
        
            <div class="lis-term">
                <h3>ping</h3>
                <p>Checks an IP address for network connectivity.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-ping.php">Link to Tutorial</a></div>
            </div>
        </div>

        <div class="lis-black">
            <div class="lis-term">
                <h3>pwd</h3>
                <p>Writes full pathname of current working directory.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-pwd.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
        
            <div class="lis-term">
                <h3>rmdir</h3>
                <p>Deletes a directory.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-rmdir.php">Link to Tutorial</a></div>
            </div>
        
            <div class="lis-dash"></div>
        
            <div class="lis-term">
                <h3>rsync</h3>
                <p>Remote backup/data synchronization tool.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-rsync.php">Link to Tutorial</a></div>
            </div>
        </div>

        <div class="lis-white">
            <div class="lis-term">
                <h3>scp</h3>
                <p>Copy files securely over SSH.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-scp.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
        
			<div class="lis-term">
                <h3>set</h3>
                <p>Create or change a variable in the shell/environment with a value.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-set.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
        
            <div class="lis-term">
                <h3>sftp</h3>
                <p>Utilize secure file transfer protocol on a server.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-sftp.php">Link to Tutorial</a></div>
            </div>
        </div>

        <div class="lis-black">
			<div class="lis-term">
                <h3>shred</h3>
                <p>Deletes files.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-shred.php">Link to Tutorial</a></div>
            </div>
    
            <div class="lis-dash"></div>
    
            <div class="lis-term">
                <h3>sort</h3>
                <p>Sorts text line by line. Many kinds of sorts.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-sort.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
    
			<div class="lis-term">
                <h3>source</h3>
                <p>evaluates file as a list of commands executed in the current context.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-source.php">Link to Tutorial</a></div>
            </div>
        </div>

        <div class="lis-white">
            <div class="lis-term">
                <h3>ssh</h3>
                <p>Utilize secure shell network protocol to gain secure access to a server.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-ssh.php">Link to Tutorial</a></div>
            </div>
    
            <div class="lis-dash"></div>
            
			<div class="lis-term">
                <h3>su</h3>
                <p>Switch to another user or run commands as another user.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-su.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
    
            <div class="lis-term">
                <h3>sudo</h3>
                <p>Run commands as the SuperUser.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-sudo.php">Link to Tutorial</a></div>
            </div>
        </div>

        <div class="lis-black">
			<div class="lis-term">
                <h3>tail</h3>
                <p>Prints the last few lines of a file.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-tail.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>

			<div class="lis-term">
                <h3>tar</h3>
                <p>Rip collection of files and directories into a compressed archive.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-tar.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
    
			<div class="lis-term">
                <h3>touch</h3>
                <p>Creates new empty file in the current directory.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-touch.php">Link to Tutorial</a></div>
            </div>
        </div>

        <div class="lis-white">
			<div class="lis-term">
                <h3>traceroute</h3>
                <p>Trace the path of a packet from its genesis to its final destination.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-traceroute.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
    
			<div class="lis-term">
                <h3>unset</h3>
                <p>Delete an existing shell/environment variable.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-set.php">Link to Tutorial</a></div>
            </div>
    
            <div class="lis-dash"></div>
    
			<div class="lis-term">
                <h3>vi</h3>
                <p>Text editor built into UNIX.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-vi.php">Link to Tutorial</a></div>
            </div>
        </div>

        <div class="lis-black">
			<div class="lis-term">
                <h3>wc</h3>
                <p>Counts lines, words, and characters in a file.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-wc.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
    
			<div class="lis-term">
                <h3>wget</h3>
                <p>A command line utility used to download files from servers on the internet.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-wget.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
    
			<div class="lis-term">
                <h3>which</h3>
                <p>Locates pathnames of the files that would be run by the shell if given a command.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-which.php">Link to Tutorial</a></div>
            </div>
        </div>

        <div class="lis-white">
            <div class="lis-term">
                <h3>who</h3>
                <p>Shows which user(s) are currently logged in on the machine.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-who.php">Link to Tutorial</a></div>
            </div>
        </div>

<?php
    
	include($path.'assets/inc/footer.php');
?>