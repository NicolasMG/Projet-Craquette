<?php
    include ('header_non_co.php'); 
    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root','');
    }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }

//Si mot de pas pas égal ou non rempli alors renvoyer sur la meme page avec un message d'erreur.


if(isset($_POST['Confirmer'])){ 

    if(!empty($_POST['mail'])){ 
        $mail = htmlspecialchars($_POST['mail']);

        if(!empty($_POST['nouveaumdp'])){ 
            $nouveaumdp = htmlspecialchars($_POST['nouveaumdp']);
            
            if(strlen($nouveaumdp)>5){ // taille du mot de passe
                
                if(!empty($_POST['confirmermdp'])){
                    $confirmermdp = htmlspecialchars($_POST['confirmermdp']);

                    if (password_verify($nouveaumdp,$confirmermdp)){
                        //A Completer

                        $sql=$bdd->prepare('Select Nom,Prenom,id From profil Where email="'.$mail.'"');
                        $sql->execute(array('.$email.'  =>htmlspecialchars($_POST['mail'])));
                        $sel = $sql->fetch();
                        $option = [
                        $sel['Nom']=> $sel['id'],
                        $sel['Prenom'] => $sel['id'] + 5,
                        ];
                        $MDPS = password_hash($nouveaumdp ,PASSWORD_DEFAULT, $option);

                        $response =$bdd->query('Update profil set motDePasse="'.$MDPS.'" WHERE email="'.$mail.'"'); 
                        $row = $response->fetch();
                    }
                }
            }
        }
    }
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
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
// $mail->SMTPDebug = 2;
$mail->Host = 'smtp.gmail.com';         // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'david.vergnault87@gmail.com';                 // SMTP username
$mail->Password = 'e106684cdf';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('david.vergnault87@gmail.com', 'Mailer');
$mail->addAddress('david.vergnault87@gmail.com', 'David');     // Add a recipient
/*$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name*/
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}


/*
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

*/

?>

<?php include ('footer.php'); ?>