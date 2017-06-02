
<br>
    <br>
<?php
include('header.php');
session_start();
if(isset($_POST['creegroupe'])){ 
	if(!empty($_POST['nomgroupe'])){ 
		$nom = $_POST['nomgroupe'];
        $id=$_SESSION['ID'];
        $insertion = $bdd->prepare('insert into groupe values("'.$id.'","'.$nom.'","administrateur","NULL","NULL")'); 
        $insertion->execute();    
        //peut etre photo par defaut
    }
}

?>

<section>
<br><br><br>
    <form method="post" action="traitementajout.php">

    <p> 
    <label for="nomgroupe">Choisissez le(s) membre(s) à rajouter :</label>
        </p>   <br>
<p>
        <br>
    <input type="text" class="input-medium search-query" name="membre1" placeholder= "membre" /> 
        </p>    
        <br>   
        
        
     <p>   
    <input type="text" name="ajoutmembre" value="<?php if (isset($_POST['ajoutmembre'])) echo htmlentities($_POST['membre']);?>"/>
         
        
    </p> 
        
        
<?php
    
 if(isset($_POST['ajoutmembre'])){ 
	if(!empty($_POST['membre'])){ 
        $membre1=$_POST['membre'];
        $mail=$membre1;//peut etre a changer
        
            $response =$bdd->query('SELECT id FROM profil WHERE email="'.$mail.'"'); 
            $row = $response->fetch();
            $id=($row['filiere']);
        $insertion2 = $bdd->prepare('insert into groupe values("'.$id.'","'.$nom.'","membre","NULL","NULL")'); 
        $insertion2->execute();
    }
 }

?>