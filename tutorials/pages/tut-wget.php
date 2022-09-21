<?php
	$title = 'Intermediate - WGET';
    $active_tut = 'active';
    $path='../../';
	$head_title = '<h2 class="head-title">Web Get</h2>';
	include($path.'assets/inc/header.php');
?>

<?php
    $comm_sec_link = 'inter';
    $comm_sec = 'Intermediate';
    $comm_lists =   '   
                        <li> wget -O diffname.zip https://website.com/files/file.zip (uses the -O option to save the file in the current directory under a different name)</li>
                        <li> wget -P /other https://website.com/files/file.zip (uses the -P option to download the file and save it in a different directory)</li>
                    ';
    $comm_name = 'WGET';
    $comm_desc = 'Short for web get, this command fetches information from the internet by downloading files over a network. It supports HTTP, HTTPS, and FTP protocols, including retrival through HTTP proxies.';
    $comm_examples =    '
                        <img class="tut-image" src="../../assets/images/tut-wget.PNG" alt="Screenshot">
                        <p>In the example above, the user is providing a location of a file to be downloaded over HTTP. As you can see, the download progress, current download speed, size, date, time, and name of the file are displayed. The pdf file then gets downloaded to the working directory.</p>
                        ';//Duplicate this as many times as you have screenshots
    $comm_previousL = 'tut-chown.php';
    $comm_nextL = 'tut-history.php';
    include ($path.'assets/inc/tutorial-desc.php');
?>
  
<?php
	include $path.'assets/inc/footer.php';
?>