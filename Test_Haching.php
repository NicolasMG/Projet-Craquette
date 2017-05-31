<?php
    echo "hello :";
    echo "<br>";
    $password = "JFK\@";
    echo $password;
    echo "<br>";
    
    
    $options = [
        'cost' => 12,
    ];
    

    $salt= password_hash($password, PASSWORD_DEFAULT, $options );
    echo $salt;
    echo "<br>";    

    if (password_verify($password, $salt)) {
        echo "0 <br>";
    }

    $salt= password_hash($password, 1, $options );
    echo $salt;
    echo "<br>";
    
    if (password_verify($password, $salt )) {
        echo "1 <br>";
    }
    $salt= password_hash($password, 1, $options );
    echo $salt;
    echo "<br>";

    if (password_verify($password, $salt)) {
        echo "2 <br>";
    }

    $salt= password_hash($password,PASSWORD_BCRYPT, $options );
    echo $salt;
    echo "<br>";
    echo "<br>";
    

    if (password_verify($password, $salt)) {
        echo "3 <br>";
    }
    
?>