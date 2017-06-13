<?php include('header_accueil.php');

    $idmoi=$_SESSION['ID'];
    $idutil=$_GET['id'];
?>
<section id="section_profil">
  <form method="post">

    <p> 
    <label style="margin-top:50px;"for="video"> Ajouter une video(youtube) :</label>
    
    <input type="text" style="width:300px;" class="form-control" name="video" value="<?php if (isset($_POST['video'])) echo htmlspecialchars($_POST['video']);?>"placeholder= "lien youtube" /> 
    
    <input style="margin-top:50px; width:130px; margin-left:200px;" class="form-control" type="submit" value="Ajouter" name="nouvelvideo"/>
        
        <?php  if(isset($_POST['nouvelvideo'])){  // fonction pas
                                                             
         //echo"salut";                                
       if(isset($_POST['nouvelvideo'])){                                         
        $url=$_POST['video'];
           //echo"coucou";
           //echo $url;
        $response =$bdd->prepare('insert into video values("'.$idmoi.'","'.$url.'")'); 
        $row = $response->execute();
           
        $pbnom="video.php?id=$idutil";
        //echo "<script>window.location = "."'".$pbnom."'"."</script>";//pb là
        //header('location:'.$pbnom.'');
        } 
}?>
      </p>
</form>

<?php       
        //$id=$_SESSION['ID'];
         $sql='SELECT distinct url FROM video Where idutil="'.$idmoi.'"';
        $req = $bdd->query($sql)  ; 
        while($row=$req->fetch()){
            $url=$row['url'];
            echo $url;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
		<title>Ma vidéo</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>

	<body>

<div>
	<object width="460" height="315" data="<?php echo $url;     ?>">
		<param name="movie" value="<?php echo $url;    ?>"></param>
		<param name="wmode" value="transparent"></param>
	<embed src="<?php echo $url; ?>" type="application/x-shockwave-flash" wmode="transparent" width="460" height="315"></embed>
	</object>
</div>

	</body>

</html>
 <?php 
         }
        $req->closeCursor();
 ?>
</section>

<!--https://openclassrooms.com/courses/inserer-facilement-une-video-dans-sa-page-web-sans-erreurs-->


<!--<iframe width="560" height="315" src="https://www.youtube.com/embed/a021WhobrLc" frameborder="0" allowfullscreen></iframe>-->