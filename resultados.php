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
        <a href="index.php" class="hda marca-institucional">
            <img src="src/logoCbtis168_top.png" alt="" class="cbtis168">
            <span>Rumbo al 168</span>
        </a>
        <a href="aprender.php" class="hda">Aprender</a>
        <a href="formulario.php" class="hda">Test Emocional</a>
        <a href="resultados.php" class="hda">Resultados Test Emocional</a>
        <a href="consejos.php" class="hda">Consejos</a>
        </div>
    </header>

    <h2>Conoce los Resultados del Test Emocional</h2>
    <p>Todos los datos son Anonimos, se muestran los resultados del test realizado en esta misma pagina web, conoce cuales son las tendencias y el promedio de lo que sienten los estudiantes del 168.</p>
    <canvas id="myChart" width="400" height="200"></canvas>

    <div class="graficas-container">

      <div class="grafica">
          <h3>¿Qué tan largo consideras que es tu trayecto desde casa hasta el CBTis 168?</h3>
          <canvas id="grafica1"></canvas>
      </div>

      <div class="grafica">
          <h3>¿Qué tan cansado te sientes durante tu camino a la escuela?</h3>
          <canvas id="grafica2"></canvas>
      </div>

      <div class="grafica">
          <h3>¿Con qué frecuencia experimentas estrés durante tu trayecto?</h3>
          <canvas id="grafica3"></canvas>
      </div>

      <div class="grafica">
          <h3>¿Qué tan tranquilo te sientes al salir de casa rumbo a la escuela?</h3>
          <canvas id="grafica4"></canvas>
      </div>

      <div class="grafica">
          <h3>¿Qué tan seguro te sientes durante tu recorrido?</h3>
          <canvas id="grafica5"></canvas>
      </div>

      <div class="grafica">
          <h3>¿Con qué frecuencia experimentas frustración debido al tráfico o retrasos?</h3>
          <canvas id="grafica6"></canvas>
      </div>

      <div class="grafica">
          <h3>¿Qué tan motivado te sientes durante el camino hacia la escuela?</h3>
          <canvas id="grafica7"></canvas>
      </div>

      <div class="grafica">
          <h3>¿Qué tan satisfecho estás con tu medio de transporte y las condiciones de tu recorrido?</h3>
          <canvas id="grafica8"></canvas>
      </div>

      <div class="grafica">
          <h3>¿Qué tanto afecta tu trayecto a tu estado de ánimo al llegar a clases?</h3>
          <canvas id="grafica9"></canvas>
      </div>

      <div class="grafica">
          <h3>¿Qué tan emocionalmente preparado te sientes para comenzar tus actividades escolares al llegar al CBTis 168?</h3>
          <canvas id="grafica10"></canvas>
      </div>

  </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>

  //PROMEDIO GENERAL

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



    //TOTAL POR PREGUNTA
    // PREGUNTA 1
    let p1_f1 = <?php echo json_encode($p1_f1); ?>;
    let p1_f2 = <?php echo json_encode($p1_f2); ?>;
    let p1_f3 = <?php echo json_encode($p1_f3); ?>;
    let p1_f4 = <?php echo json_encode($p1_f4); ?>;
    let p1_f5 = <?php echo json_encode($p1_f5); ?>;

    // PREGUNTA 2
    let p2_f1 = <?php echo json_encode($p2_f1); ?>;
    let p2_f2 = <?php echo json_encode($p2_f2); ?>;
    let p2_f3 = <?php echo json_encode($p2_f3); ?>;
    let p2_f4 = <?php echo json_encode($p2_f4); ?>;
    let p2_f5 = <?php echo json_encode($p2_f5); ?>;

    // PREGUNTA 3
    let p3_f1 = <?php echo json_encode($p3_f1); ?>;
    let p3_f2 = <?php echo json_encode($p3_f2); ?>;
    let p3_f3 = <?php echo json_encode($p3_f3); ?>;
    let p3_f4 = <?php echo json_encode($p3_f4); ?>;
    let p3_f5 = <?php echo json_encode($p3_f5); ?>;

    // PREGUNTA 4
    let p4_f1 = <?php echo json_encode($p4_f1); ?>;
    let p4_f2 = <?php echo json_encode($p4_f2); ?>;
    let p4_f3 = <?php echo json_encode($p4_f3); ?>;
    let p4_f4 = <?php echo json_encode($p4_f4); ?>;
    let p4_f5 = <?php echo json_encode($p4_f5); ?>;

    // PREGUNTA 5
    let p5_f1 = <?php echo json_encode($p5_f1); ?>;
    let p5_f2 = <?php echo json_encode($p5_f2); ?>;
    let p5_f3 = <?php echo json_encode($p5_f3); ?>;
    let p5_f4 = <?php echo json_encode($p5_f4); ?>;
    let p5_f5 = <?php echo json_encode($p5_f5); ?>;

    // PREGUNTA 6
    let p6_f1 = <?php echo json_encode($p6_f1); ?>;
    let p6_f2 = <?php echo json_encode($p6_f2); ?>;
    let p6_f3 = <?php echo json_encode($p6_f3); ?>;
    let p6_f4 = <?php echo json_encode($p6_f4); ?>;
    let p6_f5 = <?php echo json_encode($p6_f5); ?>;

    // PREGUNTA 7
    let p7_f1 = <?php echo json_encode($p7_f1); ?>;
    let p7_f2 = <?php echo json_encode($p7_f2); ?>;
    let p7_f3 = <?php echo json_encode($p7_f3); ?>;
    let p7_f4 = <?php echo json_encode($p7_f4); ?>;
    let p7_f5 = <?php echo json_encode($p7_f5); ?>;

    // PREGUNTA 8
    let p8_f1 = <?php echo json_encode($p8_f1); ?>;
    let p8_f2 = <?php echo json_encode($p8_f2); ?>;
    let p8_f3 = <?php echo json_encode($p8_f3); ?>;
    let p8_f4 = <?php echo json_encode($p8_f4); ?>;
    let p8_f5 = <?php echo json_encode($p8_f5); ?>;

    // PREGUNTA 9
    let p9_f1 = <?php echo json_encode($p9_f1); ?>;
    let p9_f2 = <?php echo json_encode($p9_f2); ?>;
    let p9_f3 = <?php echo json_encode($p9_f3); ?>;
    let p9_f4 = <?php echo json_encode($p9_f4); ?>;
    let p9_f5 = <?php echo json_encode($p9_f5); ?>;

    // PREGUNTA 10
    let p10_f1 = <?php echo json_encode($p10_f1); ?>;
    let p10_f2 = <?php echo json_encode($p10_f2); ?>;
    let p10_f3 = <?php echo json_encode($p10_f3); ?>;
    let p10_f4 = <?php echo json_encode($p10_f4); ?>;
    let p10_f5 = <?php echo json_encode($p10_f5); ?>;



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


