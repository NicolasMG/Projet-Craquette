
<br>
<br>
    <br>
<?php
session_start();
include('header.php');
//session_start();
if(isset($_POST['creepage'])){ 
	if(!empty($_POST['nompage'])){
        
		$nom = $_POST['nompage'];
        $_SESSION['nompage']=$_POST['nompage'];
        //echo $nom;
        $id=$_SESSION['ID'];
        $insertion = $bdd->query('insert into groupe values("'.$id.'","'.$nom.'","administrateur","NULL","NULL")'); 
        $insertion->execute();    
        //peut etre photo par defaut
        
    }
}

?>
<!--
<section>
    <form method="post">

    <p> 
    <label for="nom">Choisissez le(s) membre(s) à rajouter :</label>
        </p>   <br>
<p>
        <br>
    <input type="text" class="input-medium search-query" name="membre" value="<?php if (isset($_POST['membre'])) echo htmlentities($_POST['membre']);?>"placeholder= "membre" /> 
        </p>    
        <br>   
        
        
     <p>   
   <input type="submit" name="ajoutmembre" value="ajouter"/>
         
        
    </p> 
-->      
        
<?php
 /*      // echo $nom;
 if(isset($_POST['ajoutmembre'])){ 
	if(!empty($_POST['membre'])){ 
        $membre1=$_POST['membre'];
        $mail=$membre1;//peut etre a changer
        $nom = $_SESSION['nomgroupe'];
            $response =$bdd->query('SELECT id FROM profil WHERE email="'.$mail.'"'); 
            $row = $response->fetch();
            $id=($row['id']);
           
        $insertion2 = $bdd->prepare('insert into groupe values("'.$id.'","'.$nom.'","visiteur","NULL","NULL")'); 
        $insertion2->execute();
    }
 }*/

?>