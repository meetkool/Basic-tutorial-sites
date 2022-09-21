<?php
	$title = 'Intermediate Tutorials';
    $active_tut = 'active';
    $path='../../';
	$head_title =   '
				    <h2 class="head-title">Intermediate Tutorials</h2>
                    ';
	include($path.'assets/inc/header.php');
?>

        <div>
            <ul class="content-trail">
                <li><a href="<?php echo $path;?>index.php">Home</a></li>
                <li><a href="<?php echo $path;?>tutorials/index.php">Tutorials</a></li>
                <li><a href="#">Intermediate Tutorials</a></li>      
            </ul>
        </div>

        <div class="tut-light">
            
            <div class="tut-option">
                <h3>Analyzing Files</h3>
                <p>Learn how to find more information on your files like the line count or permissions, or compare two files and see which lines are different.</p>
                <div class="tut-link"><a href="tut-mount.php">Link to Page</a></div>
            </div>   
            
            <div class="tut-dash"></div>
            
            <div class="tut-option">
                <h3>Shell Information</h3>
                <p>Commands in this section will help you learn more about what is happening on your system. See what users are logged in, find what commands have been entered, or create a command to simplify a task.</p>
                <div class="tut-link"><a href="tut-history.php">Link to Page</a></div>
            </div>
            
            <div class="tut-dash"></div>
            
            <div class="tut-option">
                <h3>Networking Tools</h3>
                <p>The tools here will help you manage your network by seeing the path a packet travels, finding you IP and MAC addresses, and even learn how to transfer files over your network.</p>
                <div class="tut-link"><a href="tut-ping.php">Link to Page</a></div>
            </div>
            
            <div class="tut-dash"></div>
            
            <div class="tut-option">
                <h3>Intermediate Quiz</h3>
                <p>This quiz will help evaluate the user's knowledge on the commands covered in this section.</p>
                <div class="tut-link"><a href="tut-quiz-inter.php">Link to Page</a></div>
            </div>
        
        </div>

<?php
	include ($path.'assets/inc/footer.php');
?>