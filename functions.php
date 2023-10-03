<?php

include("conexion.php");
$linkconn = conectar();

function getAula(){
    $linkconn = conectar();
    $sql = "SELECT aula.nombre, categoria.nombre AS categoria, aula.capacidad, aula.estado FROM aula INNER JOIN categoria ON aula.id_categoria = categoria.id_categoria;
    ";
    return mysqli_query($linkconn, $sql);
}

function getCurso(){ 
    $linkconn = conectar();
    $sql = "SELECT  curso.curso , curso.division  FROM curso ";
    return  mysqli_query($linkconn, $sql);

}

function getCronograma(){
    $linkconn = conectar();
    $sql ="SELECT  cronogram.horario FROM cronogram";
    return  mysqli_query($linkconn, $sql);

}
function getCategoria(){
    $linkconn = conectar();
    $sql = "SELECT  categoria.nombre FROM categoria";
    return  mysqli_query($linkconn, $sql);

}
function getguias(){
    $linkconn = conectar();
    $sql = "SELECT  guias.nombre,guias.apellido,guias.curso FROM guias";
    return  mysqli_query($linkconn, $sql);

}
function getTalleristas(){
    $linkconn = conectar();
    $sql = "SELECT  talleristas.nombre,talleristas.apellido FROM talleristas";
    return  mysqli_query($linkconn, $sql);
}

function getGuiaCurso(){
    $linkconn = conectar();
    $sql = "SELECT curso.`curso`, curso.`division`, guias.nombre, guias.apellido FROM `curso` INNER JOIN guias ON curso.id_curso = guias.id_curso WHERE curso.id_curso = 3;";
    return  mysqli_query($linkconn, $sql);

}
