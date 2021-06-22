<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Original+Surfer&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/app.css">
    <title>Login</title>
</head>
<body>
    <div class="login">
        <div class="imagen flex-general">
            <div >
                <img src="img/imagen3.jpg" alt="" class="imagen">
            </div>
            <div class="flex-formulario">
                <h1 class="no-margin text-center">Registro Usuario</h1>
                <div class="">
                    <form action="" method="post" class="flex-columna">
                        <div class="grid-3">
                            <div class="caja__registro">
                                <label for="">Nombre: </label>
                                <input type="text" class="w-100" placeholder="nombre">
                            </div>
                            <div class="caja__registro">
                                <label for="">Apellidos:</label>
                                <input type="text" class="w-100" placeholder="apellido">
                            </div>
                        </div>
                        <div class="">
                            <div class="caja__registro">
                                <label for="">Telefono: </label>
                                <input type="tel" class="w-100" placeholder="telefono">
                            </div>
                        </div>

                        <div class="grid-2">
                            <div class="caja__registro">
                                <label for="">Direccion: </label>
                                <input type="text" class="w-100" placeholder="direccion">
                            </div>
                            <div class="caja__registro">
                                <label for="">E-mail: </label>
                                <input type="email" class="w-100" placeholder="email">
                            </div>
                        </div>
                        <div class="grid-2">
                            <div class="caja__registro">
                                <label for="">Usuario: </label>
                                <input type="text" class="w-100"  placeholder="usuario">
                            </div>
                            <div class="caja__registro">
                                <label for="">Contraseña: </label>
                                <input type="password" class="w-100" placeholder="usuario">
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="caja__termino">
                                <input type="checkbox" id="termino"> <label class="no-margin" for="termino">Acepto terminos y Condiciones</label>
                            </div>
                        </div>
                        <div class="flex-boton">
                            <a href="usuario.html" class="btn btn-primario w-50 text-center">Volver</a>
                            <input type="submit" value="registrar" class="btn btn-secundario w-50">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>