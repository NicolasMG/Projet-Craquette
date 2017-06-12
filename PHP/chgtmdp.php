<?php
include ('header_non_co.php'); 

    try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); // stocker la connexion à la base de données dans la variable $bdd
    }
    catch(Exception $e){ // si cela ne fonctionne pas : attraper l'erreur...
        die('Erreur : '.$e->getMessage()); // ... arrêter le processus et afficher l'erreur
    }
        
    session_start();

if(isset($_POST['Confirmer2'])){ 
    if(!empty($_POST['code'])){ 
        if ($_POST['code']==$_SESSION['binHex']){
            if(!empty($_POST['nouveaumdp'])){ 
                $nouveaumdp = htmlspecialchars($_POST['nouveaumdp']);

                if(!empty($_POST['confirmermdp'])){
                    $confirmermdp = htmlspecialchars($_POST['confirmermdp']);
                   
                    if ($nouveaumdp==$confirmermdp){

                        $sql=$bdd->prepare('Select Nom,Prenom,id From profil Where email="'.$_SESSION['mailChangementMDP'].'"');
                        $sql->execute(array('.$email.'  =>$_SESSION['mailChangementMDP'])); //ATTIENTION AU email
                        $sel = $sql->fetch();
                        $option = [
                            $sel['Nom']=> $sel['id'],
                            $sel['Prenom'] => $sel['id'] + 5,
                        ];
                        
                        $MDPS = password_hash($nouveaumdp ,PASSWORD_DEFAULT, $option);
                        /*
                        $response =$bdd->query('Update profil set motDePasse="'.$MDPS.'" WHERE email="'.$_SESSION['mailChangementMDP'].'"'); 
                        $row = $response->fetch();
                        */
                        $response = $bdd->prepare('Update profil set motDePasse="'.$MDPS.'" WHERE email="'.$_SESSION['mailChangementMDP'].'"');
                        $response->execute();  // exécution de l'insertion
                        
                        echo '
    <section style="text-align:center;">
    <p style="margin-top:50px;">Votre mot de passe à bien été changé.</p>
    <form style="padding-top:50px;" class="form-horizontal" method="post" action="../index.php" enctype="multipart/form-data">
        <div class="form-group">
            <input type="submit" style="width:120px; display:inline;" class="form-control" name="Confirmer3" value="Se connecter"/>
        </div>
        
    </form>
    </section>';
                        session_unset();
                        session_destroy();
                    }
                    else
                    {
                        echo '
        <p style="text-align:center; margin-top:50px;">Les deux mots de passe ne sont pas identiques. Veuillez recommencer.</p>
        <section style="text-align:center;">

        <form style="padding-top:50px;" class="form-horizontal" method="post" action="chgtmdp.php" enctype="multipart/form-data">
            <div class="form-group">
                        <label for="Code">
                            Entrez le code:
                        </label>           
                        <div style="display:inline;">
                           <input type="code" class="form-control" style="width:250px; display:inline;" name="code" placeholder= "Code" /> 
                        </div>
                    </div>
            <div class="form-group">
                        <label for="nouveaumdp">
                            Nouveau mot de passe:
                        </label>           
                        <div style="display:inline;">
                           <input type="password" class="form-control" style="width:250px; display:inline;" name="nouveaumdp" placeholder= "Mot de passe" /> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="confirmermdp">
                            Confirmer nouveau mot de passe:
                        </label>
                        <div style="display:inline;">
                           <input type="password" class="form-control" style="width:250px; display:inline;" name="confirmermdp" placeholder= "Mot de passe" />
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" style="width:100px; display:inline;" class="form-control" name="Confirmer2"/>
                    </div>

            </form>
    </section>';
                    }
                }
            }
       }
        else{
            echo '
        <p style="text-align:center; margin-top:50px;">Vous avez saisi un mauvais code. Veuillez recommencer.</p>
        <section style="text-align:center;">

        <form style="padding-top:50px;" class="form-horizontal" method="post" action="chgtmdp.php" enctype="multipart/form-data">
            <div class="form-group">
                        <label for="Code">
                            Entrez le code:
                        </label>           
                        <div style="display:inline;">
                           <input type="code" class="form-control" style="width:250px; display:inline;" name="code" placeholder= "Code" /> 
                        </div>
                    </div>
            <div class="form-group">
                        <label for="nouveaumdp">
                            Nouveau mot de passe:
                        </label>           
                        <div style="display:inline;">
                           <input type="password" class="form-control" style="width:250px; display:inline;" name="nouveaumdp" placeholder= "Mot de passe" /> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="confirmermdp">
                            Confirmer nouveau mot de passe:
                        </label>
                        <div style="display:inline;">
                           <input type="password" class="form-control" style="width:250px; display:inline;" name="confirmermdp" placeholder= "Mot de passe" />
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" style="width:100px; display:inline;" class="form-control" name="Confirmer2"/>
                    </div>

            </form>
    </section>';
        }
    }
}
else{
    if(isset($_POST['Confirmer'])){
        if(!empty($_POST['mail'])){            
            $destinataire = htmlspecialchars($_POST['mail']);
            //Verifier SQL si mail dans base de donnée
                        $_SESSION['mailChangementMDP']=$destinataire;

                        require 'PHPMailer/PHPMailerAutoload.php';
                        require 'random_compat/lib/random.php';
                        $string = random_bytes(5);

                        $mail = new PHPMailer;


                        $mail->isSMTP();                                      // Set mailer to use SMTP
                        $mail->Host = 'smtp.gmail.com';         // Specify main and backup SMTP servers
                        $mail->SMTPAuth = true;                               // Enable SMTP authentication
                        $mail->Username = 'david.vergnault87@gmail.com';                 // SMTP username
                        $mail->Password = 'e106684cdf';                           // SMTP password
                        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                        $mail->Port = 587;                                    // TCP port to connect to

                        $mail->setFrom('CraquetteMailer@Craquette.fr', 'Craquette');
                        $mail->addAddress($destinataire);     // Add a recipient
                        /*$mail->addAddress('ellen@example.com');               // Name is optional
                        $mail->addReplyTo('info@example.com', 'Information');

                        $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                        $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name*/
                        $mail->isHTML(true);                                  // Set email format to HTML

                        $_SESSION['binHex']=bin2hex($string); // binHex dans cookie

                        $mail->Subject = 'Changement de mot de passe';
                        $mail->Body    = 'Vous avez fait une demande de changement de mot de passe. Votre code est : <b>'.$_SESSION['binHex'].'</b>';

                        if(!$mail->send()) {
                            echo 'Message could not be sent.';
                            echo 'Mailer Error: ' . $mail->ErrorInfo;
                        } else {
                            echo '
                    <p style="text-align:center; margin-top:50px;">Un code viens d\'être envoyé sur l\'adresse Email indiquée. Veuillez entrer ce code ci-dessous puis changer votre mot de passe.</p>
                    <section style="text-align:center;">

                    <form style="padding-top:50px;" class="form-horizontal" method="post" action="chgtmdp.php" enctype="multipart/form-data">
                        <div class="form-group">
                                    <label for="Code">
                                        Entrez le code:
                                    </label>           
                                    <div style="display:inline;">
                                       <input type="code" class="form-control" style="width:250px; display:inline;" name="code" placeholder= "Code" /> 
                                    </div>
                                </div>
                        <div class="form-group">
                                    <label for="nouveaumdp">
                                        Nouveau mot de passe:
                                    </label>           
                                    <div style="display:inline;">
                                       <input type="password" class="form-control" style="width:250px; display:inline;" name="nouveaumdp" placeholder= "Mot de passe" /> 
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="confirmermdp">
                                        Confirmer nouveau mot de passe:
                                    </label>
                                    <div style="display:inline;">
                                       <input type="password" class="form-control" style="width:250px; display:inline;" name="confirmermdp" placeholder= "Mot de passe" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" style="width:100px; display:inline;" class="form-control" name="Confirmer2"/>
                                </div>

                        </form>
                </section>';
                        }
                
        }
        else{
        echo '
        <section style="text-align:center;">
            <p style="margin-top:50px;">Veuillez indiquer une adresse Email</p>
            <form style="padding-top:50px;" class="form-horizontal" method="post" action="chgtmdp.php" enctype="multipart/form-data">         
                        <div class="form-group">
                            <label for="mail">
                            Adresse Email : 
                            </label>
                            <div style="display:inline;">
                               <input type="email" class="form-control" style="width:250px; display:inline;" name="mail" placeholder= "exemple@exemple.com" />  
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" style="width:100px; display:inline;" class="form-control" name="Confirmer"/>
                        </div>
            </form>
        </section>';
        }
    }
    else{
        echo '
        <section style="text-align:center;">

            <form style="padding-top:50px;" class="form-horizontal" method="post" action="chgtmdp.php" enctype="multipart/form-data">         
                        <div class="form-group">
                            <label for="mail">
                            Adresse Email : 
                            </label>
                            <div style="display:inline;">
                               <input type="email" class="form-control" style="width:250px; display:inline;" name="mail" placeholder= "exemple@exemple.com" />  
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" style="width:100px; display:inline;" class="form-control" name="Confirmer"/>
                        </div>
            </form>
        </section>';
    }
}
?>
