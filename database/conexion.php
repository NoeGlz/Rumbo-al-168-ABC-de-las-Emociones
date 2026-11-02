<?php


$server = "localhost";
$user = "root";
$password = "";
$database = "rumbo_168";

$conexion = mysqli_connect($server, $user, $password, $database);

if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre_alumno = $_POST["dato1"] ?? ""; //String
    $fecha = $_POST["dato2"] ?? ""; //Date
    $pregunta1 = $_POST["dato3"] ?? ""; //NUMERICAS
    $pregunta2 = $_POST["dato4"] ?? "";
    $pregunta3 = $_POST["dato5"] ?? "";
    $pregunta4 = $_POST["dato6"] ?? "";
    $pregunta5 = $_POST["dato7"] ?? "";
    $pregunta6 = $_POST["dato8"] ?? "";
    $pregunta7 = $_POST["dato9"] ?? "";
    $pregunta8 = $_POST["dato10"] ?? "";
    $pregunta9 = $_POST["dato11"] ?? "";
    $pregunta10 = $_POST["dato12"] ?? "";

    $consulta = mysqli_prepare(
        $conexion,
        "INSERT INTO `test_emocional` (`alumno`, `fecha`, `pregunta1`, `pregunta2`, `pregunta3`, `pregunta4`, `pregunta5`, `pregunta6`, `pregunta7`, `pregunta8`, `pregunta9`, `pregunta10`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
    );
    mysqli_stmt_bind_param($consulta, "ssiiiiiiiiii", $nombre_alumno, $fecha, $pregunta1, $pregunta2, $pregunta3, $pregunta4, $pregunta5, $pregunta6, $pregunta7, $pregunta8, $pregunta9, $pregunta10);
    mysqli_stmt_execute($consulta);

    if(mysqli_stmt_num_rows($consulta) > 0){
        echo "Datos insertados correctamente.";
    } else {
        echo "Error al insertar los datos: " . mysqli_error($conexion);
    }
}



$resultado = mysqli_query($conexion, "SELECT
    AVG(pregunta1) AS p1,
    AVG(pregunta2) AS p2,
    AVG(pregunta3) AS p3,
    AVG(pregunta4) AS p4,
    AVG(pregunta5) AS p5,
    AVG(pregunta6) AS p6,
    AVG(pregunta7) AS p7,
    AVG(pregunta8) AS p8,
    AVG(pregunta9) AS p9,
    AVG(pregunta10) AS p10
FROM test_emocional");

$promedios = mysqli_fetch_assoc($resultado);

$p1 = round($promedios['p1'], 2);
$p2 = round($promedios['p2'], 2);
$p3 = round($promedios['p3'], 2);
$p4 = round($promedios['p4'], 2);
$p5 = round($promedios['p5'], 2);
$p6 = round($promedios['p6'], 2);
$p7 = round($promedios['p7'], 2);
$p8 = round($promedios['p8'], 2);
$p9 = round($promedios['p9'], 2);
$p10 = round($promedios['p10'], 2);

if ($resultado === false) {
    die("Error en la consulta: " . mysqli_error($conexion));
}

