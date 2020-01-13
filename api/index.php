<?php

require '../lib/gsm.php';

$gsm = new GsmArena();

if (!empty($_GET['query'])) {
    $data = $gsm->search($_GET['query']);
} elseif (!empty($_GET['slug'])) {
    $data = $gsm->detail($_GET['slug']);
} elseif (!empty($_GET['brands'])) {
    $data = $gsm->getBrands();
} else {
    $data = ['status' => 'error'];
}

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

echo json_encode($data, JSON_PRETTY_PRINT, 512);
