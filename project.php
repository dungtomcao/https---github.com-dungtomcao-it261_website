<?php
include('config.php');
include('include/header.php'); ?>

<?php
    //a php reference of this page
    //errors when user doesn't fill out fields
    $name = '';
    $email = '';
    $phone = '';
    $jelly = '';
    $zoo = '';
    $privacy = '';

    $name_Err = '';
    $email_Err = '';
    $phone_Err = '';
    $jelly_Err = '';
    $zoo_Err = '';
    $privacy_Err = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(empty($_POST['name'])) {
            $name_Err = 'Please fill out your name';
        } else {
            $name = $_POST['name'];
        }

        if(empty($_POST['email'])) {
            $email_Err = 'Please fill out your email';
        } else {
            $email = $_POST['email'];
        }

        if(empty($_POST['phone'])) {
            $phone_Err = 'Please type your phone number';
        } elseif (array_key_exists('phone', $_POST)) {
            if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) { 
                $phone_Err = 'Invalid format!';
            } else {
                $phone = $_POST['phone'];
            }
        }    

        if(empty($_POST['jelly'])) {
            $jelly_Err = 'Please select some jellyfishes';
        } else {
            $jelly = $_POST['jelly'];
        }

        if(empty($_POST['zoo'])) {
            $zoo_Err = 'Please choose a zoo animal';
        } else {
            $zoo = $_POST['zoo'];
        }

        if(empty($_POST['privacy'])) {
            $privacy_Err = 'you MUST agree to continue';
        } else {
            $privacy = $_POST['privacy'];
        }
        //if the fields are filled out, send an email with info
        if(isset(
            $_POST['name'],
            $_POST['email'],
            $_POST['phone'],
            $_POST['jelly'],
            $_POST['zoo'],
            $_POST['privacy'] 
        )) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $jelly = $_POST['jelly'];
            $zoo = $_POST['zoo'];

            function jell_list() {
                $list_return = '';
                if(!empty($_POST['jelly'])) {
                    $list_return .= implode(', ', $_POST['jelly']);
                }
                return $list_return;
            }
            $list_jelly = jell_list();
            $to = 'szemeo@mystudentswa.com';
            $subject = 'Your Information!';
            $body = 'Thank you for filling out my form! Here is what you fill out: '.PHP_EOL.'
            Your name: '.$name.' '.PHP_EOL.'
            Your email: '.$email.' '.PHP_EOL.'
            Your phone number: '.$phone.' '.PHP_EOL.'
            Your jellyfishes: '.$list_jelly.' '.PHP_EOL.'
            Your zoo animal: '.$zoo.' '.PHP_EOL.'
            ';
            $headers = array(
                'From' => 'noreply@tomswebwork.com',
                'Reply-to' => ''.$email.''
            );
            mail($to, $subject, $body, $headers);
            header('Location: thx.php');
        }
    }
?>

<div id="wrapper">
    
    <main>

        <h1><?php echo $headline;?></h1>
        <?php
    //dont forget, this needs to be uploaded on the server in order for it to be seen
    include ('config.php');
    include ('includes/header.php');

// for your big database assignment, your header include would go right here
// we need to grab our table and assign it to a variable
?>

<main>

<?php
$sql = 'SELECT * FROM people';

// we need to connect to the database using mysqli_connect() function
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a variable $result and assign query to result

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

//time for the if statement -- if we have > 0 rows, that's all cool

if(mysqli_num_rows($result) > 0) {
// now time for a while loop and the while loop will return the array
    while($row = mysqli_fetch_assoc($result)) {
        echo '<h3>For more information about '.$row['first_name'].', please click <a href = "people-view.php?id='.$row['people_id'].'">here!</a></h3>';
        echo '<ul>';
        echo '<li>'.$row['first_name'].'</li>';
        echo '<li>'.$row['last_name'].'</li>';
        echo '<li>'.$row['email'].'</li>';
        echo '</ul>';
        echo '<hr>';
    } // close while
} else {
    echo 'uh oh mayday mayday';
}

mysqli_free_result($result);
mysqli_close($iConn);

?>
</main>

    </main>

    <aside>
        <h3>Our Aside for Project</h3>

    </aside>

    <?php
include('include/footer.php');