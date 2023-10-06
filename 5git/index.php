<?php
include 'config.php'; 

$query = "SELECT title, content FROM messages";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>

<h1>Datos de la base de datos:</h1>

<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Columna 1: " . $row["title"]. " - Columna 2: " . $row["content"]. "<br>";
    }
} else {
    echo "0 resultados";
}
$conn->close();
?>

</body>
</html>
