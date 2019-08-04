<?php

require 'models/Task.php';

$tareas = [];
$tareas[0] = new Tareas('Arreglar Computadoras', 'Leonardo', 'Arreglar Computadora N-19');
$tareas[1] = new Tareas('Revisar Equipos Electronicos', 'Andres', 'Dectetar problema comentado');
$tareas[2] = new Tareas('Limpiar piso de cdt', 'Patricia', 'Recojer todos los sucios del piso');
$tareas[3] = new Tareas('Firmas de notas', 'Gabriel', 'Firmar las notas de programacion V y imprimir actas verdes');


require 'views/taks.view.php';

?>