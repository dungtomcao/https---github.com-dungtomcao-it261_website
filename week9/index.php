<?php 

// this index page is the homepage of my wonderful website :)
// also after creating this index page, you will not be able to access this unless you login or register then login

session_start();

include('config.php');

// if the user does not log in correctly, they will be directed to the log page.

if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login first.';
    header('Location:login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

// do not forget the header.php include here
include('includes/header.php');
// notification message 
// if successful -> welcome user

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
    <h3> Hi
    <?php echo $_SESSION['username']; ?>
    </h3>
    <p><a href="index.php?logout='1' ">Log out </a></p>
</div> <!--end welcome-logout div -->
<?php endif ; ?> <!-- end welcome-logout div -->

</header>
<div id="wrapper">
<h1>oh whoa a whole website</h1>

<!-- your footer include will be placed at the bottom of the page -->

</div> <!--end wrapper-->

<?php 
include('includes/footer.php');