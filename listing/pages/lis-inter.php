<?php
	$title = 'Command Listing - Intermediate';
    $active_lis = 'active';
    $path='../../';
	$head_title =   '
                    <h1 class="head-title">Intermediate</h1>
				    <h2 class="head-title">Command Listing</h2>
                    ';
	include($path.'assets/inc/header.php');
?>
		
        <div>
            <ul class="content-trail">
                <li><a href="<?php echo $path;?>index.php">Home</a></li>
                <li><a href="<?php echo $path;?>listing/index.php">Command Listing</a></li>
                <li><a href="#">Intermediate Command Listing</a></li>
            </ul>
        </div>

        <div class="lis-white"> 	
			<div class="lis-term">
                <h3>ping</h3>
                <p>Checks an IP address for network connectivity</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-ping.php">Link to Tutorial</a></div>
            </div>
			
		   <div class="lis-dash"></div>
		   
			<div class="lis-term">
                <h3>ifconfig</h3>
                <p>Used to view network and configuration information like IP and MAC addresses.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-ifconfig.php">Link to Tutorial</a></div>
            </div>
			
			<div class="lis-dash"></div>
			
			<div class="lis-term">
                <h3>mount</h3>
                <p>Make particular file system accessible at a certain point in the directory tree</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-mount.php">Link to Tutorial</a></div>
            </div>
		</div>

		<div class="lis-black"> 
			<div class="lis-term">
                <h3>diff</h3>
                <p>Analyzes two files and prints the lines that are different</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-diff.php">Link to Tutorial</a></div>
            </div>
        
		   
            <div class="lis-dash"></div>
			
			<div class="lis-term">
                <h3>comm</h3>
                <p>Compare two sorted files line by line.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-comm.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
			
			<div class="lis-term">
                <h3>scp</h3>
                <p>Copy files securely over SSH</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-scp.php">Link to Tutorial</a></div>
            </div>
        </div>

		<div class="lis-white">  
            <div class="lis-term">
                <h3>shred</h3>
                <p>Deletes files</p>
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
                <p>Evaluates file as a list of commands executed in the current context</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-source.php">Link to Tutorial</a></div>
            </div>
		</div>

		<div class="lis-black"> 	
			<div class="lis-term">
                <h3>sftp</h3>
                <p>Utilize secure file transfer protocol on a server.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-sftp.php">Link to Tutorial</a></div>
            </div>
           
            <div class="lis-dash"></div>
			
			<div class="lis-term">
                <h3>ssh</h3>
                <p>Utilize secure shell network protocol to gain secure access to a server.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-ssh.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
			
			<div class="lis-term">
                <h3>wget</h3>
                <p>A command line utility used to download files from servers on the internet.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-wget.php">Link to Tutorial</a></div>
            </div>
        </div>

		<div class="lis-white"> 
			<div class="lis-term">
                <h3>history</h3>
                <p>Lists up to the 1000 most recent commands executed in the terminal.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-history.php">Link to Tutorial</a></div>
            </div>
           
            <div class="lis-dash"></div>
			
			<div class="lis-term">
                <h3>alias</h3>
                <p>Assign a string to be recognized as a different one. Often used with a command.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-alias.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
			
			<div class="lis-term">
                <h3>which</h3>
                <p>Locates pathnames of the files that would be run by the shell if given a command.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-which.php">Link to Tutorial</a></div>
            </div>
        </div>

		<div class="lis-black">      
			<div class="lis-term">
                <h3>who</h3>
                <p>Shows which user(s) are currently logged in on the machine</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-who.php">Link to Tutorial</a></div>
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
                <h3>grep</h3>
                <p>Search a file for keywords and return the line in which it appears in the file.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-grep.php">Link to Tutorial</a></div>
            </div>
          
            <div class="lis-dash"></div>
			
			<div class="lis-term">
                <h3>traceroute</h3>
                <p>Trace the path of a packet from its genesis to its final destination.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-traceroute.php">Link to Tutorial</a></div>
            </div>
		</div>
		
<?php
	include($path.'assets/inc/footer.php');
?>
            