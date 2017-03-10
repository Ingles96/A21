<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insertar</title>
  </head>
  <body>
<table border=5>


    <?php


//Conexiones a la base de datos
include "dbNBA.php";

//Comprobacion de $_POST
/*if (isset($_POST["nombre"])&&(!empty($_POST["nombre"])&&(isset($_POST["ciudad"])&&(!empty($_POST["ciudad"])&&(isset($_POST["conferencia"])&&(!empty($_POST["conferencia"])&&(isset($_POST["division"])&&(!empty($_POST["division"])))))))) {
*/

  $nba1=new db();

  $nba1->insertarEquipos($_POST['nombre'],$_POST['ciudad'],$_POST['conferencia'],$_POST['division']);
  $nba2=$nba1->devolverEquipos($_POST['nombre']);
  echo "<tr>";
  echo "<td><strong>Nombre</strong></td>";
  echo "<td><strong>Ciudad</strong></td>";
  echo "<td><strong>Conferencia</strong></td>";
  echo "<td><strong>Division</strong></td>";
  echo "</tr>";
while ($fila=$nba2->fetch_assoc()){

  echo "<tr>";
  echo "<td>";
  echo "" .$fila['Nombre'];
    echo "</td>";
      echo "<td>";
  echo "" .$fila['Ciudad'];
    echo "</td>";
    echo "<td>";
echo "" .$fila['Conferencia'];
  echo "</td>";
  echo "<td>";
echo "" .$fila['Division'];
echo "</td>";
  echo "</tr>";

}

     ?>
  </body>
</html>
