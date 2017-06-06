
<br>
<br>
    <br>
<?php
session_start();
include('header_profil.php');
//session_start();
if(isset($_POST['creegroupe'])){ 
	if(!empty($_POST['nomgroupe'])){
           
        
        $nom = htmlspecialchars($_POST['nomgroupe']);
        $_SESSION['nomgroupe']=htmlspecialchars($_POST['nomgroupe']);
        $id=$_SESSION['ID'];
////////
        
        $reponse=$bdd->prepare('Select nomgroupe From groupe Where nomgroupe="'.$nom.'"');
        $nom=htmlentities($_POST['nomgroupe']);
        $reponse->execute(array('.$nom.'=>htmlspecialchars($_POST['nomgroupe'])));
        $reponse2=$reponse->fetch();
                                    
        if($reponse2){
            echo "Se nom est deja prit il faut en choisir un autre";
            $pbnom="creegroup.php";
            echo "<script>window.location = "."'".$pbnom."'"."</script>";
        }else{
            
   /////         
            $couverture="NULL";
            if(!$_FILES['couverturegroupe']['error']>0){
            if(!empty($_FILES['couverturegroupe'])){ 
                $imagecouverture = $_FILES['couverturegroupe']; 
                   
                $nom1=md5(uniqid(rand(),true)); 
                $couverture="Images/$nom1";
                $resultat=move_uploaded_file($_FILES['couverturegroupe']['tmp_name'], $couverture);
            }}
        
            $profil="NULL";
             if(!$_FILES['profilgroupe']['error']>0){
            if(!empty($_FILES['profilgroupe'])){ 
                $imagecouverture = $_FILES['profilgroupe']; 
                   
                $nom1=md5(uniqid(rand(),true)); 
                $profil="Images/$nom1";
                $resultat=move_uploaded_file($_FILES['profilgroupe']['tmp_name'], $profil);
            }}
            

            
            $insertion = $bdd->query('insert into groupe values("'.$id.'","'.$nom.'","administrateur","'.$profil.'","'.$couverture.'")'); 
            //$insertion->execute();    
        //cette ligne se fait 2 fois pourquoi?
        }
                  
    
    }
}

?>

<section>
<br><br><br>
    <form method="post">

    <p> 
    <label for="nomgroupe">Choisissez le(s) membre(s) à rajouter :</label>
        </p>   <br>
<p>
        <br>
    <input type="text" class="input-medium search-query" name="membre" value="<?php if (isset($_POST['membre'])) echo htmlentities($_POST['membre']);?>"placeholder= "membre" /> 
        </p>    
        <br>   
        
        
     <p>   
   <input type="submit" name="ajoutmembre" value="Ajouter"/>
         
        
    </p> 
        
        
<?php
       // echo $nom;
 if(isset($_POST['ajoutmembre'])){ 
	if(!empty($_POST['membre'])){ 
        $membre1=htmlspecialchars($_POST['membre']);
        $mail=$membre1;//peut etre a changer
        $nom = $_SESSION['nomgroupe'];
            $response =$bdd->query('SELECT id FROM profil WHERE email="'.$mail.'"'); 
            $row = $response->fetch();
            $id=($row['id']);
           
        $insertion2 = $bdd->prepare('insert into groupe values("'.$id.'","'.$nom.'","membre","NULL","NULL")'); 
        $insertion2->execute();
    }
 }

?>