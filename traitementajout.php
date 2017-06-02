<?php


if(isset($_POST['ajoutmembre'])){ 
	if(!empty($_POST['membre1'])){ 
        $membre1=$_POST['membre1'];
        $mail=$membre1;//peut etre a changer
        
            $response =$bdd->query('SELECT id FROM profil WHERE email="'.$mail.'"'); 
            $row = $response->fetch();
            $id=($row['filiere'])
        $insertion = $bdd->prepare('insert into groupe values("'.$id.'","'.$nom.'","membre","NULL","NULL")'); 
        $insertion->execute();
    }
        
    
    
    
    
    




























}





?>