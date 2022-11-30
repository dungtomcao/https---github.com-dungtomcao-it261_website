<?php
include('config.php');
include('includes/header.php');
?>
<div class="body">
    <main>
        <h1><?php echo $headline;?></h1>
        <div class="grid">
        <?php
$sql = 'SELECT * FROM fungi';

// we need to connect to the database using mysqli_connect() function
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a variable $result and assign query to result

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

//time for the if statement -- if we have > 0 rows, that's all cool
if(mysqli_num_rows($result) > 0) {
// now time for a while loop and the while loop will return the array
    while($row = mysqli_fetch_assoc($result)) {
        
        echo '<div class="item">
        <a href= "fungi-view.php?id='.$row['fungiID'].'"> 
        <img class="grid-img" src="images/photo'.$row['fungiID'].'.jpg"></img>
        </a>
        </div>';
    } // close while
} else {
    echo 'uh oh mayday mayday';
}

mysqli_free_result($result);
mysqli_close($iConn);

?>
</div>
    </main>

<?php 
include('includes/footer.php');