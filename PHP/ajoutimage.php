<?php 

include('header_accueil.php');


    if(!$_FILES['imageprofil']['error']>0){
      if(!empty($_FILES['imageprofil'])){ 
          $imageprofil = $_FILES['imageprofil']['name']; 
                
          
                //pas crees fichier si deja cree//ou le faire a la creation du compt
                //mkdir('fichier"'.$id"'",0777, true); //fichier cré               
                $nom1=md5(uniqid(rand(),true)); 
                $nom="Images/album/$nom1";
                $resultat=move_uploaded_file($_FILES['imageprofil']['tmp_name'], $nom);




?>