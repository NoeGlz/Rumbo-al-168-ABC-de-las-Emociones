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
        <a href="" class="hda">Emociones</a>
        <a href="" class="hda">Herramientas</a>
        <a href="" class="hda"></a>
        <a href=""></a>
        </div>
    </header>
    <?php 

    $pene = "Hola ";
    echo $pene;
    
    ?>


<form action="index.php" method="post">
    <p>Nombre del Alumno: <input type="text" name="dato1" required></p>
    <br>
    <p>Fecha: <input type="date" name="dato2" required></p>
    <br>
    <p class="pregunta1">1) Pregunta: del 1 al 5 Como te sientes al sabe que del este</p>
    <div class="respuestas1">
        <input type="radio" name="dato3" value="1" required> 1
        <input type="radio" name="dato3" value="2"> 2
        <input type="radio" name="dato3" value="3"> 3
        <input type="radio" name="dato3" value="4"> 4
        <input type="radio" name="dato3" value="5"> 5
    </div>
    <br>
    <p class="pregunta1">2) Pregunta: del 1 al 5 Como te sientes al sabe que del este</p>
    <div class="respuestas1">
        <input type="radio" name="dato4" value="1" required> 1
        <input type="radio" name="dato4" value="2"> 2
        <input type="radio" name="dato4" value="3"> 3
        <input type="radio" name="dato4" value="4"> 4
        <input type="radio" name="dato4" value="5"> 5
    </div>
    <br>
    <p class="pregunta1">3) Pregunta: del 1 al 5 Como te sientes al sabe que del este</p>
    <div class="respuestas1">
        <input type="radio" name="dato5" value="1" required> 1
        <input type="radio" name="dato5" value="2"> 2
        <input type="radio" name="dato5" value="3"> 3
        <input type="radio" name="dato5" value="4"> 4
        <input type="radio" name="dato5" value="5"> 5
    </div>
    <br>
    <p class="pregunta1">4) Pregunta: del 1 al 5 Como te sientes al sabe que del este</p>
    <div class="respuestas1">
        <input type="radio" name="dato6" value="1" required> 1
        <input type="radio" name="dato6" value="2"> 2
        <input type="radio" name="dato6" value="3"> 3
        <input type="radio" name="dato6" value="4"> 4
        <input type="radio" name="dato6" value="5"> 5
    </div>
    <br>
    <p class="pregunta1">5) Pregunta: del 1 al 5 Como te sientes al sabe que del este</p>
    <div class="respuestas1">
        <input type="radio" name="dato7" value="1" required> 1
        <input type="radio" name="dato7" value="2"> 2
        <input type="radio" name="dato7" value="3"> 3
        <input type="radio" name="dato7" value="4"> 4
        <input type="radio" name="dato7" value="5"> 5
    </div>
    <br>
    <p class="pregunta1">6) Pregunta: del 1 al 5 Como te sientes al sabe que del este</p>
    <div class="respuestas1">
        <input type="radio" name="dato8" value="1" required> 1
        <input type="radio" name="dato8" value="2"> 2
        <input type="radio" name="dato8" value="3"> 3
        <input type="radio" name="dato8" value="4"> 4
        <input type="radio" name="dato8" value="5"> 5
    </div>
    <br>
    <p class="pregunta1">7) Pregunta: del 1 al 5 Como te sientes al sabe que del este</p>
    <div class="respuestas1">
        <input type="radio" name="dato9" value="1" required> 1
        <input type="radio" name="dato9" value="2"> 2
        <input type="radio" name="dato9" value="3"> 3
        <input type="radio" name="dato9" value="4"> 4
        <input type="radio" name="dato9" value="5"> 5
    </div>
    <br>
    <p class="pregunta1">8) Pregunta: del 1 al 5 Como te sientes al sabe que del este</p>
    <div class="respuestas1">
        <input type="radio" name="dato10" value="1" required> 1
        <input type="radio" name="dato10" value="2"> 2
        <input type="radio" name="dato10" value="3"> 3
        <input type="radio" name="dato10" value="4"> 4
        <input type="radio" name="dato10" value="5"> 5
    </div>
    <br>
    <p class="pregunta1">9) Pregunta: del 1 al 5 Como te sientes al sabe que del este</p>
    <div class="respuestas1">
        <input type="radio" name="dato11" value="1" required> 1
        <input type="radio" name="dato11" value="2"> 2
        <input type="radio" name="dato11" value="3"> 3
        <input type="radio" name="dato11" value="4"> 4
        <input type="radio" name="dato11" value="5"> 5
    </div>
    <br>
    <p class="pregunta1">10) Pregunta: del 1 al 5 Como te sientes al sabe que del este</p>
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