<?php
include('config.php');
include('includes/header.php'); ?>

<?php
    //a php reference of this page
    //errors when user doesn't fill out fields
    $name = '';
    $email = '';
    $phone = '';
    $fungi = '';
    $rating = '';
    $comment = '';
    $privacy = '';

    $name_Err = '';
    $email_Err = '';
    $phone_Err = '';
    $fungi_Err = '';
    $rating_Err = '';
    $comment = '';
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

        if(empty($_POST['fungi'])) {
            $fungi_Err = 'Please select types of fungi you would like to see more';
        } else {
            $fungi = $_POST['fungi'];
        }

        if(empty($_POST['rating'])) {
            $rating_Err = 'Please rate our work';
        } else {
            $rating = $_POST['rating'];
        }

        if(empty($_POST['comment'])) {
            $comment = 'no comment';
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
            $_POST['fungi'],
            $_POST['rating'],
            $_POST['privacy'] 
        )) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $fungi = $_POST['fungi'];
            $rating = $_POST['rating'];
            $comment = $_POST['comment'];

            function fungi_list() {
                $list_return = '';
                if(!empty($_POST['fungi'])) {
                    $list_return .= implode(', ', $_POST['fungi']);
                }
                return $list_return;
            }
            $list_fungi = fungi_list();
            $to = 'szemeo@mystudentswa.com';
            $subject = 'Your Information!';
            $body = 'Thank you for filling out my form! Here is what you fill out: '.PHP_EOL.'
            Your name: '.$name.' '.PHP_EOL.'
            Your email: '.$email.' '.PHP_EOL.'
            Your phone number: '.$phone.' '.PHP_EOL.'
            You wish to see more: '.$list_fungi.' '.PHP_EOL.'
            Your rating: '.$rating.' '.PHP_EOL.'
            Your comment: '.$comment.' '.PHP_EOL.'
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
    <main class="contact">
        <h1><?php echo $headline;?></h1>
        <p>Let us know what you think through this form: </p>
        <?php include('includes/form.php'); ?>
    </main>
</div>
    <?php
include('includes/footer.php');