//DATOS
const preguntas = [
    [p1_f1, p1_f2, p1_f3, p1_f4, p1_f5],
    [p2_f1, p2_f2, p2_f3, p2_f4, p2_f5],
    [p3_f1, p3_f2, p3_f3, p3_f4, p3_f5],
    [p4_f1, p4_f2, p4_f3, p4_f4, p4_f5],
    [p5_f1, p5_f2, p5_f3, p5_f4, p5_f5],
    [p6_f1, p6_f2, p6_f3, p6_f4, p6_f5],
    [p7_f1, p7_f2, p7_f3, p7_f4, p7_f5],
    [p8_f1, p8_f2, p8_f3, p8_f4, p8_f5],
    [p9_f1, p9_f2, p9_f3, p9_f4, p9_f5],
    [p10_f1, p10_f2, p10_f3, p10_f4, p10_f5]
];

//COLORES DE LAS Respuestas
const colores = [
    '#EF4444',
    '#F97316',
    '#EAB308',
    '#22C55E',
    '#3B82F6'
];

//Crear 10 TABLAS
preguntas.forEach((datos, index) => {

    const ctx = document.getElementById(`grafica${index + 1}`);

    new Chart(ctx, {
        type: 'pie',

        data: {
            labels: [
                '1 = Nunca / Muy bajo',
                '2 = Casi nunca / Bajo',
                '3 = Algunas veces / Moderado',
                '4 = Casi siempre / Alto',
                '5 = Siempre / Muy alto'
            ],

            datasets: [{
                data: datos,
                backgroundColor: colores,
                borderColor: '#ffffff',
                borderWidth: 2,
                hoverOffset: 10
            }]
        },

        options: {
            responsive: true,

            plugins: {
                legend: {
                    position: 'bottom'
                },

                tooltip: {
                    callbacks: {
                        label: function(context) {
                            const total = context.dataset.data.reduce(
                                (a, b) => a + b, 0
                            );

                            const porcentaje = total > 0
                                ? ((context.raw / total) * 100).toFixed(1)
                                : 0;

                            return `${context.label}: ${context.raw} (${porcentaje}%)`;
                        }
                    }
                }
            }
        }
    });

});

</script>
</html>