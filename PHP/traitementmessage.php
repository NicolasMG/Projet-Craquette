<?php
$idutil=$_GET['idutil'];
if (isset($_POST['craquetter'])){
	if(!empty($_POST['message'])){
		$message=htmlspecialchars($_POST['message']);
        session_start();
        $id=$_SESSION['ID'];
        try{ 
            $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); 
        }
            catch(Exception $e){ 
            die('Erreur : '.$e->getMessage()); 
        }
        
      
        $sql=$bdd->prepare('SELECT max(id) FROM message ');
        $sql->execute();
        $ide = $sql->fetch();
        $idef = $ide[0] ;
        $idefi = $idef + 1;

     /*   $sql=$bdd->prepare('SELECT max(idenvoie) FROM envoie ');
        $sql->execute();
        $ide = $sql->fetch();
        $idef = $ide[0] ;
        $idefie = $idef + 1;
        
        $sql=$bdd->prepare('SELECT max(idmp) FROM destination ');
        $sql->execute();
        $ide = $sql->fetch();
        $idef = $ide[0] ;
        $idefid = $idef + 1; */
        
        
        
        $req=$bdd->prepare('insert into message values("'.$idefi.'","'.$id.'","'.$idutil.'","'.$message.'")');
        $req->execute();
        /*
        $req=$bdd->prepare('insert into envoie values("'.$idefi.'","'.$id.'")');
        $req->execute();
        
        $req=$bdd->prepare('insert into destination values("'.$idefi.'","'.$idutil.'")');
        $req->execute();
        */
        
	}
}
header('Location: ./message.php?idutil='.$idutil.'');
?>