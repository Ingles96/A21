<?php
/**
 * Permitir la conexion contra la base de datos
 */
class db
{
  //Atributos necesarios para la conexion
  private $host="localhost";
  private $user="root";
  private $pass="";
  private $db_name="nba";

  //Conector
  private $conexion;

  //Propiedades para controlar errores
  private $error=false;

  function __construct()
  {
      $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
      if ($this->conexion->connect_errno) {
        $this->error=true;
      }
  }

  //Funcion para saber si hay error en la conexion
  function hayError(){
    return $this->error;
  }


public function insertarEquipos($nombre,$ciudad,$conferencia,$division){
    if($this->error==false)
    {

      $nba1="INSERT INTO equipos(Nombre,Ciudad,Conferencia,Division) VALUES ('".$nombre."', '".$ciudad."', '".$conferencia."', '".$division."')";
      if (!$this->conexion->query($nba1)) {
        echo "Falló la insercion de la tabla: (" . $this->conexion->errno . ") " . $this->conexion->error;
        return false;
      }
      return true;
    }else{
      return false;
    }
  }

  public function devolverEquipos($nombre){
    if($this->error==false){
      $nba2 = $this->conexion->query("SELECT * FROM equipos WHERE Nombre='".$nombre."'");
      return $nba2;
    }else{
      return null;
    }
  }





}



 ?>
