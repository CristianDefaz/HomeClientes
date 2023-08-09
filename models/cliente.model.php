<?php
//TODO: archivos requeridos
require_once('../config/config.php');
//require_once('../models/empleadosroles.model.php');

class clienteModel
{
   /* public function login($em_correo, $em_contrasena)
    {
        $con = new ClaseConexion();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT * FROM empleado WHERE em_correo = '$em_correo' and em_contrasena='$em_contrasena'";
        print $cadena;
        $datos = mysqli_query($con, $cadena);
        return $datos;
   }*/

   public function login($em_correo, $em_contrasena)
   {
       $con = new ClaseConexion();
       $con = $con->ProcedimientoConectar();
       $cadena = "SELECT * FROM empleado WHERE em_correo = '$em_correo'";
       $datos = mysqli_query($con, $cadena);
   
       // Verifica si se encontró un registro con el correo electrónico proporcionado
       if (mysqli_num_rows($datos) > 0) {
           $empleado = mysqli_fetch_assoc($datos);
           $contrasenaEncriptada = $empleado['em_contrasena'];
   
           // Utiliza password_verify() para desencriptar y comparar la contraseña
           if (password_verify($em_contrasena, $contrasenaEncriptada)) {
               return $empleado; // Retorna el registro del empleado si la contraseña coincide
           }
       }
   
       return null; // Retorna null si no se encontró el empleado o la contraseña no coincide
   }
   


/*public function Insertar($Nombres, $Apellidos, $cedula, $telefono, $em_correo, $em_contrasena, $idRoles) {
    $con = new ClaseConexion();
    $con = $con->ProcedimientoConectar();
    $cadena = "INSERT INTO `empleado`(`em_nombre`, `em_apellido`, `em_cedula`, `em_telefono`, `em_correo`, `em_contrasena`, `rol_id`) VALUES ('$Nombres', '$Apellidos', '$cedula', '$telefono', '$em_correo', '$em_contrasena', '$idRoles')";
    if (mysqli_query($con, $cadena)) {
        return 'ok';
    } else {
        return mysqli_error($con);
    }
}*/

public function Insertar($Nombres, $Apellidos, $cedula, $telefono, $em_correo, $em_contrasena, $idRoles) {
    $con = new ClaseConexion();
    $con = $con->ProcedimientoConectar();
    
    // Encriptar la contraseña utilizando password_hash()
    $contrasenaEncriptada = password_hash($em_contrasena, PASSWORD_DEFAULT);
    
    $cadena = "INSERT INTO `empleado`(`em_nombre`, `em_apellido`, `em_cedula`, `em_telefono`, `em_correo`, `em_contrasena`, `rol_id`) VALUES ('$Nombres', '$Apellidos', '$cedula', '$telefono', '$em_correo', '$contrasenaEncriptada', '$idRoles')";
    
    if (mysqli_query($con, $cadena)) {
        return 'ok';
    } else {
        return mysqli_error($con);
    }
}


public function InsertarR($cedula, $Nombres, $Apellidos, $fechanacimiento, $genero, $altura, $peso, $telefono, $direccion,$correo,$contrasena,$idempleado) {
    $con = new ClaseConexion();
    $con = $con->ProcedimientoConectar();

     // Encriptar la contraseña utilizando password_hash()
     $contrasenaEncriptada = password_hash($contrasena, PASSWORD_DEFAULT);

    $cadena = "INSERT INTO `cliente`(`cli_cedula`, `cli_nombre`, `cli_apellido`, `cli_fecha_nacimiento`, `cli_genero`, `cli_altura`, `cli_peso`, `cli_telefono`, `cli_direccion`, `cli_correo`, `cli_contrasena`, `id_empleado`) VALUES ('$cedula', '$Nombres', '$Apellidos', '$fechanacimiento', '$genero', '$altura', '$peso', '$telefono', '$direccion','$correo','$contrasenaEncriptada','$idempleado')";
    if (mysqli_query($con, $cadena)) {
        $response = array('status' => 'ok');
    } else {
        $response = array('status' => 'error', 'message' => mysqli_error($con));
    }
    echo json_encode($response);
}




   /* public function Actualizar($idempleado,$Nombres, $Apellidos,$cedula, $telefono, $em_correo, $em_contrasena, $idRoles){
        $con = new ClaseConexion();
        $con=$con->ProcedimientoConectar();
        $cadena = "UPDATE `empleado` SET `em_nombre`='$Nombres',`em_apellido`='$Apellidos',`em_cedula`='$cedula',`em_telefono`='$telefono',`em_correo`='$em_correo',`em_contrasena`='$em_contrasena',`rol_id`='$idRoles' WHERE em_id=$idempleado";
        if (mysqli_query($con, $cadena)){
            return 'ok';
        }else{
            return mysqli_error($con);
        }
    }*/


}