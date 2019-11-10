<?php
header('Content-Type: application/json');
$imageindex = glob('./images/*');
$foxes = count($imageindex);
$randnum = rand(1, $foxes);
$foxlink = 'https://dagg.xyz/randomfox/images/'.$randnum.'.jpg';
$data = ['link' => $foxlink];
echo json_encode($data);
