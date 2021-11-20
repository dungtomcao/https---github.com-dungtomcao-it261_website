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
        <p>Hey, do you wanna send an email through this website? If you do, </p>
        <h2>Please fill out this form!</h2>
        <?php include('include/form.php'); ?>
    </main>

    <aside>
        <h3>Our Aside for our Form</h3>

    </aside>

    <?php
include('include/footer.php');