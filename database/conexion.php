<?php


$server = getenv("DB_HOST") ?: "db";
$user = getenv("DB_USER") ?: "rumbo_app";
$password = getenv("DB_PASSWORD") ?: "";
$database = getenv("DB_NAME") ?: "rumbo_168";

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


// PREGUNTA 1
$resultado_pregunta1 = mysqli_query($conexion, "
    SELECT pregunta1 AS respuesta, COUNT(*) AS cantidad
    FROM test_emocional
    WHERE pregunta1 BETWEEN 1 AND 5
    GROUP BY pregunta1
");

$p1_f1 = 0; $p1_f2 = 0; $p1_f3 = 0; $p1_f4 = 0; $p1_f5 = 0;

while ($fila = mysqli_fetch_assoc($resultado_pregunta1)) {
    switch ((int)$fila['respuesta']) {
        case 1: $p1_f1 = (int)$fila['cantidad']; break;
        case 2: $p1_f2 = (int)$fila['cantidad']; break;
        case 3: $p1_f3 = (int)$fila['cantidad']; break;
        case 4: $p1_f4 = (int)$fila['cantidad']; break;
        case 5: $p1_f5 = (int)$fila['cantidad']; break;
    }
}


// PREGUNTA 2
$resultado_pregunta2 = mysqli_query($conexion, "
    SELECT pregunta2 AS respuesta, COUNT(*) AS cantidad
    FROM test_emocional
    WHERE pregunta2 BETWEEN 1 AND 5
    GROUP BY pregunta2
");

$p2_f1 = 0; $p2_f2 = 0; $p2_f3 = 0; $p2_f4 = 0; $p2_f5 = 0;

while ($fila = mysqli_fetch_assoc($resultado_pregunta2)) {
    switch ((int)$fila['respuesta']) {
        case 1: $p2_f1 = (int)$fila['cantidad']; break;
        case 2: $p2_f2 = (int)$fila['cantidad']; break;
        case 3: $p2_f3 = (int)$fila['cantidad']; break;
        case 4: $p2_f4 = (int)$fila['cantidad']; break;
        case 5: $p2_f5 = (int)$fila['cantidad']; break;
    }
}


// PREGUNTA 3
$resultado_pregunta3 = mysqli_query($conexion, "
    SELECT pregunta3 AS respuesta, COUNT(*) AS cantidad
    FROM test_emocional
    WHERE pregunta3 BETWEEN 1 AND 5
    GROUP BY pregunta3
");

$p3_f1 = 0; $p3_f2 = 0; $p3_f3 = 0; $p3_f4 = 0; $p3_f5 = 0;

while ($fila = mysqli_fetch_assoc($resultado_pregunta3)) {
    switch ((int)$fila['respuesta']) {
        case 1: $p3_f1 = (int)$fila['cantidad']; break;
        case 2: $p3_f2 = (int)$fila['cantidad']; break;
        case 3: $p3_f3 = (int)$fila['cantidad']; break;
        case 4: $p3_f4 = (int)$fila['cantidad']; break;
        case 5: $p3_f5 = (int)$fila['cantidad']; break;
    }
}


// PREGUNTA 4
$resultado_pregunta4 = mysqli_query($conexion, "
    SELECT pregunta4 AS respuesta, COUNT(*) AS cantidad
    FROM test_emocional
    WHERE pregunta4 BETWEEN 1 AND 5
    GROUP BY pregunta4
");

$p4_f1 = 0; $p4_f2 = 0; $p4_f3 = 0; $p4_f4 = 0; $p4_f5 = 0;

while ($fila = mysqli_fetch_assoc($resultado_pregunta4)) {
    switch ((int)$fila['respuesta']) {
        case 1: $p4_f1 = (int)$fila['cantidad']; break;
        case 2: $p4_f2 = (int)$fila['cantidad']; break;
        case 3: $p4_f3 = (int)$fila['cantidad']; break;
        case 4: $p4_f4 = (int)$fila['cantidad']; break;
        case 5: $p4_f5 = (int)$fila['cantidad']; break;
    }
}


// PREGUNTA 5
$resultado_pregunta5 = mysqli_query($conexion, "
    SELECT pregunta5 AS respuesta, COUNT(*) AS cantidad
    FROM test_emocional
    WHERE pregunta5 BETWEEN 1 AND 5
    GROUP BY pregunta5
");

$p5_f1 = 0; $p5_f2 = 0; $p5_f3 = 0; $p5_f4 = 0; $p5_f5 = 0;

while ($fila = mysqli_fetch_assoc($resultado_pregunta5)) {
    switch ((int)$fila['respuesta']) {
        case 1: $p5_f1 = (int)$fila['cantidad']; break;
        case 2: $p5_f2 = (int)$fila['cantidad']; break;
        case 3: $p5_f3 = (int)$fila['cantidad']; break;
        case 4: $p5_f4 = (int)$fila['cantidad']; break;
        case 5: $p5_f5 = (int)$fila['cantidad']; break;
    }
}


// PREGUNTA 6
$resultado_pregunta6 = mysqli_query($conexion, "
    SELECT pregunta6 AS respuesta, COUNT(*) AS cantidad
    FROM test_emocional
    WHERE pregunta6 BETWEEN 1 AND 5
    GROUP BY pregunta6
");

$p6_f1 = 0; $p6_f2 = 0; $p6_f3 = 0; $p6_f4 = 0; $p6_f5 = 0;

while ($fila = mysqli_fetch_assoc($resultado_pregunta6)) {
    switch ((int)$fila['respuesta']) {
        case 1: $p6_f1 = (int)$fila['cantidad']; break;
        case 2: $p6_f2 = (int)$fila['cantidad']; break;
        case 3: $p6_f3 = (int)$fila['cantidad']; break;
        case 4: $p6_f4 = (int)$fila['cantidad']; break;
        case 5: $p6_f5 = (int)$fila['cantidad']; break;
    }
}


// PREGUNTA 7
$resultado_pregunta7 = mysqli_query($conexion, "
    SELECT pregunta7 AS respuesta, COUNT(*) AS cantidad
    FROM test_emocional
    WHERE pregunta7 BETWEEN 1 AND 5
    GROUP BY pregunta7
");

$p7_f1 = 0; $p7_f2 = 0; $p7_f3 = 0; $p7_f4 = 0; $p7_f5 = 0;

while ($fila = mysqli_fetch_assoc($resultado_pregunta7)) {
    switch ((int)$fila['respuesta']) {
        case 1: $p7_f1 = (int)$fila['cantidad']; break;
        case 2: $p7_f2 = (int)$fila['cantidad']; break;
        case 3: $p7_f3 = (int)$fila['cantidad']; break;
        case 4: $p7_f4 = (int)$fila['cantidad']; break;
        case 5: $p7_f5 = (int)$fila['cantidad']; break;
    }
}


// PREGUNTA 8
$resultado_pregunta8 = mysqli_query($conexion, "
    SELECT pregunta8 AS respuesta, COUNT(*) AS cantidad
    FROM test_emocional
    WHERE pregunta8 BETWEEN 1 AND 5
    GROUP BY pregunta8
");

$p8_f1 = 0; $p8_f2 = 0; $p8_f3 = 0; $p8_f4 = 0; $p8_f5 = 0;

while ($fila = mysqli_fetch_assoc($resultado_pregunta8)) {
    switch ((int)$fila['respuesta']) {
        case 1: $p8_f1 = (int)$fila['cantidad']; break;
        case 2: $p8_f2 = (int)$fila['cantidad']; break;
        case 3: $p8_f3 = (int)$fila['cantidad']; break;
        case 4: $p8_f4 = (int)$fila['cantidad']; break;
        case 5: $p8_f5 = (int)$fila['cantidad']; break;
    }
}


// PREGUNTA 9
$resultado_pregunta9 = mysqli_query($conexion, "
    SELECT pregunta9 AS respuesta, COUNT(*) AS cantidad
    FROM test_emocional
    WHERE pregunta9 BETWEEN 1 AND 5
    GROUP BY pregunta9
");

$p9_f1 = 0; $p9_f2 = 0; $p9_f3 = 0; $p9_f4 = 0; $p9_f5 = 0;

while ($fila = mysqli_fetch_assoc($resultado_pregunta9)) {
    switch ((int)$fila['respuesta']) {
        case 1: $p9_f1 = (int)$fila['cantidad']; break;
        case 2: $p9_f2 = (int)$fila['cantidad']; break;
        case 3: $p9_f3 = (int)$fila['cantidad']; break;
        case 4: $p9_f4 = (int)$fila['cantidad']; break;
        case 5: $p9_f5 = (int)$fila['cantidad']; break;
    }
}


// PREGUNTA 10
$resultado_pregunta10 = mysqli_query($conexion, "
    SELECT pregunta10 AS respuesta, COUNT(*) AS cantidad
    FROM test_emocional
    WHERE pregunta10 BETWEEN 1 AND 5
    GROUP BY pregunta10
");

$p10_f1 = 0; $p10_f2 = 0; $p10_f3 = 0; $p10_f4 = 0; $p10_f5 = 0;

while ($fila = mysqli_fetch_assoc($resultado_pregunta10)) {
    switch ((int)$fila['respuesta']) {
        case 1: $p10_f1 = (int)$fila['cantidad']; break;
        case 2: $p10_f2 = (int)$fila['cantidad']; break;
        case 3: $p10_f3 = (int)$fila['cantidad']; break;
        case 4: $p10_f4 = (int)$fila['cantidad']; break;
        case 5: $p10_f5 = (int)$fila['cantidad']; break;
    }
}

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

