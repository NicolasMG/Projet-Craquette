<!doctype html>

<?php
    
    include('header_non_co.php');
    // PAS CE HEADER
    session_start();
    session_unset();
    session_destroy();
?>
<section style="text-align:center;">

<form class="form-horizontal" method="post" action="../index.php" >              
    <div class="form-group" >
        <p style="margin-top:50px; margin-bottom:20px;">Déconnexion bien effectuée.</p>
        <div>
            <input class="form-control" style="width:250px; display:inline;"  type="submit" name="deco" placeholder="prenom.nom@uha.fr" value="Se connecter sur une autre session"/>
        </div>             
    </div>
</form>
 
</section>
</body>
</html>

