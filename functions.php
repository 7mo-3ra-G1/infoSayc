<?php

include("conex.php");
$linkconn = conectar();

function getHorarios(){
    $linkconn = conectar();
    $sql = "SELECT * FROM cronograma";
    return mysqli_query($linkconn, $sql);
}

function getProfesores(){
    $linkconn = conectar();
    $sql = "SELECT * FROM profesores";
    return  mysqli_query($linkconn, $sql);

}