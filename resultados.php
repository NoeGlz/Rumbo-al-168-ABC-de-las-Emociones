<?php
include("database/conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emociones</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <div>
        <a href="index.php" class="hda">Rumbo al 168</a>
        <a href="aprender.php" class="hda">Aprender</a>
        <a href="formulario.php" class="hda">Test Emocional</a>
        <a href="resultados.php" class="hda">Resultados Test Emocional</a>
        <a href="consejos.php" class="hda">Consejos</a>
        </div>
    </header>

    <h2>Conoce los Resultados del Test Emocional</h2>
    <p>Todos los datos son Anonimos, se muestran los resultados del test realizado en esta misma pagina web, conoce cuales son las tendencias y el promedio de lo que sienten los estudiantes del 168.</p>
    <canvas id="myChart" width="400" height="200"></canvas>

</body>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>



    let p1 = <?php echo json_encode($p1); ?>;
    let p2 = <?php echo json_encode($p2); ?>;
    let p3 = <?php echo json_encode($p3); ?>;
    let p4 = <?php echo json_encode($p4); ?>;
    let p5 = <?php echo json_encode($p5); ?>;
    let p6 = <?php echo json_encode($p6); ?>;
    let p7 = <?php echo json_encode($p7); ?>;
    let p8 = <?php echo json_encode($p8); ?>;
    let p9 = <?php echo json_encode($p9); ?>;
    let p10 = <?php echo json_encode($p10); ?>;



const ctx = document.getElementById('myChart').getContext('2d');
const myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Pregunta 1', 'Pregunta 2', 'Pregunta 3', 'Pregunta 4', 'Pregunta 5', 'Pregunta 6', 'Pregunta 7', 'Pregunta 8', 'Pregunta 9', 'Pregunta 10'],
    datasets: [{
      label: 'Resultado Preguntas de los Alumnos',
      data: [p1, p2, p3, p4, p5, p6, p7, p8, p9, p10],
      borderColor: 'rgb(200, 58, 6)',
      backgroundColor: 'rgba(223, 0, 0, 0.92)',
      fill: true
    }]
  },
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'top'
      },
      tooltip: {
        callbacks: {
          label: function(tooltipItem) {
            return `Promedio: ${tooltipItem.raw}`;
          }
        }
      }
    }
  }
});
</script>
</html>