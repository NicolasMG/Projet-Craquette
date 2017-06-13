<?php

    include('header_accueil.php');

    $id=$_SESSION['ID'];
    $idutil=$_GET['id'];

if($id==$idutil){
?>
<section id="section_profil">
<form class="form-horizontal" method="post" action="ajoutimage.php?id=<?php echo $idutil;  ?>" enctype="multipart/form-data">

        <div style="margin-top:50px;" class="form-group">
            <label  style="width:200px;" class="col-sm-2 control-label" for="image">
                    Ajouter une photo:
            </label>
            <input style="display:inline;" type="file" name="image" id="image"/>
            <input type="hidden" name="MAX_FILE_SIZE" value="12345">
        </div>

        <input style="margin-top:50px; width:110px; height=110px; margin-left:200px;" class="form-control" type="submit" value="Ajouter" name="modif"/> 





<?php
}
$num=0;
$files=glob("Images/album/fichier".$idutil."/*");
foreach($files as $filename){
    
  ?>  
    
<a href="grandeimage.php?num=<?php echo $num;?>"> <img id="image" src="<?php echo $filename;?>" >  </a>

<?php
    //scandir("Images/album/fichier".$id."/*", $num);
    $num=$num+1;
}

?>
</form>
</section>

