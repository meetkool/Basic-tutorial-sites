<?php
	$title = 'Homepage';
    $active_home = 'active';
    $path='./';
	$head_title =   '
                    <h1 class="head-title">Introduction to</h1>
				    <h2 class="head-title">Unix</h2>
                    ';
	include($path.'assets/inc/header.php');
?>

<?php
    include ($path.'assets/inc/homepage-body.php');
?>

<?php
	include ($path.'assets/inc/footer.php');
?>

<script src="te.js"></script>