<?php
function conectarBD (): mysqli
{
    $bd = mysqli_connect('localhost', 'root', '[z0cw54foj#i!!4', 'bienesraices_crud');

    if (!$bd){
        echo 'error no conecto';
        exit;//Impide que el resto de código que sigue, se ejecute
    }
    return $bd;
}
