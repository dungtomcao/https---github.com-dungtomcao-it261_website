<?php 

//hw3
date_default_timezone_set('America/Los_Angeles');
if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
    case 'Monday':
        $kitty = '<h2>Monday is Bengal</h2>';
        $pic = 'images/bengal.jpeg';
        $alt = 'Bengal';
        $content = 'The Bengal cat is a domesticated cat breed created from hybrids of domestic cats, the Asian leopard cat (Prionailurus bengalensis) and the Egyptian Mau, which gives them their golden shimmer – the breed name comes from the taxonomic name.';
        $background = 'orange';
        break;
        case 'Tuesday':
            $kitty = '<h2>Tuesday is Birman</h2>';
            $pic = 'images/birman.jpeg';
            $alt = 'Birman';
            $content = 'The Birman, also called the "Sacred Cat of Burma", is a domestic cat breed. The Birman is a long-haired, colour-pointed cat distinguished by a silky coat, deep blue eyes, and contrasting white "gloves" or "socks" on each paw. The breed name is derived from Birmanie, the French form of Burma.';
            $background = 'green';
            break;
            case 'Wednesday':
                $kitty = '<h2>Wednesday is Chartreux</h2>';
                $pic = 'images/chartreux.jpeg';
                $alt = 'Chartreux';
                $content = 'The Chartreux is a rare breed of domestic cat from France and is recognised by a number of registries around the world. The Chartreux is large and muscular (called cobby) with relatively short, fine-boned limbs, and very fast reflexes.';
                $background = 'lightblue';
                break;
                case 'Thursday':
                    $kitty = '<h2>Thursday is Norwegian</h2>';
                    $pic = 'images/norwegian.jpeg';
                    $alt = 'Norwegian';
                    $content = 'The Norwegian Forest cat (Norwegian: Norsk skogkatt or Norsk skaukatt) is a breed of domestic cat originating in Northern Europe. This natural breed is adapted to a very cold climate, with a top coat of glossy, long, water-shedding hairs and a woolly undercoat for insulation.';
                    $background = 'lightpink';
                    break;
                    case 'Friday':
                        $kitty = '<h2>Friday is Ragdoll</h2>';
                        $pic = 'images/ragdoll.jpeg';
                        $alt = 'Ragdoll';
                        $content = 'The Ragdoll is a cat breed with a color point coat and blue eyes. They are large and muscular semi-longhair cat with a soft and silky coat. Developed by American breeder Ann Baker in the 1960s, they are best known for their docile and placid temperament and affectionate nature.';
                        $background = 'beige';
                        break;
                        case 'Saturday':
                            $kitty = '<h2>Saturday is Siberian</h2>';
                            $pic = 'images/siberian.jpeg';
                            $alt = 'Siberian';
                            $content = 'The Siberian is a landrace variety of domestic cat, present in Russia for centuries, and more recently developed as a formal breed, with standards promulgated since the late 1980s.They vary from medium to medium-large in size. A longer name of the formal breed is Siberian Forest Cat, but it is usually referred to as the Siberian.';
                            $background = 'lightpurple';
                            break;
                            case 'Sunday':
                                $kitty = '<h2>Sunday is Somali</h2>';
                                $pic = 'images/somali.jpeg';
                                $alt = 'Somali';
                                $content = 'The Somali cat is often described as a long-haired African cat; a product of a recessive gene in Abyssinian cats, though how the gene was introduced into the Abyssinian gene pool is unknown.';
                                $background = 'white';
                                break;
    
}

?>



<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link href="css/styles.css" type="text/css" rel="stylesheet">
<title><?php echo $title; ?></title>

</head>

<body class = "<?php echo $body; ?>">

<header>

    <div class="header-inner">
        <a href="index.php">
        <img id="logo" src="images/logo.png" alt="logo">
        </a>

        <nav>
            <!-- <ul>
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Daily</a></li>
                <li><a href="">Project</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Gallery</a></li>
            </ul> -->
            <ul>
                <?php 
                echo my_nav($nav);
                ?>
            </ul>
        </nav>

    </div> <!--end header inner-->

</header>