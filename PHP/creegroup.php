<?php 
    include('header_accueil.php');
    
    
   
?>
<section id="section_creepage">

    <h4 style="margin-bottom:20px; padding-left:180px;" >Crée un groupe</h4>

    <form class="form-horizontal" method="post" action="profilgroupe.php" enctype="multipart/form-data">

        <div class="form-group">
            <label style="padding-left:0;" class="col-sm-2 control-label" for="nomgroupe">Nom du groupe :</label>           
            <div  class="col-sm-10" style="display:inline;">
                <input class="form-control" style="width:250px; display:inline;" type="text" name="nomgroupe" placeholder="Nom du groupe" />
            </div>
        </div>

         <div class="form-group">
            <label class="col-sm-2 control-label" for="couverturegroupe">
                Photo de couverture:
            </label>
            <input style="display:inline;" type="file" name="couverturegroupe" id="couverturegroupe"/>
            <input type="hidden" name="MAX_FILE_SIZE" value="12345">
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label" for="profilgroupe">
                Photo de profil:					
            </label>
            <input style="display:inline;" type="file" name="profilgroupe" id="profilgroupe"/>
            <input type="hidden" name="MAX_FILE_SIZE" value="12345">                  
        </div>

        <input style="margin-top:50px; width:110px; margin-left:200px;" class="form-control" type="submit" value="Créer" name="creegroupe"/>           
    </form> 
</section>