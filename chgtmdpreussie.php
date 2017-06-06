<?php include ('header.php'); 
/*
Si mot de pas pas égal ou non rempli alors renvoyer sur la meme page avec un message d'erreur.


if(isset($_POST['Confirmer'])){ // 

	if(!empty($_POST['nouveaumdp'])){ 
        $nouveaumdp = $_POST['confirmermdp'];

		 
		if(!empty($_POST['confirmermdp'])){
            $confirmermdp = $_POST['confirmermdp'];
            
            if (password_verify($nouveaumdp,$confirmermdp)){
                //A Completer
            }
	}
    
*/
}

    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }
        
    session_start();
    $mail=$_SESSION['mail'];

?>

<?php

if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}

$message_txt = "Salut à tous, voici un e-mail envoyé par un script PHP.";
$message_html = "<html><head></head><body><b>Salut à tous</b>, voici un e-mail envoyé par un <i>script PHP</i>.</body></html>";

$boundary = "-----=".md5(rand());

$sujet = "Hey mon ami !";

    
$header = "From: \"Craquette\"<david.Vergnault@hotmail.fr>".$passage_ligne;

$header.= "Reply-to: \"Craquette\" <david.vergnault@hotmail.fr>".$passage_ligne; 

$header.= "MIME-Version: 1.0".$passage_ligne; 

$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;


$message = $passage_ligne."--".$boundary.$passage_ligne;
$message .= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message .= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;


$message.= $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format HTML
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========
 
//=====Envoi de l'e-mail.
mail($mail,$sujet,$message,$header);



?>
Mail bien envoyé
<?php include ('footer.php'); ?>