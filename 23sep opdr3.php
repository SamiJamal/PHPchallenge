<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23-9-2019
 * Time: 09:29
 */

$boodschappen = array('3 pakken melk', 'aardappelen', 'aardbei', "yoghurt") ;

echo "<ul>";
foreach ($boodschappen as $boodschap) {
    echo "<li>".$boodschap."</li>";
    echo "<img src='afbeelding/".$boodschap."jpg'>";
}
echo "</ul>";

?>

