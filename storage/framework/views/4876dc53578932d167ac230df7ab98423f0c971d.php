<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Agregar Preguntas</title>
  </head>
  <body>
    <form action="" method="post">
      <?php echo e(csrf_field()); ?>

      Pregunta:
      <input type="text" name="enunciado" value="">
      <br>
      <select class="" name="tema">
        <option value="1">Deportes</option>
        <option value="2">Historia</option>
        <option value="3">Geografia</option>
        <option value="4">Entretenimiento</option>
        <option value="5">Argentina</option>
      </select>
      <br>
      Respuesta 1:
       <input type="text" name="respuesta1" value="">
      <br>
      Respuesta 2:
      <input type="text" name="respuesta2" value="">
      <br>
      Respuesta 3:
       <input type="text" name="respuesta3" value="">
      <br>
      Respuesta 4:
       <input type="text" name="respuesta4" value="">
      <br>
      <button type="submit" name="button">Enviar</button>
    </form>
  </body>
</html>
<?php /**PATH /var/www/html/FINAL 2/ultimate_quizzzz/resources/views/crearPregunta.blade.php ENDPATH**/ ?>