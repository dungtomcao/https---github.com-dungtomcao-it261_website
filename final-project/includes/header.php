<?php 

date_default_timezone_set('America/Los_Angeles');
if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
    case 'Monday':
        $shroom = '<h2>Monday is all about Hedgehog mushrooms!</h2>';
        $pic = 'images/hedge.jpg';
        $alt = 'Hedgehog mushrooms';
        $content = 'Hedgehog mushrooms are uniquely Pacific Northwest mushrooms. They have a spongy, hollow cap and a thick, brittle stalk. The color of these mushrooms ranges from white to gray or pinkish brown. These edible mushrooms provide a good source of vitamin D and can be eaten raw or cooked.

        If you\'re lucky enough to find hedgehogs in the woods, know that they aren\'t poisonous and will add variety to your diet!';
        break;
        case 'Tuesday':
            $shroom = '<h2>Tuesday is all about Lobster mushrooms!</h2>';
            $pic = 'images/lobster.jpg';
            $alt = 'Lobster mushrooms';
            $content = 'Lobster mushrooms are bright red and have a smooth, bulbous cap. They can grow up to 4 inches wide and are commonly found in the Pacific Northwest. Lobster mushrooms are edible, but must be cooked thoroughly before being eaten.

            Lobster mushrooms grow on trunks or branches of oak trees during the summer months and into fall. These mushrooms have a similar appearance to the morel mushroom (Morchella esculenta). However, unlike morels which tend to grow in woodlands or grassy areas away from trees, lobster mushrooms only appear on tree trunks or branches and don\'t grow on grasses like other types of boletes do.
            
            Since they look similar but aren\'t actually related species; some people refer them as “red morels”. You can also find these called “king bolete” because they\'re so large!';
            break;
            case 'Wednesday':
                $shroom = '<h2>Wednesday is all about Oregon Brown Truffles!</h2>';
                $pic = 'images/truff.jpg';
                $alt = 'Oregon Brown Truffles';
                $content = 'Oregon Brown Truffles are a rare mushroom that is found in the Pacific Northwest. They grow underground and can be found in the damp soil under conifers, especially Douglas fir trees. They are not to be confused with Oregon Black Truffles, which look similar but grow on dead or decaying wood and have a more intense flavor.';
                break;
                case 'Thursday':
                    $shroom = '<h2>Thursday is all about Black Trumpet Mushroom!</h2>';
                    $pic = 'images/black.jpg';
                    $alt = 'Black Trumpet Mushroom';
                    $content = 'Black trumpet mushroom is a wild mushroom that grows in the Pacific Northwest.It\'s also called black summer truffle, after the much-prized European truffles that it resembles. But don\'t be fooled: while they\'re both dark and have a garlic/onion flavor profile, black trumpets are not truffles. They\'re mushrooms! The caps of these mushrooms typically range from 1 to 4 inches wide and can be as long as 5 inches. Their color ranges from dark brown to almost black (hence the name).';
                    break;
                    case 'Friday':
                        $shroom = '<h2>Friday is all about Morel!</h2>';
                        $pic = 'images/morel.jpg';
                        $alt = 'Morel';
                        $content = 'The morel is a wild, fungus-like mushroom that grows in the spring, summer and fall months of the Pacific Northwest. Morels are not poisonous but they are not recommended to eat raw. If you choose to eat this mushroom raw, it is said that soaking them in vinegar will help prevent any possible stomach upset associated with consuming them raw. In some parts of Europe and Asia, morels are actually cultivated for culinary use!';
                        break;
                        case 'Saturday':
                            $shroom = '<h2>Saturday is all about Chanterelle!</h2>';
                            $pic = 'images/chan.jpg';
                            $alt = 'Chanterelle';
                            $content = 'All chanterelle mushrooms have a cap that is yellowish-orange to bright orange. They are found in the Pacific Northwest and other parts of North America, where they grow in summer and fall on the edges of deciduous forests. Chanterelles thrive in both rich soil and poor soil, but prefer a moist environment that has been disturbed by recent rain or windfallen trees. The spongy flesh beneath their leathery skin is white or tinged light yellow, depending on the species and condition of the mushroom. Chanterelles can be eaten raw or cooked; when cooked, their flavor resembles apricots or pineapple with an almost smoky aroma.';
                            break;
                            case 'Sunday':
                                $shroom = '<h2>Sunday is all about King bolete!</h2>';
                                $pic = 'images/king.jpg';
                                $alt = 'King bolete';
                                $content = 'The most common type of edible king bolete is the porcini, which is a closely related mushroom that grows in the Pacific Northwest. This mushroom has a brown stem and thick, velvety cap that rises above the ground. Large specimens can reach a foot in diameter and are identifiable by their reticulated pattern, which looks like a white netting stretched over a brown background.';
                                break;
    
}

?>




<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $title; ?></title>
<link href="css/styles.css" type="text/css" rel="stylesheet">

</head>

<body class = "<?php echo $body; ?>">

<header>

    <div class="header-inner">
        <a href="index.php">
        <img id="logo" src="images/logo.png" alt="logo">
        </a>
        <h1>Fungi of the Pacific Northwest</h1>
        <nav>
            <!-- <ul>
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Fungi Database</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Daily Fungi</a></li>
            </ul> -->
            <ul>
                <?php 
                echo my_nav($nav);
                ?>
            </ul>
        </nav>

    </div> <!--end header inner-->

</header>
