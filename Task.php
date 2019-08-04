<?php

class Tareas {
    public $titulo;
    public $autor;
    public $descripcion;
    public $estado = false;
  
    function __construct($title, $owner, $description) {
      $this->titulo = $title;
      $this->autor = $owner;
      $this->descripcion = $description;
      $this->estado;
    }
  }

 
  