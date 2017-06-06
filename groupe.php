
<br>
<br>
    <br>
<?php
session_start();
include('header.php');
//session_start();
if(isset($_POST['creegroupe'])){ 
	if(!empty($_POST['nomgroupe'])){
           
        
        $nom = $_POST['nomgroupe'];
        $_SESSION['nomgroupe']=$_POST['nomgroupe'];
        $id=$_SESSION['ID'];
////////
        
        $reponse=$bdd->prepare('Select nomgroupe From groupe Where nomgroupe="'.$nom.'"');
        $nom=htmlentities($_POST['nomgroupe']);
        $reponse->execute(array('.$nom.'=>$_POST['nomgroupe']));
        $reponse2=$reponse->fetch();
                                    
        if(!$reponse2){
            echo "Se nom est deja prit il faut en choisir un autre";
                                    
////////
            $insertion = $bdd->query('insert into groupe values("'.$id.'","'.$nom.'","administrateur","NULL","NULL")'); 
            $insertion->execute();    
        //peut etre photo par defaut
        }
    
    }
}

?>

<section>
<br><br><br><!--action="traitementajout.php"-->
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
   <input type="submit" name="ajoutmembre" value="ajouter"/>
         
        
    </p> 
        
        
<?php
       // echo $nom;
 if(isset($_POST['ajoutmembre'])){ 
	if(!empty($_POST['membre'])){ 
        $membre1=$_POST['membre'];
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