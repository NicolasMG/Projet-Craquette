<?php include('header_accueil.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	<head>
		<title>Ma vidéo</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>

	<body>
<?php    
        
   $url="https://www.youtube.com/embed/a021WhobrLc";    
        
        
        
?>
<div>
	<object width="560" height="315" data="<?php echo $url;     ?>">
		<param name="movie" value="<?php echo $url;    ?>"></param>
		<param name="wmode" value="transparent"></param>
	<embed src="<?php echo $url; ?>" type="application/x-shockwave-flash" wmode="transparent" width="560" height="315"></embed>
	</object>
</div>

	</body>

</html>

<!--https://openclassrooms.com/courses/inserer-facilement-une-video-dans-sa-page-web-sans-erreurs-->


<!--<iframe width="560" height="315" src="https://www.youtube.com/embed/a021WhobrLc" frameborder="0" allowfullscreen></iframe>-->