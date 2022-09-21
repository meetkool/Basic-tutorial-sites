<?php
	$title = 'Beginner Tutorials';
    $active_tut = 'active';
    $path='../../';
	$head_title =   '
				    <h2 class="head-title">Beginner Tutorials</h2>
                    ';
	include($path.'assets/inc/header.php');
?>

        <div>
            <ul class="content-trail">
                <li><a href="<?php echo $path;?>index.php">Home</a></li>
                <li><a href="<?php echo $path;?>tutorials/index.php">Tutorials</a></li>
                <li><a href="#">Beginner Tutorials</a></li>     
            </ul>
        </div>

        <div class="tut-light">
            
            <div class="tut-option">
                <h3>Getting Started</h3>
                <p>This section will help you get more comfortable with basic Unix terms and concepts.</p>
                <div class="tut-link"><a href="tut-intro.php">Link to Page</a></div>
            </div> 
            
            <div class="tut-dash"></div>
            
            <div class="tut-option">
                <h3>Navigation Tools</h3>
                <p>Tutorials in section will help users learn how to navigate through their system directory, find a specific file, and execute root commands.</p>
                <div class="tut-link"><a href="tut-pwd.php">Link to Page</a></div>
            </div>   
            
            <div class="tut-dash"></div>
            
            <div class="tut-option">
                <h3>File Creation</h3>
                <p>Learn how to create files and directories, as well as edit and move files around your system.</p>
                <div class="tut-link"><a href="tut-mkdir.php">Link to Page</a></div>
            </div>
            
            <div class="tut-dash"></div>
            
            <div class="tut-option">
                <h3>Manipulating Files</h3>
                <p>This section introduces users to file manipulation tools. After completing this section, the user will know how to edit and select spcific portions of a file.</p>
                <div class="tut-link"><a href="tut-cat.php">Link to Page</a></div>
            </div>
            
            <div class="tut-dash"></div>
            
            <div class="tut-option">
                <h3>System Utilities</h3>
                <p>The tutorials here will help the user manage their actual system and do slight troubleshooting. By then end, the user will be able to successfully switch between users and access command manuals.</p>
                <div class="tut-link"><a href="tut-cal.php">Link to Page</a></div>
            </div>
            
            <div class="tut-dash"></div>
            
            <div class="tut-option">
                <h3>Beginner Quiz</h3>
                <p>This quiz will help evaluate the user's knowledge on the commands covered in this section.</p>
                <div class="tut-link"><a href="tut-quiz-begin.php">Link to Page</a></div>
            </div>
        
        </div>

<?php
	include ($path.'assets/inc/footer.php');
?>