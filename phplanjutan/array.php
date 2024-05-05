<?php
// Membuat array dengan index "nama" dan "umur"
$data = array(
    array("nama" => "Muhammad", "umur" => 17),
    array("nama" => "Aulia", "umur" => 21),
    array("nama" => "AL Farouq", "umur" => 23),
    array("nama" => "Muhammad", "umur" => 18),
    array("nama" => "Fadillah", "umur" => 19),
    array("nama" => "Ali", "umur" => 18),
    array("nama" => "Farouq", "umur" => 20),
    array("nama" => "Arya", "umur" => 19),
    array("nama" => "Richo", "umur" => 27),
    array("nama" => "Rama", "umur" => 16),
    array("nama" => "Saipul", "umur" => 22),
    array("nama" => "Alfonsus", "umur" => 22),
    array("nama" => "Fida", "umur" => 19),
    array("nama" => "Niken", "umur" => 20),
    array("nama" => "wili", "umur" => 28)
);

// Konversi array menjadi JSON
$json_data = json_encode($data);

// Tampilkan JSON
echo $json_data;
?>