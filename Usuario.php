<?php
class Usuario {
  private string $nombre;
  private string $correo;
  private string $contrasenia;

  public function __construct(string $nombre, string $correo, string $contrasenia) {
      $this -> nombre = $nombre;
      $this -> correo = $correo;
      $this -> contrasenia = $contrasenia;
  }
  public function getNombre(){
    
  }

}
