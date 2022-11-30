<?php 

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('includes/credentials.php');

//initialize variables
$first_name = '';
$last_name = '';
$email = '';
$username = '';
$password = '';
$success = 'You have successfully logged on!';
$errors = array();

function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Oh no an oopsie! ';
      die();
  }
    
    
}




define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['fungi.php'] = 'Database';
$nav['switch.php'] = 'Daily Fungi';
$nav['contact.php'] = 'Contact';

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
        $title = 'Home of Fungi of PNW'; 
        $body = 'home';
        $headline = 'Home';
        break;
        case 'about.php':
            $title = 'About Fungi of PNW'; 
            $body = 'about';
            $headline = 'About';
            break;
            case 'fungi.php':
                $title = 'Database of Fungi of PNW'; 
                $body = 'database';
                $headline = 'Fungi Database';
                break;
                case 'switch.php':
                    $title = 'Daily Fungi of PNW'; 
                    $body = 'switch';
                    $headline = 'Fungi of the Day';
                    break;
                    case 'contact.php':
                        $title = 'Contact Fungi of PNW'; 
                        $body = 'contact';
                        $headline = 'Contact us!';
                        break;
                            case 'thx.php':
                                $title = 'Thank you'; 
                                $body = 'thanks';
                                $headline = 'Thank you for filling out the form!';
                                break;
                                case 'fungi-view.php':
                                    $title = 'View Fungi of PNW'; 
                                    $body = 'fungi view';
                                    $headline = 'View the fungi';
                                    break;
                                    case 'login.php':
                                        $title = 'Login'; 
                                        $body = 'login';
                                        $headline = 'Login';
                                        break;
                                        case 'register.php':
                                            $title = 'Register'; 
                                            $body = 'register';
                                            $headline = 'Register';
                                            break;
}

