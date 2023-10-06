<?php
if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    $putdata = fopen("php://input", "r");
    $fp = fopen("myfile", "w");
    
    while ($data = fread($putdata, 1024)) {
        fwrite($fp, $data);
    }
    
    fclose($fp);
    fclose($putdata);
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $filename = 'myfile';

    if (file_exists($filename)) {
        $fileContent = file_get_contents($filename);
        echo $fileContent;
    } else {
        echo 'El archivo myfile no existe.';
    }
} else {
    header('HTTP/1.0 405 Method Not Allowed');
    echo 'Metodo no permitido.';
}

