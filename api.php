<?php
    $id=$_GET['id'];
    include "functions.php";
    
    switch ($id) {
        case '1':
            $aulas = getAula();
            print json_encode($aulas->fetch_assoc());
            break;
        case '2':
            print json_encode("cronograma segun cursos");
            break;
        case '3':
            print json_encode("dado un curso saber en donde esta");
            break;
        case '4':
            print json_encode("actividades disponibles");
            break;
                                
        default:
            print json_encode("no eligio una opcion");
            break;
    }
?>