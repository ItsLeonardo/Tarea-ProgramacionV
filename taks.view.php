<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Lista de Gestión de Tareas</h1>
<ul>

  <?php foreach ($tareas as $key => $tarea) : ?>
  <h3>Tarea N <?= $key+1; ?></h3>
  <li>Titulo: <?= $tarea->titulo; ?></li>
  <li>Dueño: <?= $tarea->autor; ?></li>
  <li>Descripción: <?= $tarea->descripcion; ?></li>
  <?php $estado = ($tarea->estado) ? 'Completado' : 'Incompleto'; ?>
  <li>Estado: <?=$estado; ?></li>
  <br>

<?php endforeach; ?>

</ul>
    
</body>
</html>