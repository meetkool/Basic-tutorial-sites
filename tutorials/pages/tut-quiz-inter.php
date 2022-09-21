<?php
	$title = 'Intermediate - Quiz';
    $active_tut = 'active';
    $path='../../';
	$head_title =   '
				    <h2 class="head-title">Intermediate Quiz</h2>
                    ';
	include($path.'assets/inc/header.php');
?>

        <div>
            <ul class="content-trail">
                <li><a href="<?php echo $path;?>index.php">Home</a></li>
                <li><a href="<?php echo $path;?>tutorials/index.php">Tutorials</a></li>
                <li><a href="tut-initial-inter.php">Intermediate Tutorials</a></li>
                <li><a href="#">Intermediate Quiz</a></li>      
            </ul>
        </div>

        <div id="quiz-cont">

            <div id="quiz-form">

                <?php 
                //Questions
                    $Questions = array(
                        1 => array(
                            'Question' => '1. This command is used to change the permissions of a given file or directory.',
                            'Answers' => array(
                                'A)' => 'permmod',
                                'B)' => 'chmod',
                                'C)' => 'sourcemod',
                                'D)' => 'chown'
                            ),
                            'CorrectAnswer' => 'B)',
                            'Command' => 'chmod'
                        ),
                        2 => array(
                            'Question' => '2. Enter the three digit permission code for a file that allows the owner to read, write and execute, members of the owner’s group to read and execute, and others to write.',
                            'Answers' => array(
                                'A)' => '752',
                                'B)' => '755',
                                'C)' => '655',
                                'D)' => '644'
                            ),
                            'CorrectAnswer' => 'A)',
                            'Command' => 'chmod'
                        ),
                        3 => array(
                            'Question' => '3. The command to view who is presently logged in on the machine in unix:',
                            'Answers' => array(
                                'A)' => 'alias',
                                'B)' => 'which',
                                'C)' => 'who',
                                'D)' => 'wget'
                            ),
                            'CorrectAnswer' => 'C)',
                            'Command' => 'who'
                        ),
                        4 => array(
                            'Question' => '4. The fdisk command concerns',
                            'Answers' => array(
                                'A)' => 'disk partitions',
                                'B)' => 'disk management',
                                'C)' => 'availibility of disk memory',
                                'D)' => 'All of the above'
                            ),
                            'CorrectAnswer' => 'D)',
                            'Command' => 'fdisk'
                        ),
                        5 => array(
                            'Question' => '5. A way to view the location a packet’s hops take to its destination is by using which command?',
                            'Answers' => array(
                                'A)' => 'netstat',
                                'B)' => 'traceroute',
                                'C)' => 'ifconfig',
                                'D)' => 'nslookup'
                            ),
                            'CorrectAnswer' => 'B)',
                            'Command' => 'traceroute'
                        ),
                        6 => array(
                            'Question' => '6. All of the following deal with remote connections and downloads EXCEPT',
                            'Answers' => array(
                                'A)' => 'smtp',
                                'B)' => 'ssh',
                                'C)' => 'sftp',
                                'D)' => 'wget'
                            ),
                            'CorrectAnswer' => 'A)',
                            'Command' => 'smtp'
                        ),
                        7 => array(
                            'Question' => '7. What is the purpose of the diff command?',
                            'Answers' => array(
                                'A)' => 'compare two text file, output true if they have the same content',
                                'B)' => 'compare two text files, output the difference',
                                'C)' => 'compare two executable files, output the differences',
                                'D)' => 'compare two directories, output the difference'
                            ),
                            'CorrectAnswer' => 'B)',
                            'Command' => 'diff'
                        ),
                        8 => array(
                            'Question' => '8. This command can be used to find a specific string of characters in a given file, returning the lines that contain this string as output:',
                            'Answers' => array(
                                'A)' => 'grep',
                                'B)' => 'wc',
                                'C)' => 'scp',
                                'D)' => 'find'
                            ),
                            'CorrectAnswer' => 'A)',
                            'Command' => 'grep'
                        ),
                        9 => array(
                            'Question' => '9. This command is used to change the owner and group properties of files and directories',
                            'Answers' => array(
                                'A)' => 'chmod',
                                'B)' => 'who',
                                'C)' => 'alias',
                                'D)' => 'chown'
                            ),
                            'CorrectAnswer' => 'D)',
                            'Command' => 'chown'
                        ),
                        10 => array(
                            'Question' => '10. The history command is used to',
                            'Answers' => array(
                                'A)' => 'show a list of websites visited in the current session',
                                'B)' => 'list previous commands',
                                'C)' => 'store the last 5000 commands used by default',
                                'D)' => 'All of the above'
                            ),
                            'CorrectAnswer' => 'B)',
                            'Command' => 'history'
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

                                    }
                                    else 
                                    { 
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

                    }else{
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