
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Datos Personales</title>
        <style type="text/css" >
             
            div{
                color:white;
                
            }
            
           
        </style>
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
    <nav>
    <ul>     
	    <br>
	    <br>
      <li><a href="Index.php">Inicio</a></li>
      <li><a href="Nosotros.php">Nosotros</a></li>
      <li><a href="TestimonioCargado.php">Testimonios</a></li>
      <li><a href="Contacto.html">Contacto</a></li>
      <li><a href="ventaBienes.php">Formulario</a></li>
    </ul>
    </nav>
    </div>
</header>
    <body background="img/noticia-cimas.png" > </body>
        
        <div class="container" style="width:60%">
            <br/>
            <div class="panel panel-default" style="background-color: rgba(0,0,0,0.6)">
                <legend class="col-form-label text-center" style="color:white" ><h1>Datos Personales</h1></legend>
                
        <div class="panel-body">
            <form  class="form-group" name="frmVista" method="post" action="EnvioCargado.php">
                <div class="col-sm-12" >
                        <h3><strong>Datos Personales</strong></h3>
                    </div>
                    <div class="form-row">
                        
                        <div class="form-group col-md-6">
                            <label for="input">Nombres</label>
                            <input type="text" name="txtNombres" class="form-control" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input">Apellidos</label>
                            <input type="text" name="txtApellidos" class="form-control" placeholder="">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="input">Telefono</label>
                            <input type="numbert" name="txtTelefono" class="form-control" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="input">Email</label>
                            <input type="email" name="txtEmail" class="form-control" placeholder="">
                        </div>
                    </div>
                    
                
                    
                    <div class="col-sm-12"  >
                        <h3><strong>Datos de la matricula</strong></h3>
                    </div>
               
                
                
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="input" class="form-label">tipo de matricula</label>
                            <select class="form-control" name="cboOper">
                            <option>Seleccionar</option>
                            <option>Regular</option>
                            <option>Irregular</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="input">Distrito</label>
                            <input type="text" name="txtDistrito" class="form-control" placeholder="">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="input">Zona</label>
                            <input type="text" name="txtZona" class="form-control" placeholder="">
                        </div>
                    </div>
                
                    
                
                
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="input" class="form-label">ciclo</label>
                            <select class="form-control" name="cboTipoI">
                            <option>Seleccionar</option>
                            <option>I</option>
                            <option>II</option>
                            <option>III</option>
                            <option>IV</option>
                            <option>V</option>
                            <option>VI</option>
                            <option>VII</option>
                            <option>VIII</option>
                            <option>IX</option>
                            <option>X</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="input" class="form-label">Equipamiento</label>
                            <select class="form-control" name="cboEquip">
                            <option>Seleccionar</option>
                            <option>Sin Amoblar</option>
                            <option>SemiAmoblado</option>
                            <option>No Aplica</option>
                            </select>
                        </div>
                        
                    </div>
                
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="input" class="form-label">Ba??os</label>
                            <select class="form-control" name="cboBa??o">
                            <option>Seleccionar</option>
                            <option>1 Ba??o</option>
                            <option>2 Ba??os</option>
                            <option>3 Ba??os</option>
                            <option>4 Ba??os</option>
                            <option>5 Ba??os</option>
                            <option>6 Ba??os</option>
                            <option>7 Ba??os</option>
                            <option>8 Ba??os</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="input" class="form-label">Cocheras</label>
                            <select class="form-control" name="cboCochera">
                            <option>Seleccionar</option>
                            <option>1 Carro</option>
                            <option>2 Carros</option>
                            <option>3 Carros</option>
                            <option>4 Carros</option>
                            <option>5 Carros</option>
                            <option>6 Carros</option>
                            <option>7 Carros</option>
                            <option>8 Carros</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="input">Construcci??on(m??)</label>
                            <input type="text" name="txtConstru" class="form-control" placeholder="">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="input">Precio</label>
                            <input type="text" name="txtPrecio" class="form-control" placeholder="">
                        </div>
                    </div>
                
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="input">??rea de Servicio</label>
                            <input type="text" name="txtServicio" class="form-control" placeholder="">
                        </div>
                        
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <textarea class="form-control" name="message" placeholder="Otras Caracter??sticas ." rows="5"></textarea>
                        </div>
                        
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12" class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">Acepta los t??rminos y condiciones</label>
                        </div>
                        
                    </div>
                    
                <div class="form-row">
                    <div class="forma-group col-md-12 text-center text-right mt-5">
                        <button type="submit" name="btnProcesar" class="btn btn-success btn-block btn-lg">Enviar</button>
                    </div>
                </div>
                
            </form>
            </div>
    </div>
        </div>
    <footer>
	<center>P??gina realizada para el curso de Programaci??n II - UCH - Copyright &copy; - 2021</center>
</footer>
    </body>
</html>
