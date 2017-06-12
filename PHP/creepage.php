<?php 
    include('header_accueil.php');

    
?>
<section id="section_creepage">
    <h4 style="margin-bottom:20px; padding-left:200px;" >Créé une page</h4>

    <form class="form-horizontal" method="post" action="page.php" enctype="multipart/form-data">

        <div class="form-group">
            <label style="padding-left:0;" class="col-sm-2 control-label" for="nompage">Nom de la page\* :</label>           
            <div  class="col-sm-10" style="display:inline;">
                <input class="form-control" style="width:250px; display:inline;" type="text" name="nompage" placeholder="Nom de la page" />
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

        <input style="margin-top:50px; width:110px; margin-left:200px;" class="form-control" type="submit" value="Créer" name="creepage"/> 
        <p>*Champ obligatoire</p>
    </form> 

</section>