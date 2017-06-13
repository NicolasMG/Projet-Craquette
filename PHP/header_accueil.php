<?php  include('protection_session.php'); 
	$DBhost = "localhost";
	$DBuser = "root";
	$DBpass = "";
	$DBname = "codingcage";
	
	try {
		$DBcon = new PDO("mysql:host=$DBhost;dbname=$DBname",$DBuser,$DBpass);
		$DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $ex){
		die($ex->getMessage());
	}

       try{ 
        $bdd = new PDO('mysql:host=localhost;dbname=siteweb;charset=utf8','root',''); 
    }
    catch(Exception $e){ 
        die('Erreur : '.$e->getMessage()); 
    }
            $mail=$_SESSION['mail'];?>
<!doctype html>
<link rel="shortcut icon" href="./Images/favicon.ico">
<html lang="fr">
	<head> <!-- en tête du fichier -->
		<meta charset="utf-8"/>
		<title>Craquette - Connexion</title>
        <link rel="stylesheet" href="CSS/style_accueil.css"/>
        <link rel="stylesheet" href="CSS/style_header_accueil.css"/>
        <link rel="stylesheet" href="CSS/style_fil_actualite.css"/>
        <link rel="stylesheet" href="CSS/style_profil.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script type="text/javascript" src="JS/calendrier.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body id="body_accueil">
		<header> <!-- header = en tête page -->
        <div class="topnav" id="myTopnav">
            <div class="topnav_logo">
                <a style="display: inline;" href="accueil.php"><img src='Images/logo.png' alt="Logo"/></a>
                <p style="float:none; padding-left:30px; display: inline; color:white; font-weight:bold;">Craquette</p>               
            </div>
            <div class="topnav_icons">
                <a class="active" href="deconnexion.php"><span class="glyphicon glyphicon-off"></span></a>
                <a class="active" href="voirmessage.php"><span class="glyphicon glyphicon-comment"></span></a>
                <a class="active" href="accueil.php"><span class="glyphicon glyphicon-home"></span></a>
                <a href='profil.php'><img style="width:30px; height:30px; margin-top:12px;" class="img-circle" alt="photo_profil" title="photo_profil" src="<?php 
                    $response =$bdd->query('SELECT imageprofil FROM profil WHERE email="'.$mail.'"'); 
                    $row = $response->fetch();
                    echo($row['imageprofil']);               
                                         ?>" >  </a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
            </div>
            <div class="topnav_search">
                <form class="navbar-form navbar-left" style="margin-bottom:0px; margin-top:0px;">
                    <div class="input-group">
                        <input id="txtSearch" class="form-control input-lg" type="text" placeholder="Vous recherchez quelqu'un ? ou une page ? c'est ici !" />
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="none" style="font-size:22.5px;">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
                
                
            </div>
			<script>
$(document).ready(function(){
	
	$('#txtSearch').autocomplete({
	    source: "post_search.php",
	    minLength: 2,
	    select: function(event, ui) {
	        var url = ui.item.id;
	        if (url != '#') {
	            location.href = url
	        }
	    },
	    open: function(event, ui) {
	        $(".ui-autocomplete").css("z-index", 1000)
	    }
	})
	
});
</script>


<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>



<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">



        </div>
        <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
        </script>
		</header>