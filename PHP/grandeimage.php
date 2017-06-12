<?php


include('header_accueil.php');
$id=$_SESSION['ID'];
$num=$_GET['num'];

//echo scandir("Images/album/fichier".$id."", $num);
 echo scandir("Images/album/fichier".$id."", $num)[$num];
?>
<a alt="alt" href="grandeimage.php?num=<?php echo $num-1; ?>"> <img src="Images/precedent.png"></a>
<img alt="image" id="image" src="Images/album/fichier33/<?php echo scandir("Images/album/fichier".$id."", $num)[$num] ; ?>" >

<a alt="image" href="grandeimage.php?num=<?php echo $num+1; ?>">  <img src="Images/suivant.jpg"> </a>


