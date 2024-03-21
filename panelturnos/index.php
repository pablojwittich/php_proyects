<?php
include('conexion.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>Panel de Turnos</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
      border-color: #A2AFAF;
      font-family: Arial;
    }
    td{
      border: 1px solid #A2AFAF;
      text-align: left;
      padding: 8px;
      font-size: 0.7em;
    }
    th {
      background-color:#BEE1E2;
      font-size: 0.9em;

    }
    .q1{background-color: #83B8AE;}
    .q2{background-color: #2994A7;}
    .q3{background-color: #BEE1E2;}
    .q4{background-color:#BEE1E2;}
    .q5{background-color: #83B8AE;}
    .q6{background-color: #2994A7;}
    .g2{background-color: #83B8AE;}
    .pendiente{
      display: flex;
      align-items: center;
      margin: 0 auto;
      width: 2px;
      height: 2px;
     -webkit-border-radius: 50%;
     border-radius: 50%;
     aspect-ratio: 1/1;
     background: red;
    }
    .realizado{
      display: block;
      margin: 0 auto;
      width: 2px;
      height: 2px;
     -webkit-border-radius: 50%;
     border-radius: 50%;
     aspect-ratio: 1/1;
     background:green;
    }
    .icebox{
      display: block;
      margin: 0 auto;
      width: 2px;
      height: 2px;
     -webkit-border-radius: 50%;
     border-radius: 50%;
     aspect-ratio: 1/1;
     background:yellow;
    }

  </style>
</head>
<body>


<table>
<?php
  if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $date = $row['Fecha'];
  echo'<tr>';
    echo'<th type="datetime">'.$date.'</th>';
    echo'<th>ESTADO</th>';
    echo'<th>INICIO</th>';
    echo'<th>CIRUJANO</th>';
    echo'<th>ANESTESISTA</th>';
    echo'<th>PACIENTE</th>';
    echo'<th>PRACTICA</th>';
  echo'</tr>';
  //for($i=0; true; $i):
    while($row = $result->fetch_assoc()):
      echo "<tr>";
      //echo "<td>".$row["Numero"]."</td>";
      //echo "<td>".$row['id']."</td>";
      //echo "<td>".$row["ParaInternar"]."</td>";
      
      $qx = $row['Descripcion'];
      $status = $row['Estado'];
      $hora = $row['HoraInicio'];
      $cirujano = $row['Profesional'];
      $anestesista = $row['Anestesista'];
      $paciente = $row['Nombre'];
      $practica = $row['DescripcionCirugia'];

      switch ($qx):
        case "Q 1":echo "<td class='q1'>".$qx."</td>";break;
        case "Q 2":echo "<td class='q2'>".$qx."</td>";break;
        case "Q 3":echo "<td class='q3'>".$qx."</td>";break;
        case "Q 4":echo "<td class='q4'>".$qx."</td>";break;
        case "Q 5":echo "<td class='q5'>".$qx."</td>";break;
        case "Q 6":echo "<td class='q6'>".$qx."</td>";break;
        case "G 2":echo "<td class='g2'>".$qx."</td>";break;
        default:echo "<td>".$qx."</td>";break;
      endswitch;
      switch ($status):
        case 'PENDIENTE': echo "<td class='pendiente'></td>"; break;
        case 'REALIZADO': echo "<td class='realizado'></td>"; break; 
        default: echo "<td class='icebox'></td>"; break;
      endswitch;
      echo "<td>".$hora."</td>";
      echo "<td>".$cirujano."</td>";
      echo "<td>".$anestesista."</td>";
      echo "<td>".$paciente."</td>";
      echo "<td>".$practica."</td>";
      echo "</tr>";
    endwhile;
    //sleep(60);
  //endfor;
  } else {
    echo "<tr><td colspan='8'>0 resultados</td></tr>";
  }
  ?>

</table>

</body>
</html>

<?php
$conn->close();
?>