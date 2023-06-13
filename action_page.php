<?php
    echo $_POST['imie'];
    echo $_POST['nazwisko'];
    echo $_POST['ulica'];
    (int)echo $_POST['numerDomu'];
    (int)echo $_POST['numerMieszkania'];
    echo $_POST['miasto'];
    (int)echo $_POST['kodPocztowy'];
    (int)echo $_POST['rokUrodzenia'];
    
    echo "Wiek: ";
    $x=$_POST['rokUrodzenia'];
    echo (2023-$x);
?>
