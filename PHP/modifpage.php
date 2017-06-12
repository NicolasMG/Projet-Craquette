
<?php
    include('header_accueil.php');
    $nom=$_GET['nom'];
?>
<section id="section_creepage">
    <h4 style="margin-bottom:20px; padding-left:10px;" > Remplisez uniquement les champs que vous souhaitez modifier</h4>

    <form class="form-horizontal" method="post" action="traitementmodifpage.php?nom=<?php echo $nom;?>" enctype="multipart/form-data">
        <div class="form-group">
            <label style="padding-left:0;" class="col-sm-2 control-label" for="nom">Nom de la page :</label>           
            <div  class="col-sm-10" style="display:inline;">
                <input class="form-control" style="width:250px; display:inline;" type="text" name="nom" placeholder="Nom de la page" />
            </div>
        </div>

         <div class="form-group">
            <label class="col-sm-2 control-label" for="imagecouverture">
                    Photo de couverture:
            </label>
            <input style="display:inline;" type="file" name="imagecouverture" id="imagecouverture"/>
            <input type="hidden" name="MAX_FILE_SIZE" value="12345">
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="imageprofil">
                    Photo de profil:					
            </label>
            <input style="display:inline;" type="file" name="imageprofil" id="imageprofil"/>
            <input type="hidden" name="MAX_FILE_SIZE" value="12345">                  
        </div>

        <input style="margin-top:50px; width:110px; margin-left:200px;" class="form-control" type="submit" value="Appliquer" name="modif"/>           
    </form> 
    
</section>