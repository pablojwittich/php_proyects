<?php
$servername = '192.168.1.4';
$username = "sanatorio";
$password = "123";
$database = "sanatorio";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}
//for($i=0; true; $i):
  $sql = 'SELECT T.NUmero AS id, Q.Numero, Q.abreviada AS Descripcion, T.Nombre, CONCAT(DATE_FORMAT(T.HoraInicio,"%H:%i"), "-", DATE_FORMAT( T.HoraFin,"%H:%i")) AS HoraInicio, (CASE WHEN T.ParaInternar = 1 THEN "REQUIERE INTERNACION" ELSE "AMBULATORIO" END) AS ParaInternar, T.Fecha, T.Estado, T.ParaInternar, TIMESTAMPDIFF(MINUTE,T.HoraInicio,T.HoraFin), T.Estado, P.Nombre AS Profesional, pro.Nombre AS Anestesista, T.DescripcionCirugia, PQ.Descripcion AS pracquir FROM Quirofanos AS Q INNER JOIN turnosquirofano AS T ON Q.Numero = T.Quirofano INNER JOIN turnosquirofanospracticas AS TP ON T.Numero = TP.Numero INNER JOIN practicasquirofano AS PQ ON PQ.Codigo = TP.CodigoPractica INNER JOIN profesionales AS P ON T.MatriculaProfesional = P.Matricula LEFT JOIN turnosquirofanoayudante AS tqa ON tqa.Numero = T.Numero AND tqa.TipoAyudante = 2 LEFT JOIN profesionales AS Pro ON tqa.MatProfesional = pro.Matricula WHERE Q.Panel = 1 AND T.Fecha = "2024-03-19" AND T.Estado IN ("PENDIENTE", "REALIZADO") GROUP BY T.Numero ORDER BY Q.orden, T.HoraInicio';

  $result = $conn->query($sql);
  //echo date('h:i:s') . "\n";
//endfor;
  //sleep(60);
