<?php
$referer = $_SERVER['Referer'];

if (strpos($referer, 'fbi.gov') !== false) {
    echo file_get_contents('./sc.html');
} else {
    echo 'No tienes acceso a esta página. <br>';
    echo 'Tu no eres fbi.gov';
}


