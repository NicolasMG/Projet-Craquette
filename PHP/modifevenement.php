<?php
    include('header_accueil.php');
    $nom=$_GET['nom'];
?>
    <section id="section_profil">
       <h4 style="margin-bottom:30px; padding-left:70px;">Remplisez uniquement les champs que vous souhaitez modifier</h4>
        <form class="form-horizontal" method="post" action="traitementmodifevenement.php?nom=<?php echo $nom;?>" enctype="multipart/form-data">
            <div class="form-group">
                <label style="width:200px;" class="col-sm-2 control-label" for="nom">
                    Nom de l'évènement :
                </label>
                <div class="col-sm-10" style="float:none;"> 
                    <input type="text" class="form-control" style="width:250px;"  name="nom" placeholder= "Nom de l'évènement" />  
                </div>
            </div>
            <div class="form-group">
                <label style="width:200px;" class="col-sm-2 control-label" for="date">
                    Date de l'évènement :
                </label>
                <div class="col-sm-10" style="float:none;"> 
                    <input type="date" class="form-control" style="width:250px;"  name="date" placeholder= "aaaa-mm--jj" />  
                </div>
            </div>
            <div class="form-group">
                <label style="width:200px;" class="col-sm-2 control-label" for="heure">
                    Heure de l'évènement :
                </label>
                <div class="col-sm-10" style="float:none;"> 
                    <input type="time" class="form-control" style="width:250px;"  name="heure" placeholder= "HH:MM" />  
                </div>
            </div>
            <div class="form-group">
                <label style="width:200px;" class="col-sm-2 control-label" for="lieu">
                    Lieu de l'évènement :
                </label>
                <div class="col-sm-10" style="float:none;"> 
                    <input type="text" class="form-control" style="width:250px;"  name="lieu" placeholder= "Lieu de l'évènement" />  
                </div>
            </div>
            <div>
                <label style="width:200px;" class="col-sm-2 control-label" for="commentaire">
                    Description: 
                </label>
                <div class="col-sm-10" style="float:none;">
                    <textarea  style="margin-bottom:20px; width:350px;" class="form-control" name="commentaire" rows="5" cols="40" placeholder= "Décrivez l'évènement..." ></textarea>
                </div>
            </div>
            <div class="form-group">
                <label style="width:200px;" class="col-sm-2 control-label" for="couvertureevenement">
                    Photo de couverture:
                </label>
                    <input style="display:inline;" type="file" name="couvertureevenement" id="couvertureevenement"/>
                    <input type="hidden" name="MAX_FILE_SIZE" value="12345">
            </div>
            <div class="form-group">
                <label style="width:200px;" class="col-sm-2 control-label" for="profilevenement">
                    Photo de profil:
                </label>
                    <input style="display:inline;" type="file" name="profilevenement" id="profilevenement"/>
                    <input type="hidden" name="MAX_FILE_SIZE" value="12345"> 
            </div>

        <input style="margin-top:50px; width:110px; margin-left:200px;" class="form-control" type="submit" value="Appliquer" name="modif"/>
    </form>
</section>