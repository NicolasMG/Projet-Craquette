
<?php
include('header.php');
 //if(isset($_POST['supprmembre'])){ 
	//if(!empty($_POST['membre'])){ 
        $id=$_GET['id'];
      /*  $membre1=htmlspecialchars($_POST['membre']);
        $mail=$membre1;//peut etre a changer
        $nom = $_SESSION['nomgroupe'];
            $response =$bdd->query('SELECT id FROM profil WHERE email="'.$mail.'"'); 
            $row = $response->fetch();
            $id=($row['id']);
        */   
        $insertion2 = $bdd->prepare('DELETE FROM groupe WHERE idutil="'.$id.'"'); 
        $insertion2->execute();
   // }
 //}
    $groupe="groupe.php";
    echo "<script>window.location = "."'".$groupe."'"."</script>";

?>