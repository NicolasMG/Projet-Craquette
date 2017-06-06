<!doctype html>
<section>
<p><br><br><br><br></p>

<?php
    
    include('header.php');
    // PAS CE HEADER
    session_start();
    session_unset();
    session_destroy();

    echo("Déconnexion bien effectuée");


?>
<br>
    <a href='index.php'><button type="submit" class="btn">Se connecter sur une autre session</button></a>
</section>  

