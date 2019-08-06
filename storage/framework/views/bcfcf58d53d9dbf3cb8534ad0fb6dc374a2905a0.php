<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js">
    </script>
  </head>
  <body>
    <div class="container">
      <form class="" action="/juego/test" method="post">
        <?php echo csrf_field(); ?>

      <div class="pregunta1">
        <?php $__currentLoopData = $preguntas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pregunta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><?php echo e($pregunta->enunciado); ?></li>
          <?php $__currentLoopData = $pregunta->respuestas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $respuestita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <input type="radio" name="respuesta[<?php echo e($pregunta->id); ?>]" value="<?php echo e($respuestita->id); ?>"><?php echo e($respuestita->enunciado); ?>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <button type="submit" name="button">Responder</button>
            </form>
      
    </div>
  </body>
</html>
<?php /**PATH /var/www/html/proyecto/resources/views/juego.blade.php ENDPATH**/ ?>