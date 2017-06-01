<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width" />
 <meta charset="utf-8"/>
<link rel="stylesheet" href="styl.css" />
</head>
<body>
  

<div class="topnav" id="myTopnav">
	
  <a style="padding-top:2px;padding-bottom:2px;"href="#home">
		<form style="padding-left:30px;">
			<input type="text" name="Search" placeholder="Recherche..">
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


</body>
</html>
