<?php
include('config.php');
include('includes/header.php'); ?>
<div class="body">
    <main class="switch-m">
    <h1><?php echo $headline;?></h1>
    <?php echo $shroom; ?>
    <img class="switch-img" src="<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
    <p class="switch-p"><?php echo $content; ?></p>

    <h2>Check out all fungi of the day!</h2>
            <p><a href="switch.php?today=Monday">Monday</a> | <a href="switch.php? today=Tuesday">Tuesday</a> | <a href="switch.php?today=Wednesday">Wednesday</a> | <a href="switch.php?today=Thursday">Thursday</a> | <a href="switch.php?today=Friday">Friday</a> | <a href="switch.php?today=Saturday">Saturday</a> | <a href="switch.php?today=Sunday">Sunday</a>
        </p>
    </main>

    <aside>
        
</aside>
</div> 
<?php 
include('includes/footer.php');