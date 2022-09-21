<?php
	$title = 'Expert Tutorials';
    $active_tut = 'active';
    $path='../../';
	$head_title =   '
				    <h2 class="head-title">Expert Tutorials</h2>
                    ';
	include($path.'assets/inc/header.php');
?>

        <div>
            <ul class="content-trail">
                <li><a href="<?php echo $path;?>index.php">Home</a></li>
                <li><a href="<?php echo $path;?>tutorials/index.php">Tutorials</a></li>
                <li><a href="#">Expert Tutorials</a></li>      
            </ul>
        </div>

        <div class="tut-light">
            
            <div class="tut-option">
                <h3>Kernal Commands</h3>
                <p>This section will show you how to change shell variables and learn how to troubleshoot your system.</p>
                <div class="tut-link"><a href="tut-set.php">Link to Page</a></div>
            </div>   
            
            <div class="tut-dash"></div>
            
            <div class="tut-option">
                <h3>Disk Management</h3>
                <p>Manage your system's storage by vewing what takes up the most space and creating partitions on your drive.</p>
                <div class="tut-link"><a href="tut-df.php">Link to Page</a></div>
            </div>
            
            <div class="tut-dash"></div>
            
            <div class="tut-option">
                <h3>Advanced Tools</h3>
                <p>These commands will show you how to create system backups and schedule various tasks on your system.</p>
                <div class="tut-link"><a href="tut-rsync.php">Link to Page</a></div>
            </div>
            
            <div class="tut-dash"></div>
            
            <div class="tut-option">
                <h3>Expert Quiz</h3>
                <p>This quiz will help evaluate the user's knowledge on the commands covered in this section.</p>
                <div class="tut-link"><a href="tut-quiz-expert.php">Link to Page</a></div>
            </div>
        
        </div>

<?php
	include ($path.'assets/inc/footer.php');
?>