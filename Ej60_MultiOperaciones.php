<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <title>Registro de numeros</title>
</head>
<body>
 <h2>REGISTRO DE NUMEROS</h2>
 <!-- Formulario de captura -->
 <form method="POST" action="">

 <?php
 // Ciclo para mostrar tres renglones de captura
 for ($i = 0; $i < 3; $i++) {
 echo "Numero1:";
 echo "<input type='number' name='num1[]'>" . " ";

 echo "Numero2:";
 echo "<input type='number' name='num2[]'>" . " ";

 echo "<br><br>";

 }
 ?>
 <!-- Botón para guardar y calcular -->
 <button type="submit" name="guardar" value="guardar">
 Guardar y calcular </button>

 <?php

 // Verificar si se presionó el botón Guardar
 if (isset($_POST['guardar'])) {

 // Guardar los datos en tres arreglos
 $n1 = $_POST['num1'];
 $n2 = $_POST['num2'];
 
 // Declarar los arreglos de resultados
 $suma = array();
 $resta = array();
 $multi = array();
 $divi = array();

 // Ciclo para realizar los cálculos
 for ($i = 0; $i < 3; $i++) {

 // Calcular suma
 $suma[$i] = $n1[$i] + $n2[$i];

 // Calcular resta
 $resta[$i] = $n1[$i] - $n2[$i];

 // Calcular multiplicacion
 $multi[$i] = $n1[$i] * $n2[$i];

  // Calcular division
 $divi[$i] = $n1[$i] / $n2[$i];
    }
 }
		echo "<h3>Contenido del vector</h3>";

		echo "<table border='1' cellpadding='8' cellspacing='0'>";
		echo "<thead>";
		echo "<tr>";
		echo "<th>Numero1</th>";
		echo "<th>Numero2</th>";
		echo "<th>Suma</th>";
		echo "<th>Resta</th>";
		echo "<th>Multiplicacion</th>";
		echo "<th>Division</th>";
		echo "</tr>";
		echo "</thead>";


		for ($i=0; $i < 3; $i++) { 

			echo "<tr>";

			echo "<td>".$n1[$i]."</td>";
			echo "<td>".$n2[$i]."</td>";;
			echo "<td>".$suma[$i]."</td>";;
			echo "<td>".$resta[$i]."</td>";;
			echo "<td>".$multi[$i]."</td>";;
			echo "<td>".$divi[$i]."</td>";;

			echo "</tr>";
		}

		echo "</table";
 }
 ?>
</body>
</html>