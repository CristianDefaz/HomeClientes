<?php
error_reporting(0);
// TODO: Requerimientos
require_once('../config/sesiones.php');
require_once('../models/cliente.model.php');
$Usuario = new clienteModel;

switch ($_GET['op']) {
    case 'login':
        $em_correo = $_POST['em_correo'];
        $em_contrasena = $_POST['em_contrasena'];
    
        if (empty($em_correo) || empty($em_contrasena)) {
            header("Location:../views/sesion/login.php?op=2");
            exit();
        }
    
        $res = $Usuario->login($em_correo, $em_contrasena);
    
        try {
            if (is_array($res) && count($res) > 0) {
                $_SESSION['em_id'] = $res['em_id'];
                $_SESSION['em_nombre'] = $res['em_nombre'];
                $_SESSION['em_apellido'] = $res['em_apellido'];
                $_SESSION['em_cedula'] = $res['em_cedula'];
                $_SESSION['em_telefono'] = $res['em_telefono'];
                $_SESSION['em_correo'] = $res['em_correo'];
                $_SESSION['rol_id'] = $res['rol_id'];
                $_SESSION['rol_nombre'] = $res['rol_nombre'];
    
                header('Location:../views/Dashboard/home.php');
                exit();
            } else {
                header("Location:../views/sesion/login.php?op=1");
                exit();
            }
        } catch (Throwable $th) {
            echo json_encode($th->getMessage());
        }
        break;

        
    case 'insertar':
        $cedula = $_POST['cli_cedula'];
        $Nombres = $_POST['cli_nombre'];
        $Apellidos = $_POST['cli_apellido'];
        $fechanacimiento = $_POST['cli_fecha_nacimiento'];
        $genero = $_POST['cli_genero'];
        $altura = $_POST['cli_altura'];
        $peso = $_POST['cli_peso'];
        $telefono = $_POST['cli_telefono'];
        $direccion = $_POST['cli_direccion'];
        $correo = $_POST['cli_correo'];
        $contrasena = $_POST['cli_contrasena'];
        $idempleado = $_POST['id_empleado'];
        $datos = array();
        $datos = $Cliente->InsertarR($cedula, $Nombres, $Apellidos, $fechanacimiento, $genero, $altura, $peso, $telefono, $direccion,$correo,$contrasena,$idempleado);
        echo json_encode($datos);
        
}
