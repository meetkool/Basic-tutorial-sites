        <div>
            <ul class="content-trail">
                <li><a href="<?php echo $path;?>index.php">Home</a></li>
                <li><a href="<?php echo $path;?>tutorials/index.php">Tutorials</a></li>
                <li><a href="tut-initial-<?php echo $comm_sec_link; ?>.php"><?php echo $comm_sec; ?> Tutorials</a></li>
                <li><a href="#"><?php echo $comm_name; ?></a></li>      
            </ul>
        </div>
        <div class="tut-cont">
            <div class="tut-left">
                <h2>Usage And Variation</h2>
                <ol>
                    <?php echo $comm_lists; ?>
                </ol>
            </div>
        
            <div class="tut-right">
                <h2>What is the <?php echo $comm_name; ?> command?</h2>
                <p><?php echo $comm_desc; ?></p>
                
                <h3>Examples:</h3>
                <?php echo $comm_examples; ?>
                
                <div class="tut-try">
                
                    <h3>Try it:</h3>

                    <div class="tut-iframe">
                        <iframe src="https://www.tutorialspoint.com/unix_terminal_online.php"></iframe>
                    </div>
                
                </div>    
                
                <div class="tut-buttons">
                    <a class="tut-prev" href="<?php echo $comm_previousL; ?>">Previous</a>
                    <a class="tut-next" href="<?php echo $comm_nextL; ?>">Next</a>
                </div>
                
            </div>
        </div>