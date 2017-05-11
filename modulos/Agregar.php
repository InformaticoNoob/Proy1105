<?php
include '../lib/Conexion.php';

/* Instancia el objeto de conexion */
$conn = new Conexion;

if ($conn->conectar()){
    
   $nom=$_POST["nombre"];
   $totusd=$_POST["totalusd"];
   $ano=$_POST["ano"];

$sql="INSERT INTO productos(nombre,totalusd,ano) values('$nom', $totusd, $ano)";

echo $sql;

}


/*
private function Conexion(){
        
    $miconn = new mysqli("localhost", "root", "avaras08", "ventas");
    if ($miconn->connect_errno) {
        return "Fallo al conectar a MySQL: (" . $miconn->connect_errno . ") " . $miconn->connect_error;
        }
        return $miconn;
        
        
        
        
        
        
    }
 */
  


 
 