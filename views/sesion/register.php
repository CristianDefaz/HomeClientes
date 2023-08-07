<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrar Clientes </title>

    <!-- Custom fonts for this template-->
    <link href="../../Plog/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../Plog/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Crear Cuenta!</h1>
                            </div>
                            <form class="user">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="cli_cedula" id="cli_cedula"
                                        placeholder="Cedula">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="cli_nombre" id="cli_nombre"
                                            placeholder="Nombre">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="cli_apellido" id="cli_apellido"
                                            placeholder="Apellido">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="date" class="form-control form-control-user" name="cli_fecha_nacimiento" id="cli_fecha_nacimiento"
                                            placeholder="Fecha de nacimiento">
                                    </div>
                                    <div class="col-sm-6">
                                        <select type="text" class="form-control"  name="cli_genero" id="cli_genero"
                                            >
                                            <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                            </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="cli_peso" id="cli_peso"
                                            placeholder="Peso">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="cli_altura" id="cli_altura"
                                            placeholder="Altura">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="cli_direccion" id="cli_direccion"
                                            placeholder="Dirección">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="cli_telefono" id="cli_telefono"
                                            placeholder="Teléfono">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="cli_correo" id="cli_correo"
                                        placeholder="correo">
                                </div>
                                <div class="form-group">
                                    
                                        <input type="password" class="form-control form-control-user"
                                        name="cli_contraseña" id="cli_contraseña" placeholder="contraseña">
                                  
                                  
                                </div>
                                <a href="login.html" type="submit" class="btn btn-primary btn-user btn-block">
                                    Registrar Cuenta 
                                </a>
                                <hr>
                               
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Olvido su Contraseña?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Ya tiene Cuenta? Ingrese!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../Plog/vendor/jquery/jquery.min.js"></script>
    <script src="../../Plog/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../Plog/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../Plog/js/sb-admin-2.min.js"></script>

</body>

</html>