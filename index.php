<?php include('header.php'); ?>

    <section> <!-- Contenu principal de la page -->
       <h2>Connexion</h2>

            <form class="form-horizontal" method="post" action="accueil.php" >
                
                <div>
                    
                    <label for="ID">Adresse Email :</label>
                    <input class="input-medium search-query" type="Email" name="ID" placeholder="prenom.nom@uha.fr" />
                    
                </div>
                <div>
                    
                    <label for="MDP">Mot de passe :</label>
                    <input class="input-medium search-query" type="text" name="MDP" 
                    placeholder="Mot de passe" />
                    
                </div>
                <p><a href="inscription.php">Pas de compte ? Inscrivez vous !</a></p>
                <a href='accueil.php'><button type="submit" class="btn">Se connecter</button></a>
                
            </form>
    </section>
<?php include("footer.php"); ?>