<?php
	$title = 'Beginner - Quiz';
    $active_tut = 'active';
    $path='../../';
	$head_title =   '
				    <h2 class="head-title">Beginner Quiz</h2>
                    ';
	include($path.'assets/inc/header.php');
?>

        <div>
            <ul class="content-trail">
                <li><a href="<?php echo $path;?>index.php">Home</a></li>
                <li><a href="<?php echo $path;?>tutorials/index.php">Tutorials</a></li>
                <li><a href="tut-initial-begin.php">Beginner Tutorials</a></li>
                <li><a href="#">Beginner Quiz</a></li>      
            </ul>
        </div>
        
        <div id="quiz-cont">

            <div id="quiz-form">

                <?php 
                    //Questions
                    $Questions = array(
                        1 => array(
                            'Question' => '1. How do you print the current working directory?',
                            'Answers' => array(
                                'A)' => 'pwd',
                                'B)' => 'cd',
                                'C)' => 'printdir',
                                'D)' => 'ls-d'
                            ),
                            'CorrectAnswer' => 'A)',
                            'Command' => 'pwd'
                        ),
                        2 => array(
                            'Question' => '2. What input moves a user up a directory?',
                            'Answers' => array(
                                'A)' => 'cd ..',
                                'B)' => 'cd ../',
                                'C)' => 'cd up',
                                'D)' => 'cd !!'
                            ),
                            'CorrectAnswer' => 'A)',
                            'Command' => 'cd'
                        ),
                        3 => array(
                            'Question' => '3. Which flag makes the ls command a long listing?',
                            'Answers' => array(
                                'A)' => '-l',
                                'B)' => '-i',
                                'C)' => '-ll',
                                'D)' => '-long'
                            ),
                            'CorrectAnswer' => 'A)',
                            'Command' => 'pwd'
                        ),
                        4 => array(
                            'Question' => '4. This is a compression algorithm that is the equivalent to .zip on windows',
                            'Answers' => array(
                                'A)' => 'gunzip',
                                'B)' => 'tar',
                                'C)' => 'gzip',
                                'D)' => 'All of the above'
                            ),
                            'CorrectAnswer' => 'C)',
                            'Command' => 'tar'
                        ),
                        5 => array(
                            'Question' => '5. This command allows for tasks to be done with escalated privileges',
                            'Answers' => array(
                                'A)' => 'admin',
                                'B)' => 'sudo',
                                'C)' => 'priv',
                                'D)' => 'root'
                            ),
                            'CorrectAnswer' => 'B)',
                            'Command' => 'pwd'
                        ),
                        6 => array(
                            'Question' => '6. This is the default editor for nearly all unix based operating systems',
                            'Answers' => array(
                                'A)' => 'vim',
                                'B)' => 'vi',
                                'C)' => 'notepad',
                                'D)' => 'There is no default editor'
                            ),
                            'CorrectAnswer' => 'B)',
                            'Command' => 'pwd'
                        ),
                        7 => array(
                            'Question' => '7. By giving the command cat file1, what will happen?',
                            'Answers' => array(
                                'A)' => 'The file will display its metadata',
                                'B)' => 'The file’s textual content is displayed',
                                'C)' => 'The information from file1 is copied to the user’s clipboard',
                                'D)' => 'Another argument is needed for the command to work'
                            ),
                            'CorrectAnswer' => 'B)',
                            'Command' => 'pwd'
                        ),
                        8 => array(
                            'Question' => '8. This command is used to determine network connectivity of a host by sending request packets',
                            'Answers' => array(
                                'A)' => 'ping',
                                'B)' => 'ifconfig',
                                'C)' => 'ipsend',
                                'D)' => 'ipconfig'
                            ),
                            'CorrectAnswer' => 'A)',
                            'Command' => 'pwd'
                        ),
                        9 => array(
                            'Question' => '9. This command will give an integer value that corresponds to the number of lines with content in the file',
                            'Answers' => array(
                                'A)' => 'linetot',
                                'B)' => 'wc',
                                'C)' => 'cat -wc',
                                'D)' => 'ls (file)'
                            ),
                            'CorrectAnswer' => 'B)',
                            'Command' => 'pwd'
                        ),
                        10 => array(
                            'Question' => '10. What will the command cp file1 do?',
                            'Answers' => array(
                                'A)' => 'Make a copy of file1 in the home directory',
                                'B)' => 'Make a copy of file1 called file1(1) in the current directory',
                                'C)' => 'Nothing, the command syntax is incorrect',
                                'D)' => 'Change the name of the directory to file1'
                            ),
                            'CorrectAnswer' => 'C)',
                            'Command' => 'pwd'
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