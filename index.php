<?php
include('config.php');
include('include/header.php'); ?>

<div id="wrapper">
    <div id="hero">
    <?php echo random_pics($photos); ?>
<h2>
    <pre>
        <br>
    Random function:
    function random_pics($photo_array) {
        $i = rand(0, 4);
        $rand_photo = ''.$photo_array[$i].'.jpg';
        echo '&lt;img src = "photos/'.$rand_photo.'" alt = "'.$photo_array[$i].'" &gt;';
    }
    </pre>
</h2>

    </div> <!--end hero-->

    <main>
        <h1><?php echo $headline;?></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consequat, turpis in suscipit accumsan, mi nunc luctus risus, nec dapibus purus diam eget est. Vivamus lobortis vitae ligula id maximus. Suspendisse faucibus id ante vel laoreet. Suspendisse viverra ligula sit amet sem blandit dignissim. Aliquam nec magna in dolor laoreet imperdiet cursus sed dolor. Morbi scelerisque purus turpis, quis molestie mauris ullamcorper nec. Praesent finibus nunc eget tellus efficitur tempor. Integer porttitor orci vitae ligula tincidunt rutrum.</p>
    </main>

    <aside>

    </aside>

<?php 
include('include/footer.php');