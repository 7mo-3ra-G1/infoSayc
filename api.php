<?php
    $id=$_GET['id'];
    include "functions.php";
    
    switch ($id) {
        case 'GetAula':
            $aulas = getAula();
            print json_encode($aulas->fetch_assoc());
            break;
        case 'GetCurso':
            $aulas = getCurso();
            print json_encode($aulas->fetch_assoc());
            break;
        case 'GetCronograma':
            $aulas = getCronograma();
            print json_encode($aulas->fetch_assoc());
            break;
        case 'GetCategoria':
            $aulas = getCategoria();
            print json_encode($aulas->fetch_assoc());
            break;
        case 'GetGuias':
            $aulas = getGuias();
            print json_encode($aulas->fetch_assoc());
            break;
        case 'GetTalleristas':
            $aulas = getTalleristas();
            print json_encode($aulas->fetch_assoc());
            break;
        case 'GetGuiaCurso':
            $aulas = getGuiaCurso();
            print json_encode($aulas->fetch_assoc());
            break;
                                
        default:
            print json_encode(0);
            break;
    }
?>
