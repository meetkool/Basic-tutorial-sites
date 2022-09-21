<?php
	$title = 'Command Listing - Expert';
    $active_lis = 'active';
    $path='../../';
	$head_title =   '
                    <h1 class="head-title">Expert</h1>
				    <h2 class="head-title">Command Listing</h2>
                    ';
	include($path.'assets/inc/header.php');
?>

        <div>
            <ul class="content-trail">
                <li><a href="<?php echo $path;?>index.php">Home</a></li>
                <li><a href="<?php echo $path;?>listing/index.php">Command Listing</a></li>
                <li><a href="#">Expert Command Listing</a></li>
            </ul>
        </div>

		<div class="lis-white">
			<div class="lis-term">
                <h3>set</h3>
                <p>Create or change a variable in the shell/environment with a value. Tutorial includes unset command.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-set.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
			
			<div class="lis-term">
                <h3>unset</h3>
                <p>Delete an existing shell/environment variable. Tutorial includes set command.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-set.php">Link to Tutorial</a></div>
            </div>
           
            <div class="lis-dash"></div>
			
			<div class="lis-term">
                <h3>fdisk</h3>
                <p>Used to create, edit, delete, or move partitions on a hard drive.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-fdisk.php">Link to Tutorial</a></div>
            </div>
        </div>

		<div class="lis-black">
			<div class="lis-term">
                <h3>df</h3>
                <p>Shows amount of disk space being used by the machine's file systems.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-df.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
			
			<div class="lis-term">
                <h3>du</h3>
                <p>Shows disk usage by specific files and directories and files.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-du.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
			
			<div class="lis-term">
                <h3>rsync</h3>
                <p>Remote backup/data synchronization tool</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-rsync.php">Link to Tutorial</a></div>
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
                <h3>crontab</h3>
                <p>Schedule tasks or operations to run at given times.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-crontab.php">Link to Tutorial</a></div>
            </div>
            
            <div class="lis-dash"></div>
			
			<div class="lis-term">
                <h3>dmesg</h3>
                <p>Troubleshooting tool for driver and hardware issues.</p>
                <div class="lis-link"><a href="<?php echo $path;?>tutorials/pages/tut-dmesg.php">Link to Tutorial</a></div>
            </div>
        </div>

<?php
	include($path.'assets/inc/footer.php');
?>