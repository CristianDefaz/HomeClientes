<?php
class SubirFoto{
    public function guardar($imagen){
        $destino = '../public/img/facturas/'. $_FILES["imagen"]["name"];
        copy($_FILES["imagen"]["tmp_name"],$destino);
        return '../'.$destino;
    } 
}