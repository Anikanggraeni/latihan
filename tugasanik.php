<?php
//array
$array = Array(
"NIM" => "15.01.53.0136",
"nama" => "Anik Anggraeni",
"Alamat" => "Jl Tlogo bayem no.687A Mugassari Semarang",
"No_telp" => "085707223424",
"Matkul" => Array (
	"mk_1" => "web service",
	"mk_2" => "statistik",
	"mk_3" => "keamanan jaringan+",
	)
	);
// encode array to json
$json = json_encode(array('data' => $array));

// write json to file
if (file_put_contents("data.json", $json))
    echo "File JSON sukses dibuat...";
else 
    echo "Oops! Terjadi error saat membuat file JSON...";

// data.json

// {"data":[{"id":"USR1","name":"Steve Jobs","company":"Apple"},{"id":"USR2","name":"Bill Gates","company":"Microsoft"},{"id":"USR3","name":"Mark Zuckerberg","company":"Facebook"}]}
?>