<?php
//use a for each loop to print
//cannot echo and array => use foreach

if(count($errors) > 0): ?> 
    <div class="error">
        <?php foreach($errors as $error): ?>
            <p><?php echo $error; ?></p>
            <?php endforeach; ?>
    </div>
    <?php endif; ?>