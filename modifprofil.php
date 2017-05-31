<!DOCTYPE html>
<?php
    session_start();
    $mail = $_SESSION['ID'];
   //$mail="rachel.noireau@uha.fr";
   // echo($mail);

    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); 
    }
    catch(Exception $e){ 
        die('Erreur : '.$e->getMessage()); 
    }
?>



<form class="form-horizontal" method="post" action="traitementmodif.php" >
        <p>
					<label for="adresse">
						Adresse:
					</label>
					<input type="text" class="input-medium search-query" name="adresse" placeholder= "Votre adresse" />
        </p>
    
    
     <input type="submit" value="Appliquer" name="modif"/>
    
</form>
                
         
