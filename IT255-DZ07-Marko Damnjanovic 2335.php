<?php
$broj = $_POST['broj'];

function factorial($broj) {
    if ($broj < 0) {
        throw new InvalidArgumentException('Broj ne smebiti manji od nule');
    }
    if ($broj == 0) {
        return 1;
    }
    return $number * factorial($number - 1);
}

header("Content-type: application/json");
$prikaz = array ('Faktoirijal je:' => factorial($broj));
echo json_encode($prikaz);
?>