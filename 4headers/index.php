<?php
$referer = $_SERVER['Referer'];

if (strpos($referer, 'fbi.gov') !== false) {
    echo 'Tu no eres fbi.gov';
    echo file_get_contents('./sc.html');
} else {
    echo 'No tienes acceso a esta página.';
    header('HTTP/1.1 403 Forbidden');
}


