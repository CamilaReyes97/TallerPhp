<?php
include('config/config.php'); /* LLAMAMOS CONFIG DE URLS */
include('config/database.php'); /* CONEXION A LA BD */


class mundial{
    public $conexion; /* LLAMO LA CONEXION DE MI BASE DE DATOS */

    function __construct(){
        $db= new Database(); /* LA CONEXION A LA BD SIEMPRE SE RENUEVE O ESTE EN LINEA */
        $this->conexion = $db->connectToDatabase();
    }

    function getB(){
        $basededatos= "SELECT s.id_seleccion ,s.nombre, g.grupo FROM seleccion s LEFT JOIN grupo g ON  s.grupo = g.id_grupo WHERE g.grupo= 'B'"; 
        return mysqli_query($this->conexion, $basededatos);
    }


    
 function getA(){
        $basededatos= "SELECT p.id_partido, s.nombre AS team1, se.nombre AS team2, g.grupo AS grupo FROM partido p
        LEFT JOIN seleccion s ON s.id_seleccion = p.id_seleccion
        LEFT JOIN seleccion se ON se.id_seleccion = p.id_seleccion_dos 
        LEFT JOIN grupo g ON s.grupo= g.id_grupo
        WHERE g.grupo LIKE '%A%';"; 
        return mysqli_query($this->conexion, $basededatos);
    }  


  function letterU(){
        $basededatos= "SELECT p.id_partido, s.nombre AS team1, se.nombre AS team2, g.grupo AS grupo FROM partido p
        LEFT JOIN seleccion s ON s.id_seleccion = p.id_seleccion
        LEFT JOIN seleccion se ON se.id_seleccion = p.id_seleccion_dos 
        LEFT JOIN grupo g ON s.grupo= g.id_grupo
        WHERE s.nombre LIKE '%u%' OR se.nombre LIKE '%u%'"; 
        return mysqli_query($this->conexion, $basededatos);
    }  

  function visitWinner(){
        $basededatos= "SELECT p.id_partido, s.nombre AS teamLocal, se.nombre AS teamVisitor, r.goles_equipo_uno AS scoreLocal, r.goles_equipo_dos AS scoreVisitor
        FROM resultado r
        LEFT JOIN partido p ON p.id_partido = r.id_partido
        LEFT JOIN seleccion s ON s.id_seleccion = p.id_seleccion
        LEFT JOIN seleccion se ON se.id_seleccion = p.id_seleccion_dos 
        LEFT JOIN grupo g ON s.grupo= g.id_grupo
        WHERE r.goles_equipo_dos> r.goles_equipo_uno"; 
        return mysqli_query($this->conexion, $basededatos);
    }  

    function colombia(){
        $basededatos= "SELECT p.id_partido, s.nombre AS teamLocal, se.nombre AS teamVisitor, r.goles_equipo_uno AS scoreLocal, r.goles_equipo_dos AS scoreVisitor
        FROM resultado r
        LEFT JOIN partido p ON p.id_partido = r.id_partido
        LEFT JOIN seleccion s ON s.id_seleccion = p.id_seleccion
        LEFT JOIN seleccion se ON se.id_seleccion = p.id_seleccion_dos 
        LEFT JOIN grupo g ON s.grupo= g.id_grupo
        WHERE s.nombre LIKE '%Colombia%' OR se.nombre LIKE '%Colombia%'";
        return mysqli_query($this->conexion, $basededatos);
    }   
    


}

?>