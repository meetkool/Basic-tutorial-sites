<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/general.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/nav.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/homepage.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/listing.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/tutorials.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/quiz.css">
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
        <link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Sanchez" rel="stylesheet">
        
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo $title; ?></title>
	</head>
    <body>
    
		<div id="page-nav">
			<nav>
                <div class="logo">
                    <a href="<?php echo $path;?>index.php"><img class="logo-img" src="<?php echo $path;?>assets/images/head-logo.png" alt="Logo"></a>
                </div>
                
                <ul>
                    <li><a class="<?php echo $active_home; ?>" href="<?php echo $path;?>index.php">Home</a></li>
                    <li><a class="<?php echo $active_tut; ?>" href="<?php echo $path;?>tutorials/index.php">Tutorials</a></li>
                    <li><a class="<?php echo $active_lis; ?>" href="<?php echo $path;?>listing/index.php">Command Listing</a></li>
                </ul>
                
                <div class="icon">
                    <a class="icon-open" href="#"></a>
                </div>
            </nav>
            
            <div class="menu">
                <div class="menu-cont">
                    <ul class="menu-item">
                        <li><a href="<?php echo $path;?>tutorials/pages/tut-initial-begin.php">Beginner</a>
                            <ul>
                                <li><a href="<?php echo $path;?>tutorials/pages/tut-pwd.php">Navigation Tools</a></li>
                                <li><a href="<?php echo $path;?>tutorials/pages/tut-mkdir.php">File Creation</a></li>
                                <li><a href="<?php echo $path;?>tutorials/pages/tut-cat.php">Manipulating Files</a></li>
                                <li><a href="<?php echo $path;?>tutorials/pages/tut-cal.php">System Utilities</a></li>
                                <li><a href="<?php echo $path;?>tutorials/pages/tut-quiz-begin.php">Beginner Quiz</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo $path;?>tutorials/pages/tut-initial-inter.php">Intermediate</a>
                            <ul>
                                <li><a href="<?php echo $path;?>tutorials/pages/tut-mount.php">Analyzing Files</a></li>
                                <li><a href="<?php echo $path;?>tutorials/pages/tut-history.php">Shell Information</a></li>
                                <li><a href="<?php echo $path;?>tutorials/pages/tut-ping.php">Networking</a></li>
                                <li><a href="<?php echo $path;?>tutorials/pages/tut-quiz-inter.php">Intermediate Quiz</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo $path;?>tutorials/pages/tut-initial-expert.php">Expert</a>
                            <ul>
                                <li><a href="<?php echo $path;?>tutorials/pages/tut-set.php">Kernal Commands</a></li>
                                <li><a href="<?php echo $path;?>tutorials/pages/tut-df.php">Disk Management</a></li>
                                <li><a href="<?php echo $path;?>tutorials/pages/tut-rsync.php">Advanced Tools</a></li>
                                <li><a href="<?php echo $path;?>tutorials/pages/tut-quiz-expert.php">Expert Quiz</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo $path;?>listing/index.php">Command Listing</a>
                            <ul>
                                <li><a href="<?php echo $path;?>listing/pages/lis-begin.php">Beginner Commands</a></li>
                                <li><a href="<?php echo $path;?>listing/pages/lis-inter.php">Intermediate Commands</a></li>
                                <li><a href="<?php echo $path;?>listing/pages/lis-expert.php">Expert Commands</a></li>
                                <li><a href="<?php echo $path;?>listing/pages/lis-all.php">All Commands</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo $path;?>index.php">Home</a></li>
                        <li><a href="<?php echo $path;?>about/index.php">About Us</a></li>
                    </ul>
                    
                </div>
            </div>
        </div>
        
        <div class="page-header">
            <div class="page-header-title"><?php echo $head_title; ?></div>
        </div>