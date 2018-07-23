<?php
    //exercice 1
    $iterateur = 0;
    
    while ($iterateur <= 10) {
        echo $iterateur . "<br><br>";
        $iterateur++;
    }

?>

<?php
    //exercice 2
    $iterateur = 0;
    $multiplicateur = 100;

    while ($iterateur <= 20) {
        $resultat = $iterateur * $multiplicateur;
        echo $resultat . "</br></br>";
        $iterateur++;
    }
    
?>

<?php
    //exercice 3
    $iterateur = 100;
    $multiplicateur = 100;

    while ($iterateur >= 10) {
        $resultat = $iterateur * $multiplicateur;
        echo $resultat . "<br><br>";
        $iterateur--;
    }

?>

<?php
    //exercice 4
    $iterateur = 1;

    while ($iterateur <= 10) {
        echo $iterateur . "<br><br>";
        $iterateur += $iterateur / 2;
    }
?>

<?php
    //exercice 5
    $iterateur = 1;

    while ($iterateur <= 15) {
        echo $iterateur . ": On y arrive presque.<br><br>";
        $iterateur++;
    }

?>

<?php
    //exercice 6
    $iterateur = 20;

    while ($iterateur >= 0) {
        echo $iterateur . ": C'est presque bon.<br><br>";
        $iterateur--;
    }

?>

<?php
    //exercice 7
    $iterateur = 1;

    while ($iterateur <= 100) {
        echo $iterateur . ": On tien le bon bout.<br><br>";
        $iterateur += 15;
    }

?>

<?php
    //exercice 8
    $iterateur = 200;

    while ($iterateur >= 0){
        echo $iterateur . ": Enfin!!!!<br><br>";
        $iterateur -= 12;
    }

?>