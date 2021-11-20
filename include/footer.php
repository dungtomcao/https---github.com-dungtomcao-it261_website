<footer>
    <ul>
        <li>Copyright &copy; 
            <?php 
            $date_current = date('Y');
            $date_created = 2021;
            if($date_current == $date_created) {
                echo $date_created;
            } else {
                echo ''.$date_created.' - '.$date_current.'';
            }
             ?>
        </li>
        <li>All Rights Reserved</li>
        <li><a href="">Terms of Use</a></li>
        <li><a href="">Web Design by Tom</a></li>
        <li><a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Ftomswebwork.site%2Fit261%2Fwebsite%2F" target="_blank">HTML Validation</a></li>
        <li><a href="http://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Ftomswebwork.site%2Fit261%2Fwebsite%2F&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en" target="_blank">CSS Validation</a></li>
        </ul>
    </footer>
</div> <!--end wrapper-->

</body>
</html>