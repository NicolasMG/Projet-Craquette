<?php include('header_accueil.php');

    $id=$_SESSION['ID']
?>
  <form method="post">

    <p> 
    <label for="video"> Ajouter une video(youtube):</label>
    <br>
    <br>
    <input type="text" class="form-control" name="nouvelconversation" value="<?php if (isset($_POST['video'])) echo htmlspecialchars($_POST['video']);?>"placeholder= "lien youtube" /> 
    
        <br>
        
    <?php  //if(isset($_POST['nouvelconversation'])){  ?>
   <input type="submit" name="new" value="Nouvel video" />
        <?php  if(isset($_POST['nouvelvideo'])){  ?>
        <?php  
                                                             
                                         
       if(isset($_POST['nouvelvideo'])){                                             
        $url=$_POST['nouvelvideo'];
        $response =$bdd->prepare('insert into video values("'.$id.'","'.$url.'")'); 
        $row = $response->execute();
        //$idutil=$row['id'];          
        $pbnom="video.php?id=$idutil";
        echo "<script>window.location = "."'".$pbnom."'"."</script>";//pb là
        header('location:'.$pbnom.'');
        } 
}?>


<?php       
        //$id=$_SESSION['ID'];
         $sql='SELECT distinct url FROM video Where idutil="'.$id.'"';
        $req = $bdd->query($sql)  ; 


        while($row=$req->fetch()){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
		<title>Ma vidéo</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>

	<body>
<?php    
        
   //$url="https://www.youtube.com/embed/a021WhobrLc";    
        
?>
<div>
	<object width="560" height="315" data="<?php echo $url;     ?>">
		<param name="movie" value="<?php echo $url;    ?>"></param>
		<param name="wmode" value="transparent"></param>
	<embed src="<?php echo $url; ?>" type="application/x-shockwave-flash" wmode="transparent" width="560" height="315"></embed>
	</object>
</div>

	</body>


 <?php 
                            }
                           $req->closeCursor();
                        ?>

</html>

<!--https://openclassrooms.com/courses/inserer-facilement-une-video-dans-sa-page-web-sans-erreurs-->


<!--<iframe width="560" height="315" src="https://www.youtube.com/embed/a021WhobrLc" frameborder="0" allowfullscreen></iframe>-->