        <div>
            <ul class="content-trail">
                <li><a href="<?php echo $path;?>index.php">Home</a></li>
                <li><a href="<?php echo $path;?>tutorials/index.php">Tutorials</a></li>
                <li><a href="tut-initial-<?php echo $comm_sec_link; ?>.php"><?php echo $comm_sec; ?> Tutorials</a></li>
                <li><a href="#"><?php echo $comm_name; ?></a></li>      
            </ul>
        </div>
        <div class="tut-cont">    
            <div class="tut-main">
                <h2>Getting Started</h2>
                <p><?php echo $intro_desc; ?></p>
                
                <h3>The Terminal:</h3>
                <?php echo $intro_term; ?>    
                    
                <h3>Commands:</h3>
                <?php echo $intro_comm; ?> 
                
                <h3>Directories:</h3>
                <?php echo $intro_direct; ?> 
                
                <h3>The Shell:</h3>
                <?php echo $intro_shell; ?> 
                
                <h2>Now you're ready to start learning Unix!</h2>
                
                <div class="tut-buttons">
                    <a class="tut-prev" href="<?php echo $comm_nextL; ?>">Next</a>
                </div>
                
            </div>
        </div>