<?php

    include('header_profil.php');

    $id=$_SESSION['ID'];








?>
<section>
<form class="form-horizontal" method="post" action="ajoutimage.php" enctype="multipart/form-data">

        <div class="form-group">
            <label class="col-sm-2 control-label" for="image">
                    Ajouter une photo:
            </label>
            <input style="display:inline;" type="file" name="image" id="image"/>
            <input type="hidden" name="MAX_FILE_SIZE" value="12345">
        </div>

        <input style="margin-top:50px; width:110px; margin-left:200px;" class="form-control" type="submit" value="Ajouter" name="modif"/> 
</form>
</section>



<br><br><br>

<?php
$files=glob("Images/album/fichier".$id."/*");
foreach($files as $filename){
    
  ?>  
    
<img id="image" src="<?php echo $filename;?>" >  



<?php
}

?>


