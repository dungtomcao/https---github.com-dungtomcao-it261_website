<?php

session_start();

include('config.php');

if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login first.';
    header('Location:login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

include('includes/header.php'); 

if(isset($_SESSION['success'])) : ?>
<div class="success">
<h3>
    <?php echo $_SESSION['success'];
    unset($_SESSION['success']); 
    ?>
</h3>
</div> <!-- end if success -->
<?php endif ; 

if(isset($_SESSION['username'])) : ?>

<div class="welcome-logout">
    <h3> Hello <?php echo $_SESSION['username']; ?>!</h3> </br>
    <p><a href="index.php?logout='1' ">Log out </a></p>
</div> <!--end welcome-logout div -->
<?php endif ; ?> <!-- end welcome-logout div -->


<div class="body">
    <main class="home">
    <h1><?php echo $headline;?></h1>
    <p>Welcome to the Fungi of the Pacific Northwest Database. Here you will find a rich collection of fungi in the Pacific Northwest. Our team collects information from all over the web and real life fungi professionals to deliver you a comprehensive yet fascinating and educational guide of your favorite mushrooms. Please feel free to browse our project and/or contact us to add even more variety to this database! Enjoy learning!</p>
    </main>

    <aside>
        <h2>Where is the Pacific Northwest?</h2>
            <p>The Pacific Northwest (sometimes Cascadia, or simply abbreviated as PNW) is a geographic region in western North America bounded by its coastal waters of the Pacific Ocean to the west and, loosely, by the Rocky Mountains to the east. Though no official boundary exists, the most common conception includes the U.S. states of Oregon, Washington, and Idaho, and the Canadian province of British Columbia.</p>
</aside>
</div> 

<?php
include('includes/footer.php'); 