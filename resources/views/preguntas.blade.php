<a href="crearPregunta.php">Agregar nueva Pregunta</a>

<br>
<?php


 $consulta = $conex->query("SELECT * FROM preguntas ORDER BY id DESC");
 $consulta->execute();
 $preguntas = $consulta->fetchAll(PDO::FETCH_ASSOC);

echo "PREGUNTAS";
 foreach ($preguntas as $pregunta) {
   echo "<br>$pregunta[enunciado]<br>";
}
$consultita = $conex ->query("SELECT * FROM respuestas ORDER BY id DESC");
$consultita-> execute();
$respuestas = $consultita->fetchALL(PDO::FETCH_ASSOC);

echo "<br> RESPUESTAS";

foreach ($respuestas as $respuesta) {
 echo "<br>$respuesta[enunciado]<br>";
}
?>
