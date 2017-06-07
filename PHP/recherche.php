

<?php
    include(entete.php);
    
    if(!empty($_POST['recherche'])){ 
        $rechercher = htmlspecialchars($_POST['rechercher']);      
        $resultat =$bdd->query('SELECT prenom ,nom FROM profil WHERE email LIKE  "%'.$mail.'%"'); 
        $row = $response->fetch();
        echo($row['imagecouverture']);
        
        
    }
?>





