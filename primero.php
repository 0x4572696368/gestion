<!DOCTYPE html>
<?php

include 'segundo.php';
$nombre=0;
$apellido=0;
$dni=0;
$ciclo=0;
$turno=0;
$tiempo=0;
$sueldo=0.0;
$suel=0.0;
$desc=0.0;
$total=0.0;

if(isset($_POST["btnProcesar"])){
    $clien=$_POST["cboProd"];
    $cliente=$_POST["cboProductos"];
    $tiempo=$_POST["cboTiempo"];
    $sueldo= fn_impsueldo($clien, $tiempo);
    $desc= fn_descuento($tiempo, $sueldo);
    $total= fn_montototal($sueldo, $desc);
    $suel= fn_impsueld($clien);
   $nombre= fn_nombre($cliente, $nombre);
   $apellido= fn_apellido($cliente, $apellido);
   $dni= fn_dni($cliente, $dni);
   $ciclo= fn_ciclo($cliente, $ciclo);
   $turno= fn_turno($cliente, $turno);
   
}
echo '';
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> MATRÍCULAS</title>
        <style type="text/css">
            .btnWidth {
                width: 80px;
            }     
      
        *</style>
        <link rel="shortcut icon" href="img/LOGO.png"/>
        <link type="text/css" rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
         <link type="text/css" rel="stylesheet" href="css/estilo.css" />
    </head>
    <body>
        <header>
    <div class="contenedor">
	<div id="marca">
            <img src="img/cinma.gif" style="float: left; margin: 0% 0% 10% 1%;">
	</div>
    
    </div>
</header>
      
  
        <img src="img/noticia-cimas.png" width="1700" height="300"id="miimagen" alt="Imagen de Ejemplo"/>


        <div class="container">
            
            <br/>
            <div class="panel panel-default">
                <center>  <div class="panel-heading"><h3>Registros de Matrícula</h3></div></center>
                <div class="panel-body">
                    <form name="regFrm" method="post" action="primero.php" class="form-horizontal" >
                        <div class="form-group">
                            <label for="regFrm:cboProductos" class="control-label col-sm-4">Matriculados</label>
                            <div class="col-md-3 no-padding">
                                <select name="cboProductos" class="zonal_select">
                                    <option value="0">Seleccionar</option>
                                    <option value="1">matricula1</option>
                                    <option value="2">matricula2 </option>
                                    <option value="3">matricula3</option>
                                    <option value="4">matricula4</option>
                                    <option value="5">matricula5</option>
                                    <option value="6">matricula6 </option>
                                    <option value="7">matricula7</option>
                                    <option value="8">matricula8</option>
                                    <option value="9">matricula9</option>
                                    <option value="10">matricula10 </option>
                                    <option value="11">matricula11</option>
                                    <option value="12">matricula12</option>
                                    <option value="13">matricula13</option>
                                    <option value="14">matricula14</option>
                                    <option value="15">matricula15</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        
                        <div class="form-group"><label for="regFrm:txtnombre" class="control-label col-sm-4">Nombre:</label>
                            
                            <div class="col-sm-2"><input type="text" name="txtnombre" value="<?php echo $nombre    ?>" class="form-control" />
                            </div>
                        </div>
                            <br>
                            <div class="form-group"><label for="regFrm:txtapellido" class="control-label col-sm-4">Apellido:</label>
                            <div class="col-sm-2"><input type="text" name="txtapellido" value="<?php echo $apellido    ?>" class="form-control" />
                            </div>
                        </div>
                            <br>
                        <div class="form-group"><label for="regFrm:txtdni" class="control-label col-sm-4">Dni:</label>
                            <div class="col-sm-2"><input type="text" name="txtdni" value="<?php echo $dni    ?>" class="form-control" />
                            </div>
                        </div>
                            <br>
                            <div class="form-group"><label for="regFrm:txtciclo" class="control-label col-sm-4">Ciclo:</label>
                            <div class="col-sm-2"><input type="text" name="txtciclo" value="<?php echo $ciclo    ?>" class="form-control" />
                            </div>
                        </div>
                            <br>
                            <div class="form-group"><label for="regFrm:txtturno" class="control-label col-sm-4">Turno:</label>
                            <div class="col-sm-2"><input type="text" name="txtturno" value="<?php echo $turno    ?>" class="form-control" />
                            </div>
                        </div>
                            <br>
                            
                            
                        <<div class="form-group">
                            <label for="regFrm:cboTiempo" class="control-label col-sm-4">Cantidad de Pensión</label>
                            <div class="col-md-3 no-padding">
                                <select name="cboTiempo" class="zonal_select">
                                    <option value="0">Seleccionar</option>
                                    <option value="1">1</option>
                                    <option value="2">2 </option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6 </option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10 </option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="regFrm:cboProd" class="control-label col-sm-4">tipos de beneficios</label>
                            <div class="col-md-3 no-padding">
                                <select name="cboProd" class="zonal_select">
                                    <option value="0">Seleccionar</option>
                                    <option value="1">Normal</option>
                                    <option value="2">Media Beca </option>
                                    <option value="3">Beca completa</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group"><label for="regFrm:txtsueldo" class="control-label col-sm-4"> pensión </label>
                            <div class="col-sm-3"><input type="text" name="txtsueldo" value="<?php echo $suel ?>" class="form-control" />
                            </div>
                        </div>
                        <br>
                        <div class="form-group"><label for="regFrm:txtsueldo" class="control-label col-sm-4">pensión total:</label>
                            <div class="col-sm-3"><input type="text" name="txtsueldo" value="<?php echo $sueldo;  ?>" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group"><label for="regFrm:txtdesc" class="control-label col-sm-4"> Descuento:</label>
                            <div class="col-sm-3"><input type="text" name="txtdesc" value="<?php echo $desc   ?>" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group"><label for="regFrm:txttotal" class="control-label col-sm-4">Monto Total:</label>
                            <div class="col-sm-3"><input type="text" name="txttotal" value="<?php echo $total  ?>" class="form-control" />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4">
                                <div class="col-sm-9">
                                    <input type="submit" name="btnProcesar" value="Procesar" class="btn btn-success" />
                                    <input type="submit" name="btnBorrar" value="Borrar" class="btn btn-warning"/>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer>
	<center>Página realizada para el curso de GESTIÓN DE PROYECTO - UCH - Copyright &copy; - 2021</center>
</footer>
    </body>
</html>