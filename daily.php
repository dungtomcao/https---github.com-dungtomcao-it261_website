<?php
include('config.php');
include('include/header.php'); ?>

<div id="wrapper">

    <main style="background:<?php echo $background;?>;">
        <h1><?php echo $headline;?></h1>
        <?php echo $kitty; ?>
        <img src="<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
        <p><?php echo $content; ?></p>

        <h2>Check out the other kitties of the day!</h2>
        <ul>
            <li><a href="daily.php?today=Monday">Monday</a></li>
            <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
            <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
            <li><a href="daily.php?today=Thursday">Thursday</a></li>
            <li><a href="daily.php?today=Friday">Friday</a></li>
            <li><a href="daily.php?today=Saturday">Saturday</a></li>
            <li><a href="daily.php?today=Sunday">Sunday</a></li>
        </ul>
    </main>

    <aside>

    </aside>

<?php 
include('include/footer.php');