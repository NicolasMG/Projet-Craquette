<?php include('header.php'); ?>

<div id="contenu">
    <div id="vide_gauche"></div>
    <div id="contenu_gauche">    
        <div id="profil">
            <img style="display:block; position:absolute; left:205px; top:145px; width:280px; height:103px;" src="Images/couverture.jpg" alt="couverture" title="couverture" height=50px width=50px/>
            <img style="display:block; position:absolute; left:225px; top:190px; width:100px; height:100px;" src="Images/photo_profil.jpg" alt="photo_profil" title="photo_profil" height=100px width=100px/>
            <p style="display:block; position:absolute; left:235px; top:170px;font-weight: bold; color:white;">Jean-Michel LeSaumon</p>
        </div>
        <div id="groupes">
            <ul>Groupes
                <li>Groupe 1</li>
                <li>Groupe 2</li>
                <li>Groupe 3</li>  
            </ul>
            <ul>Pages    
                <li>Pages 1</li>
                <li>Pages 2 avec un nom long</li>
                <li>Pages 3</li>
            </ul>
             <ul>Evenements    
                <li>Evenement 1</li>
                <li>Evenement 2</li>
                <li>Evenement 3</li>
            </ul>
        </div>
    </div>

    <div id="contenu_centre">
        <p id="post">
            <div class="textemessage">Poster un message : </div>
            <div>
                <textarea name="message" rows="3" cols="100"></textarea>
            </div>
            <button type="submit" class="btn">Envoyer</button>
        </p> 
        <div id="filactualite">
            
            
        </div>
    </div>

    <div id="contenu_droite">
        <p>test</p>
    </div>
    <div id="vide_droit">
    
    </div>
</div>

    




<?php include ('footer.php'); ?>