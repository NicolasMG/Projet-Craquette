<?php 
    include('header_profil.php');
    
    
   
?>
<section id="section_creegroup">
    <h4>Crée un groupe d'ami(e)s</h4>

    <form class="form-horizontal" method="post" action="traitementgroup.php" enctype="multipart/form-data">

         <div class="form-group">
            <label class="col-sm-2 control-label" for="nomgroupe">Nom du groupe :</label>
            <div class="col-sm-10">
                <input class="form-control" style="width:250px" type="text" name="nomgroupe" placeholder="Nom du groupe" />
            </div>
        </div>
        
        <div class="form-group">
            <label style="padding-left:0px;" class="col-sm-2 control-label" for="couverturegroupe">
				Photo de couverture:
            </label>
            <div class="col-sm-10">
                <input style="display:inline;" type="file" name="couverturegroupe" id="couverturegroupe"/>
                <input type="hidden" name="MAX_FILE_SIZE" value="12345">
            </div>
        </div>

        <div>
            <label class="col-sm-2 control-label" for="profilgroupe">
                Photo de profil:
            </label>
            <div class="col-sm-10">
                <input style="display:inline;" type="file" name="profilgroupe" id="profilgroupe"/>
                <input type="hidden" name="MAX_FILE_SIZE" value="12345">
            </div>
        </div>
        <input style="margin-top:80px; width:80px; margin-left:250px;" class="form-control" type="submit" value="Créer" name="creergroupe"/>           
    </form> 
</section>