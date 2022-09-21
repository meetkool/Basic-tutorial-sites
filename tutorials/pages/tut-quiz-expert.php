<?php
	$title = 'Expert - Quiz';
    $active_tut = 'active';
    $path='../../';
	$head_title =   '
				    <h2 class="head-title">Expert Quiz</h2>
                    ';
	include($path.'assets/inc/header.php');
?>

        <div>
            <ul class="content-trail">
                <li><a href="<?php echo $path;?>index.php">Home</a></li>
                <li><a href="<?php echo $path;?>tutorials/index.php">Tutorials</a></li>
                <li><a href="tut-initial-expert.php">Expert Tutorials</a></li>
                <li><a href="#">Expert Quiz</a></li>      
            </ul>
        </div>

        <div id="quiz-cont">

            <div id="quiz-form">

            <?php 
                //Questions
                $Questions = array(
                    1 => array(
                        'Question' => '1. This command is used to schedule backups or other scheduled tasks',
                        'Answers' => array(
                            'A)' => 'crontab',
                            'B)' => 'taskauto',
                            'C)' => 'yum',
                            'D)' => 'rsync'
                        ),
                        'CorrectAnswer' => 'A)',
                        'Command' => 'crontab'
                    ),
                    2 => array(
                        'Question' => '2. An entry in a crontab that would run the file “example” every Sunday in January at midnight. Assume the file is located in the same directory as the crontab:',
                        'Answers' => array(
                            'A)' => '0 0 * 1 1 example',
                            'B)' => 'example 0 * 1',
                            'C)' => '0 * 1 example',
                            'D)' => 'example 0 0 * 1 1'
                        ),
                        'CorrectAnswer' => 'A)',
                        'Command' => 'crontab'
                    ),
                    3 => array(
                        'Question' => '3. The fdisk command allows you to do what?',
                        'Answers' => array(
                            'A)' => 'manage disk partitions',
                            'B)' => 'find a cd key',
                            'C)' => 'follow a ping across a network',
                            'D)' => 'All of the above'
                        ),
                        'CorrectAnswer' => 'A)',
                        'Command' => 'fdisk'
                    ),
                    4 => array(
                        'Question' => '4. When utilizing the set command, which type of information is displayed?',
                        'Answers' => array(
                            'A)' => 'environment variables',
                            'B)' => 'shell functions',
                            'C)' => 'shell variables',
                            'D)' => 'All of the above'
                        ),
                        'CorrectAnswer' => 'D)',
                        'Command' => 'set'
                    ),
                    5 => array(
                        'Question' => '5. Entering “df” in a terminal displays all of the following EXCEPT:',
                        'Answers' => array(
                            'A)' => 'where each file system is mounted',
                            'B)' => 'the percentage used in each file system',
                            'C)' => 'the amount of space still available, in megabytes',
                            'D)' => 'All of the above are displayed'
                        ),
                        'CorrectAnswer' => 'C)',
                        'Command' => 'df'
                    ),
                    6 => array(
                        'Question' => '6. The du command is used to find',
                        'Answers' => array(
                            'A)' => 'sizes of files only',
                            'B)' => 'sizes of directories only',
                            'C)' => 'sizes of files or directories',
                            'D)' => 'sizes of disk partitions'
                        ),
                        'CorrectAnswer' => 'C)',
                        'Command' => 'du'
                    ),
                    7 => array(
                        'Question' => '7. Nslookup allows for users to query and troubleshoot issues of which protocol?',
                        'Answers' => array(
                            'A)' => 'dns',
                            'B)' => 'dhcp',
                            'C)' => 'tcp',
                            'D)' => 'ip'
                        ),
                        'CorrectAnswer' => 'A)',
                        'Command' => 'nslookup'
                    ),
                    8 => array(
                        'Question' => '8. Rsync allows the copying all of the following EXCEPT:',
                        'Answers' => array(
                            'A)' => 'devices',
                            'B)' => 'ip addresses',
                            'C)' => 'links',
                            'D)' => 'permissions'
                        ),
                        'CorrectAnswer' => 'B)',
                        'Command' => 'rsync'
                    ),
                    9 => array(
                        'Question' => '9. This command deletes a specific variable given by the user from the shell:',
                        'Answers' => array(
                            'A)' => 'delete',
                            'B)' => 'unset',
                            'C)' => 'reset',
                            'D)' => 'dump'
                        ),
                        'CorrectAnswer' => 'B)',
                        'Command' => 'set'
                    ),
                    10 => array(
                        'Question' => '10. This command shows kernel ring buffers and contains important information for drivers and troubleshooting',
                        'Answers' => array(
                            'A)' => 'help',
                            'B)' => 'kernalinfo',
                            'C)' => 'dmesg',
                            'D)' => 'logs'
                        ),
                        'CorrectAnswer' => 'C)',
                        'Command' => 'dmesg'
                    )
                );

                if (isset($_POST['answers'])){
                    $Answers = $_POST['answers']; // Get submitted answers.
                    $counter=""; //Count answers correct.   

                    //Time to automate question checking! ;)
                    foreach ($Questions as $QuestionNo => $Value){
                        // Echo the question]
                        echo $Value['Question'].'<br />';

                        //Store command used for tutorial
                        $tutorial = $Value['Command'];

                        if ($Answers[$QuestionNo] != $Value['CorrectAnswer']){
                             echo 'You answered: <span style="color: red;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span><br>'; //Replace style with a class
                             echo 'Correct answer: <span style="color: green;">'.$Value['Answers'][$Value['CorrectAnswer']].'</span><br>';

                            //Button to Review Question
                            echo '<input type="button" name="review" value="Review" id="review-quiz" onclick="reView(\''.$tutorial.'\')" />'; //Put the value into two sets of quotes: One to read the value and the second to output the value as a string
                        } else {
                            echo 'Correct answer: <span style="color: green;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span><br>'; // Replace style with a class
                            echo 'You are correct: <span style="color: green;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span>'; $counter++;
                        }

                        echo '<br /><hr>'; 
                            if ($counter=="") { 
                                $counter='0';
                                $results = "$counter/10 Correct"; 

                            } else { 
                                $results = "$counter/10 Correct"; 
                            }
                    }
                    //Format for score
                    echo'<div id="quiz-bot">';
                    echo '<h1>Score:</h1>';
                    echo '<div id="quiz-results">';
                    echo $results; 
                    echo '</div>';	       
                    echo '</div>';
                    //Button to retake quiz
                    echo '<input type="button" name="retake" value="Retake Quiz" id="quiz-again" onclick="quizAgain()" />';

                } else {

            ?>
                <!-- Output results -->
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="quiz">
                    <?php foreach ($Questions as $QuestionNo => $Value){ ?>

                        <h3><?php echo $Value['Question']; ?></h3>
                        <?php 
                            foreach ($Value['Answers'] as $Letter => $Answer){ 
                            $Label = 'question-'.$QuestionNo.'-answers-'.$Letter;
                        ?>
                        <div>
                            <input type="radio" name="answers[<?php echo $QuestionNo; ?>]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>" required />
                            <label for="<?php echo $Label; ?>"><?php echo $Letter; ?> <?php echo $Answer; ?> </label>
                        </div>

                        <?php } ?>

                    <?php } ?>

                <input type="submit" id="quiz-submit" value="Submit Quiz" onsubmit="return checkAnswers()" />

                <?php } ?>                

                </form>

            </div>

        </div>

<?php
	include $path.'assets/inc/footer.php';
?>