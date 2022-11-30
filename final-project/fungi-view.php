<?php
    include ('config.php'); 
    //if isset $_GET['today'] <etc class="">

    if(isset($_GET['id'])) {
        $id = (int)$_GET['id'];
    } else {
        header('Location: fungi.php');
    }

    $sql = 'SELECT * FROM fungi WHERE fungiID = '.$id.'';
    $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a variable $result and assign query to result

    $result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

    if(mysqli_num_rows($result) > 0) {
        // now time for a while loop and the while loop will return the array
        while($row = mysqli_fetch_assoc($result)) {
            // we are not echoing here, we are assigning our row first_name to $first_name
            $name = stripslashes($row['name']);
            $species = stripslashes($row['species']);
            $cap = stripslashes($row['cap']);
            $stalk = stripslashes($row['stalk']);
            $spore = stripslashes($row['spore']);
            $poisonous = stripslashes($row['poisonous']);
            $location = stripslashes($row['location']);
            $feedback = '';
            } //end while loop
        } else {
            $feedback = 'oh no, our coding, it\'s broken';
        } 
        // for the bid assignment, you will now call out the header include
        include ('includes/header.php');

?>
<div class="body">
<main>
<h1>About <? echo $name; ?></h1>

<?php
    if ($feedback == '') {
        echo '<ul>';
        echo '<li><img src="images/photo'.$id.'.jpg"></img></li>';
        echo '<li><b>Name</b>: '.$name.'</li>';
        echo '<li><b>Scientific Name</b>: '.$species.'</li>';
        echo '<li><b>Cap</b>: '.$cap.'</li>';
        echo '<li><b>Stalk</b>: '.$stalk.'</li>';
        echo '<li><b>Spore</b>: '.$spore.'</li>';
        echo '<li><b>Poisonous</b>: '.$poisonous.'</li>';
        echo '<li><b>Location</b>: '.$location.'</li>';
        echo '</ul>';
        echo 'Return back to the <a href = "fungi.php">fungi database</a>';
    }
?>

</main>
</div>

<?php
mysqli_free_result($result);
mysqli_close($iConn);
include('includes/footer.php');
?>