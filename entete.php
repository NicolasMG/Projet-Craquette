<!doctype html>
<html lang="fr">

	<head> <!-- en tête du fichier -->
		<meta charset="utf-8"/>
		<title>Craquette - Connexion</title>
		<link rel="stylesheet" href="CSS/bootstrap.css"/>
        <script type="text/javascript" src="calendrier.js"></script>
	</head>
	<body>
		<header> <!-- header = en tête page -->

          <div style="height:50px;" class="topnav" id="myTopnav">
              <img style="padding-left:17%;" class="headerimg" src='Images/logo.png' />
              <a style="padding-top:0px;padding-bottom:0px;"href="#home">
		      <form style="padding-left:200%; padding-top:10px;">
			     <input class="input-medium search-query" type="text" name="Search" placeholder="Recherche..">
		      </form>
              </a>
              <a class="active" href="#news">News</a>
  <a class="active" href="#contact">Contact</a>
  <a class="active"  href="#about">About</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
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
		
		