<footer>
    <div class=footer>
    <p>Designed by Tom | 
        <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Ftomswebwork.site%2Fit261%2Ffinal-project%2F" target="_blank">HTML Validation</a> | 
        <a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Ftomswebwork.site%2Fit261%2Ffinal-project%2F&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en" target="_blank">CSS Validation</a> | 
        Copyright &copy; 
            <?php 
            $date_current = date('Y');
            $date_created = 2021;
            if($date_current == $date_created) {
                echo $date_created;
            } else {
                echo ''.$date_created.' - '.$date_current.'';
            }
             ?>
</p>
        </div>
</footer>
</body>
</html>