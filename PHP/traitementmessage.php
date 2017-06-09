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


        
        
        $req=$bdd->prepare('insert into message values("'.$idefi.'","'.$id.'","'.$idutil.'","'.$message.'")');
        $req->execute();
	}
}
echo $idefi;
echo $idef;
header('Location: ./message.php?idutil='.$idutil.'');
?>