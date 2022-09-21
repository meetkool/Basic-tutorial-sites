<?php
	$title = 'Command Listing';
    $active_lis = 'active';
    $path='../';
	$head_title =   '
				    <h2 class="head-title">Command Listing</h2>
                    ';
	include($path.'assets/inc/header.php');
?>

        <div class="lis-white">
            
            <div class="lis-option">
                <h3>Beginner Command Listing</h3>
                <p>A complete list of all terms found throughout the beginner tutorials.</p>
                <div class="lis-link"><a href="pages/lis-begin.php">Link to Page</a></div>
            </div>   
            
            <div class="lis-dash"></div>
            
            <div class="lis-option">
                <h3>Intermediate Command Listing</h3>
                <p>A complete list of all terms found throughout the intermediate tutorials.</p>
                <div class="lis-link"><a href="pages/lis-inter.php">Link to Page</a></div>
            </div>
            
            <div class="lis-dash"></div>
            
            <div class="lis-option">
                <h3>Expert Command Listing</h3>
                <p>A complete list of all terms found throughout the expert tutorials.</p>
                <div class="lis-link"><a href="pages/lis-expert.php">Link to Page</a></div>
            </div>
            
            <div class="lis-dash"></div>
            
            <div class="lis-option">
                <h3>Complete Command Listing</h3>
                <p>A complete list of all terms found throughout the site.</p>
                <div class="lis-link"><a href="pages/lis-all.php">Link to Page</a></div>
            </div>
        
        </div>

<?php
	include ($path.'assets/inc/footer.php');
?>