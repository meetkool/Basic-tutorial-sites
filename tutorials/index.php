<?php
	$title = 'Tutorials';
    $active_tut = 'active';
    $path='../';
	$head_title =   '
				    <h2 class="head-title">Tutorial Selection</h2>
                    ';
	include($path.'assets/inc/header.php');
?>

        <div class="tut-light">
            
            <div class="tut-option">
                <h3>Beginner Tutorials</h3>
                <p>This section is for users who are brand new to the Unix experience and are looking to learn the most basic of commands.</p>
                <div class="tut-link"><a href="pages/tut-initial-begin.php">Link to Page</a></div>
            </div>   
            
            <div class="tut-dash"></div>
            
            <div class="tut-option">
                <h3>Intermediate Tutorials</h3>
                <p>These tutorials are for users who are new to Unix, but have completed the beginner section, or for users who have been using Unix, but want to learn commands to be able to do more on their system.</p>
                <div class="tut-link"><a href="pages/tut-initial-inter.php">Link to Page</a></div>
            </div>
            
            <div class="tut-dash"></div>
            
            <div class="tut-option">
                <h3>Expert Tutorials</h3>
                <p>This is the final block of commands intended to turn a beginner or intermediate user into a power users, and give them even more control over their system.</p>
                <div class="tut-link"><a href="pages/tut-initial-expert.php">Link to Page</a></div>
            </div>
        
        </div>

<?php
	include ($path.'assets/inc/footer.php');
?>