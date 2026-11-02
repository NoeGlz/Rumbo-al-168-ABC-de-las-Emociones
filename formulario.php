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

    <h1 class="titulo-test">Test Emocional</h1>
    <p class="indicaciones-test">Por favor, responde las siguientes preguntas:</p>
    <p class="informacion-importante-test">Información importante: Las respuestas que proporciones serán utilizadas únicamente para fines de investigación y no se compartirán con terceros.</p>

    <div class="escala">
        <H2>Escala de las Respuestas:</H2>
        <p>1 = Nunca / Muy bajo</p>
        <p>2 = Casi nunca / Bajo</p>
        <p>3 = Algunas veces / Moderado</p>
        <p>4 = Casi siempre / Alto</p>
        <p>5 = Siempre / Muy alto</p>
    </div>


<form action="index.php" method="post">
    <p>Nombre del Alumno: <input type="text" name="dato1" required></p>
    <br>
    <p>Fecha: <input type="date" name="dato2" required></p>
    <br>
    <p class="pregunta1">1) ¿Qué tan largo consideras que es tu trayecto desde casa hasta el CBTis 168?</p>
    <div class="respuestas1">
        <input type="radio" name="dato3" value="1" required> 1
        <input type="radio" name="dato3" value="2"> 2
        <input type="radio" name="dato3" value="3"> 3
        <input type="radio" name="dato3" value="4"> 4
        <input type="radio" name="dato3" value="5"> 5
    </div>
    <br>
    <p class="pregunta1">2) ¿Qué tan cansado te sientes durante tu camino a la escuela?</p>
    <div class="respuestas1">
        <input type="radio" name="dato4" value="1" required> 1
        <input type="radio" name="dato4" value="2"> 2
        <input type="radio" name="dato4" value="3"> 3
        <input type="radio" name="dato4" value="4"> 4
        <input type="radio" name="dato4" value="5"> 5
    </div>
    <br>
    <p class="pregunta1">3) ¿Con qué frecuencia experimentas estrés durante tu trayecto?</p>
    <div class="respuestas1">
        <input type="radio" name="dato5" value="1" required> 1
        <input type="radio" name="dato5" value="2"> 2
        <input type="radio" name="dato5" value="3"> 3
        <input type="radio" name="dato5" value="4"> 4
        <input type="radio" name="dato5" value="5"> 5
    </div>
    <br>
    <p class="pregunta1">4) ¿Qué tan tranquilo te sientes al salir de casa rumbo a la escuela?</p>
    <div class="respuestas1">
        <input type="radio" name="dato6" value="1" required> 1
        <input type="radio" name="dato6" value="2"> 2
        <input type="radio" name="dato6" value="3"> 3
        <input type="radio" name="dato6" value="4"> 4
        <input type="radio" name="dato6" value="5"> 5
    </div>
    <br>
    <p class="pregunta1">5) ¿Qué tan seguro te sientes durante tu recorrido?</p>
    <div class="respuestas1">
        <input type="radio" name="dato7" value="1" required> 1
        <input type="radio" name="dato7" value="2"> 2
        <input type="radio" name="dato7" value="3"> 3
        <input type="radio" name="dato7" value="4"> 4
        <input type="radio" name="dato7" value="5"> 5
    </div>
    <br>
    <p class="pregunta1">6) ¿Con qué frecuencia experimentas frustración debido al tráfico o retrasos?</p>
    <div class="respuestas1">
        <input type="radio" name="dato8" value="1" required> 1
        <input type="radio" name="dato8" value="2"> 2
        <input type="radio" name="dato8" value="3"> 3
        <input type="radio" name="dato8" value="4"> 4
        <input type="radio" name="dato8" value="5"> 5
    </div>
    <br>
    <p class="pregunta1">7) ¿Qué tan motivado te sientes durante el camino hacia la escuela?</p>
    <div class="respuestas1">
        <input type="radio" name="dato9" value="1" required> 1
        <input type="radio" name="dato9" value="2"> 2
        <input type="radio" name="dato9" value="3"> 3
        <input type="radio" name="dato9" value="4"> 4
        <input type="radio" name="dato9" value="5"> 5
    </div>
    <br>
    <p class="pregunta1">8) ¿Qué tan satisfecho estás con tu medio de transporte y las condiciones de tu recorrido?</p>
    <div class="respuestas1">
        <input type="radio" name="dato10" value="1" required> 1
        <input type="radio" name="dato10" value="2"> 2
        <input type="radio" name="dato10" value="3"> 3
        <input type="radio" name="dato10" value="4"> 4
        <input type="radio" name="dato10" value="5"> 5
    </div>
    <br>
    <p class="pregunta1">9) ¿Qué tanto afecta tu trayecto a tu estado de ánimo al llegar a clases?</p>
    <div class="respuestas1">
        <input type="radio" name="dato11" value="1" required> 1
        <input type="radio" name="dato11" value="2"> 2
        <input type="radio" name="dato11" value="3"> 3
        <input type="radio" name="dato11" value="4"> 4
        <input type="radio" name="dato11" value="5"> 5
    </div>
    <br>
    <p class="pregunta1">10) ¿Qué tan emocionalmente preparado te sientes para comenzar tus actividades escolares al llegar al CBTis 168?</p>
    <div class="respuestas1">
        <input type="radio" name="dato12" value="1" required> 1
        <input type="radio" name="dato12" value="2"> 2
        <input type="radio" name="dato12" value="3"> 3
        <input type="radio" name="dato12" value="4"> 4
        <input type="radio" name="dato12" value="5"> 5
    </div>
    <br>
    <p> <input type="submit" value="Guardar Datos"></p>
    <p> <input type="reset" value="Limpiar Datos"></p>
</form>

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
            return `Promedio: $${tooltipItem.raw}`;
          }
        }
      }
    }
  }
});
</script>
</html>