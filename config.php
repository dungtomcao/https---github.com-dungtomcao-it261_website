<?php 

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

//create a function for our navigation so that the function is called out on our header.php page
function my_nav($nav) {
    $my_return = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key) {
            $my_return .= '<li><a class="current" href="'.$key.'">'.$value.'</a></li>';
        } else {
            $my_return .= '<li><a href="'.$key.'">'.$value.'</a></li>';
        } //end else
    } //end foreach
    return $my_return;
} //end function

switch(THIS_PAGE) {
    case 'index.php':
        $title = 'Home page of our IT261 website'; 
        $body = 'home';
        $headline = 'Welcome to our Home Page of IT261 Website!';
        break;
        case 'about.php':
            $title = 'About our IT261 website'; 
            $body = 'about';
            $headline = 'Welcome to our Home Page of IT261 Website!';
            break;
            case 'daily.php':
                $title = 'Daily page of our IT261 website'; 
                $body = 'daily inner';
                $headline = 'Welcome to our Daily Page where my Homework 3 Switch Will Display!';
                break;
                case 'project.php':
                    $title = 'Project page of our IT261 website'; 
                    $body = 'project';
                    $headline = 'Welcome to our Project Page of IT261 Website!';
                    break;
                    case 'contact.php':
                        $title = 'Contact page of our IT261 website'; 
                        $body = 'contact';
                        $headline = 'Welcome to our Contact Page of IT261 Website!';
                        break;
                        case 'gallery.php':
                            $title = 'Gallery page of our IT261 website'; 
                            $body = 'gallery';
                            $headline = 'Welcome to our Gallery Page of IT261 Website!';
                            break;
                            case 'thx.php':
                                $title = 'Thank you'; 
                                $body = 'Thanks!';
                                $headline = 'Thank you for filling out the form.';
                                break;
}

//emailable form php

//display random photos
//step 1: put photos in an array 
//step 2: assign a random number to $i
//step 3: assign random photo to var $rand_photo

$photos = array(
    'photo1',
    'photo2',
    'photo3',
    'photo4',
    'photo5',
);

$photos[0] = 'photo1'; 
$photos[1] = 'photo2'; 
$photos[2] = 'photo3'; 
$photos[3] = 'photo4'; 
$photos[4] = 'photo5'; 

function random_pics($photo_array) {
    $i = rand(0, 4);
    $rand_photo = ''.$photo_array[$i].'.jpg';
    echo '<img src = "photos/'.$rand_photo.'" alt = "'.$photo_array[$i].'">';
}

function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
}