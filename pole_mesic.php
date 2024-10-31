<?php
/**
* Asociativní pole
* Deklarujte pole months, které bude mít v hodnotách uložen český název měsíce. Index bude odpovídat pořadovému číslu měsíce.
* a) Za pomocí cyklu zobrazte všechny měsíce.
* b) Za pomocí cyklu zobrazte všechny měsíce z období 6-12.
*/

//reseni

$months = ['leden', 'únor', 'březen', 'duben', 'květen', 'červen', 'červenec', 'srpen', 'září', 'říjen', 'listopad', 'prosinec'];

echo '<h3> Měsíce: </h3>';

foreach ($months as $key => $mesic) {
    echo $mesic.'<br />';
}

echo '<h3>Měsíc od 6-12</h3>';

for ($i = 6; $i < 12; $i++) {
    echo $months[$i] . "<br>";
  }

?>

