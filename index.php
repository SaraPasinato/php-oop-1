<?php
require_once __DIR__ . '/inc/Movie.php';
/** 
 *! - è definita una classe ‘Movie’
 *  ? => all'interno della classe sono dichiarate delle variabili
 *  ?    d'istanza (proprietà)
 *  ? => all'interno della classe è definito un costruttore
 *  ? => all'interno della classe è definito almeno un metodo
 *!- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i 
 *  * valori delle relative proprietà, se possibile cerchiamo di stampare senza 
 *  *  ricorrere a var_dump
 * 
 */
 


$m1=new Movie(872200,'Ritorno al futuro - 30 anni dopo','fantasy','it',1,'ciao.png');
$m2=new Movie(873200,'Guardiani della galassia ','fantasy','en',3,'bye.png');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP1: class</title>
</head>
<body style="margin: 0 auto; width:700px;">
      <?php echo $m1->render()?>
      <?php echo $m2->render()?>
</body>
</html>