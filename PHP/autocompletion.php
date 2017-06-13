<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Autocomplete - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
     <?php 
                $sql='SELECT prenom ,nom FROM profil WHERE email LIKE  "%'.$recherche.'%"';
                 $req = $bdd->query($sql)  ; 
                
      
                    ?>
  $( function() {
    var availableTags = [
   
                      
        
         
      "Apple Script",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
    <?php $rien="abcd"; ?>
    '<?php echo "ActionScript"; echo"ff";?>',
        '<?php echo $r;?>',
      "Scheme"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
</head>
<body>
 
<div class="ui-widget">
 
  <input id="tags">
</div>
 
 
</body>
</html>