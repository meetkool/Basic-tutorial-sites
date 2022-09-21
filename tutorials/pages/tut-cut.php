<?php
	$title = 'Beginner - CUT';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Cut</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'begin';
    $comm_sec = 'Beginner';
    $comm_lists =   '   
                        <li>echo "boo" | cut --complement -c 1 selects the inverse of the options passed to sort and ouputs "oo"</li>
                    ';
    $comm_name = 'CUT';
    $comm_desc = 'This command is used to remove sections of each line of a file';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-cut.PNG" alt="Screenshot">
                        <p>In the example above, the user is cutting by character using the -c option. This selects the characters given to the -c option and displays the output. The user then is using the -b option to select by byte which displays the output. Lastly, the -d option is used to select by delimiter in conjunction with the -f option which specifies range of fields included in the output.</p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-cat.php';
    $comm_nextL ='tut-paste.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>

<?php
	include $path.'assets/inc/footer.php';
?>