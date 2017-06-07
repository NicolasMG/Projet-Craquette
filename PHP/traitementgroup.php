<br><br><br><br>
<?php
session_start();
    include('protection_session.php');
include('entete.php');


if(isset($_POST['creegroupe'])){ 
	if(!empty($_POST['nomgroupe'])){ 
		$nom = htmlspecialchars($_POST['nomgroupe']);
        $id=$_SESSION['ID'];
        $insertion = $bdd->prepare('insert into groupe values("'.$id.'","'.$nom.'","administrateur","NULL","NULL")'); 
        $insertion->execute();    
        //peut etre photo par defaut
    }
}



?>
<section>
<p>Votre groupe a bien été crée.</p>
    <br>

<a href='groupe.php'><button type="submit" class="btn">Voir mon groupe.</button></a>

</section>
