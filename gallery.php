<?php
include('config.php');
include('include/header.php'); ?>

<?php
    $deepsea ['Blobfish'] = 'blob_Psychrolutes marcidus, the smooth-head blobfish, also known simply as blobfish, is a deep sea fish of the family Psychrolutidae.';
    $deepsea ['Giant_Squid'] = 'squi_Its long tentacles twisting about like huge snakes.';
    $deepsea ['Coffinfish'] = 'coff_The coffinfish is a species of sea toad of the family Chaunacidae.';
    $deepsea ['Japanese_Spider_Crab'] = 'crab_They can survive with up to three missing limbs and can grow back these missing limbs during successive moults.';
    $deepsea ['Dragonfish'] = 'drag_These ferocious predators lurk at the depths of up to 5,000 meters, deep down in the Atlantic Oceans.';
    $deepsea ['Fangtooth_Fish'] = 'fang_These fishes have the largest teeth of any marine species, relative to the size of their body. This makes them unable to close their mouth fully.';
    $deepsea ['Sea_Spider'] = 'spid_There are almost 1300 known species of sea spiders that lurk in both the shallows and in the deep waters as 7000 meters. Their leg span can range from a small one millimetre to over 25 centimetres.';
    $deepsea ['Giant_Isopod'] = 'isop_They are usually scavengers but have been known to use their four sets of jaws for feeding on live prey.';
?>

    <main>
        <h1><?php echo $headline;?></h1>
        <table>
        <?php foreach($deepsea as $name => $image) : ?>
        <tr>
            <td><img src="gallery_photos/<?php echo substr($image, 0, 4); ?>.jpg" alt="<?php echo str_replace('_', ' ', $name); ?>"></td>
            <td><?php echo str_replace('_', ' ', $name); ?></td>
            <td><?php echo substr($image, 5) ?></td>
            <td></td>
        </tr>
        <?php endforeach; ?>
    </table>
    </main>

    <aside>

    </aside>

<?php 
include('include/footer.php');