<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php

    if(isset($_POST["btnProcesar"])){
   
    $nombre=$_POST["txtNombres"];
    $apellidos=$_POST["txtApellidos"];
    $telefono=$_POST["txtTelefono"];
    $email=$_POST["txtEmail"];
    $operación=$_POST["cboOper"];
    $distrito=$_POST["txtDistrito"];
    $zona=$_POST["txtZona"];
    $equipamiento=$_POST["cboEquip"];
    $TipoI= $_POST["cboTipoI"];
    $dormitorio=$_POST["cboDormi"];
    $baños=$_POST["cboBaño"];
    $cocheras=$_POST["cboCochera"];
    $construccion=$_POST["txtConstru"];
    $precio=$_POST["txtPrecio"];
    $servicio=$_POST["txtServicio"];
    $vigilancia=$_POST["txtVigi"];
    $areas=$_POST["txtArea"];
    $otros=$_POST["txtOtro"];
    }
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Venta/Alquiler de Inmueble</title>
        <style type="text/css" >
             
            div{
                color:white;
                
            }
            body{
                height: 100vh;
            }
           
        </style>
        <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
        
    </head>
    <body background="img/PROPIEDAD-1.jpg">
        <div class="container" style="width:60%">
            <br/>
            <div class="panel panel-default" style="background-color: rgba(0,0,0,0.6)">
                <legend class="col-form-label text-center" style="color:white" ><h1>VENTA Y ALQUILER DE INMUEBLES</h1></legend>
                
        <div class="panel-body">
            <form  class="form-group">
                <div class="col-sm-12" >
                        <h3><strong>Datos Personales</strong></h3>
                    </div>
                    <div class="form-row">
                        
                        <div class="form-group col-md-6">
                            <label for="input">Nombre</label>
                            <input type="text" name="txtNombres" class="form-control" disabled value="<?php echo $nombre ?>"/>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input">Apellidos</label>
                            <input type="text" name="txtApellidos" class="form-control" disabled value="<?php echo $apellidos ?>"/>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="input">Telefono</label>
                            <input type="number" name="txtTelefono" class="form-control" disabled value="<?php echo $telefono ?>"/>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input">Email</label>
                            <input type="email" name="txtEmail" class="form-control" disabled value="<?php echo $email ?>"/>
                        </div>
                    </div>
                    
                
                    
                    <div class="col-sm-12" >
                        <h3><strong>Datos del Inmueble</strong></h3>
                    </div>
               
                
                
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="input" class="form-label">Operación</label>
                            <input type="text" name="cboOper" class="form-control" disabled value="<?php echo $operación?>"/>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="input">Distrito</label>
                            <input type="text" name="txtDistrito" class="form-control" disabled value="<?php echo $distrito?>"/>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="input">Zona</label>
                            <input type="text" name="txtZona" class="form-control" disabled value="<?php echo $zona?>"/>
                        </div>
                    </div>
                
                    
                
                
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="input" class="form-label">Tipo de Inmueble</label>
                            <input type="text" name="cboTipoI" class="form-control" disabled value="<?php echo $TipoI?>"/>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="input" class="form-label">Equipamiento</label>
                            <input type="text" name="cboEquip" class="form-control" disabled value="<?php echo $equipamiento?>"/>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="input" class="form-label">Dormitorios</label>
                            <input type="text" name="cboDormi" class="form-control" disabled value="<?php echo $dormitorio?>"/>
                        </div>
                    </div>
                
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="input" class="form-label">Baños</label>
                            <input type="text" name="cboBaño" class="form-control" disabled value="<?php echo $baños?>"/>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="input" class="form-label">Cocheras</label>
                            <input type="text" name="cboCochera" class="form-control" disabled value="<?php echo $cocheras?>"/>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="input">Construccióon(m²)</label>
                            <input type="text" name="txtConstru" class="form-control" disabled value="<?php echo $construccion?>"/>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="input">Precio</label>
                            <input type="text" name="txtPrecio" class="form-control" disabled value="<?php echo $precio?>"/>
                        </div>
                    </div>
                 
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="input" class="form-label">Área de Servicio</label>
                            <input type="text" name="txtServicio" class="form-control" disabled value="<?php echo $servicio?>"/>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="input" class="form-label">Vigilancia las 24hrs</label>
                            <input type="text" name="txtVigi" class="form-control" disabled value="<?php echo $vigilancia?>"/>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="input">Áreas Comunes</label>
                            <input type="text" name="txtArea" class="form-control" disabled value="<?php echo $areas?>"/>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="input">Otros</label>
                            <input type="text" name="txtOtro" class="form-control" disabled value="<?php echo $otros?>"/>
                        </div>
                    </div>
              
                  
                
            </form>
            </div>
        </div>
        </div>
    </body>
</html>
