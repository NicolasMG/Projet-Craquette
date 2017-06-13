<?php 

include('header_accueil.php');

//if(isset($_POST['inscription'])){
    if(!$_FILES['image']['error']>0){
      if(!empty($_FILES['image'])){ 
          $imageprofil = $_FILES['image']['name']; 
                
          
                //pas crees fichier si deja cree//ou le faire a la creation du compt
                //mkdir('fichier"'.$id"'",0777, true); //fichier cré               
                $nom1=md5(uniqid(rand(),true)); 
                $nom="Images/album/fichier".$idef."/$nom1";
                $resultat=move_uploaded_file($_FILES['image']['tmp_name'], $nom);

      }}

     $pbnom="album.php";
        //echo "<script>window.location = "."'".$pbnom."'"."</script>";
?>