
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
    <input type="text" name="ajoutmembre" value="<?php if (isset($_POST['email'])) echo htmlentities($_POST['memmbre'])?>"/>
         
        
    </p> 






