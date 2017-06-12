<?php
   try{ 
            $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); 
        }
            catch(Exception $e){ 
            die('Erreur : '.$e->getMessage()); 
        }
    session_start();
  $id=$_SESSION['ID'];
$idutil=$_GET['idutil'];
if (isset($_POST['craquetter'])){
     $sql=$bdd->prepare('SELECT max(id) FROM message ');
        $sql->execute();
        $ide = $sql->fetch();
        $idef = $ide[0] ;
        $idefi = $idef + 1;
    
    
	if(!empty($_POST['message'])){
		$message=htmlspecialchars($_POST['message']);
        session_start();
       

        $req=$bdd->prepare('insert into message values("'.$idefi.'","'.$id.'","'.$idutil.'","'.$message.'","text")');
        $req->execute();
    }
    if(!empty($_FILES['imageenvoie'])){ 
        $imageprofil = $_FILES['imageenvoie']['name'];             
        $nom1=md5(uniqid(rand(),true)); 
        $nom="Images/$nom1";
        $resultat=move_uploaded_file($_FILES['imageenvoie']['tmp_name'], $nom);
        echo"salut";
        
        $req=$bdd->prepare('insert into message values("'.$idefi.'","'.$id.'","'.$idutil.'","'.$nom.'","image")');
        $req->execute();
        echo"coucou";
    }

    
}
header('Location: ./message.php?idutil='.$idutil.'');
?>