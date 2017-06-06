
<br>
<br>
    <br>
<?php
session_start();
include('header_profil.php');
//session_start();
if(isset($_POST['creepage'])){ 
	if(!empty($_POST['nompagee'])){
           
        
<<<<<<< HEAD
        $nom = $_POST['nompage'];
        $_SESSION['nompage']=$_POST['nompage'];
=======
		$nom = htmlspecialchars($_POST['nompage']);
        $_SESSION['nompage']=htmlspecialchars($_POST['nompage']);
        //echo $nom;
>>>>>>> 4d35d71efe0dd4ffc13ac68f64111bfcd66dde2c
        $id=$_SESSION['ID'];
////////
        
        $reponse=$bdd->prepare('Select nompage From groupe Where nompage="'.$nom.'"');
        $nom=htmlentities($_POST['nompage']);
        $reponse->execute(array('.$nom.'=>$_POST['nompage']));
        $reponse2=$reponse->fetch();
                                    
        if($reponse2){
            echo "Se nom est deja prit il faut en choisir un autre";
            $pbnom="creepage.php";
            echo "<script>window.location = "."'".$pbnom."'"."</script>";
        }else{
            
   /////         
            $couverture="NULL";
            if(!$_FILES['couverturepage']['error']>0){
            if(!empty($_FILES['couverturepage'])){ 
                $imagecouverture = $_FILES['couverturepage']; 
                   
                $nom1=md5(uniqid(rand(),true)); 
                $couverture="Images/$nom1";
                $resultat=move_uploaded_file($_FILES['couverturepage']['tmp_name'], $couverture);
            }}
        
            $profil="NULL";
             if(!$_FILES['profilpage']['error']>0){
            if(!empty($_FILES['profilpage'])){ 
                $imagecouverture = $_FILES['profilpage']; 
                   
                $nom1=md5(uniqid(rand(),true)); 
                $profil="Images/$nom1";
                $resultat=move_uploaded_file($_FILES['profilpage']['tmp_name'], $profil);
            }}
            

            
            $insertion = $bdd->query('insert into groupe values("'.$id.'","'.$nom.'","administrateur","'.$profil.'","'.$couverture.'")'); 
            //$insertion->execute();    
        }
                  
    
    }
}

?>
