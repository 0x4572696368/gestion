<?php
function fn_impsueldo($clien,$tiempo){
    switch ($clien){
        case 0:$sueldo=0;break;
         case 1:$sueldo=800.0*$tiempo;break;
          case 2:$sueldo=400.0*$tiempo;break;
          default:$sueldo=0.0*$tiempo;break;
    
    }
    return $sueldo;
}
function fn_impsueld($clien){
    switch ($clien){
        case 0:$suel=0;break;
         case 1:$suel=800.0;break;
          case 2:$suel=400.0;break;
          default:$suel=0.0;break;
    
    }
    return $suel;
}
function fn_descuento($tiempo,$sueldo){
    if($tiempo>=5 & $sueldo>=700){
        $desc=$sueldo*0.05;
        
    }else{
        $desc=0;
    }
    return $desc;
    
}
function fn_montototal($sueldo,$desc){
    return ($sueldo-$desc);
}

    function fn_nombre($cliente,$nombre){
    switch ($cliente){
        case 0:$nombre=0;break;
         case 1:$nombre="susana";break;
          case 2:$nombre="elena";break;
          case 3:$nombre="julia";break;
        case 4:$nombre="jeraldy";break;
        case 5:$nombre="frank";break;
        case 6:$nombre="raul";break;
        case 7:$nombre="yosnel";break;
        case 8:$nombre="jose";break;
        case 9:$nombre="antonio";break;
        case 10:$nombre="jordan";break;
        case 11:$nombre="juan";break;
        case 12:$nombre="lili";break;
        case 13:$nombre="carlos";break;
        case 14:$nombre="adela";break;
        default :$nombre="alan";break;
    
    }
    return $nombre;
    }
    function fn_apellido($cliente,$apellido){
    switch ($cliente){
        case 0:$apellido=0;break;
         case 1:$apellido="aguilar";break;
          case 2:$apellido="colca";break;
          case 3:$apellido="centurion";break;
        case 4:$apellido="albitez";break;
        case 5:$apellido="arce";break;
        case 6:$apellido="abrigo";break;
        case 7:$apellido="contreras";break;
        case 8:$apellido="sanchez";break;
        case 9:$apellido="melgarejo";break;
        case 10:$apellido="mautino";break;
        case 11:$apellido="dominguez";break;
        case 12:$apellido="salazar";break;
        case 13:$apellido="diaz";break;
        case 14:$apellido="vallejo";break;
        default :$apellido="huanca";break; 
    }
    return $apellido;
    }
    function fn_dni($cliente,$dni){
    switch ($cliente){
        case 0:$dni=0;break;
        case 1:$dni="76543210";break;
        case 2:$dni="77543220";break;
        case 3:$dni="78543230";break;
        case 4:$dni="79543240";break;
        case 5:$dni="71543250";break;
        case 6:$dni="72543260";break;
        case 7:$dni="73543270";break;
        case 8:$dni="74543280";break;
        case 9:$dni="75543290";break;
        case 10:$dni="76643110";break;
        case 11:$dni="74543120";break;
        case 12:$dni="79543130";break;
        case 13:$dni="75543140";break;
        case 14:$dni="73543150";break;
        default:$dni="72543160";break;
    
    
    }
    return $dni;
    }
   function fn_ciclo($cliente,$ciclo){
    switch ($cliente){
        case 0:$ciclo=0;break;
        case 1:$ciclo="I";break;
        case 2:$ciclo="II";break;
        case 3:$ciclo="III";break;
        case 4:$ciclo="IV";break;
        case 5:$ciclo="V";break;
        case 6:$ciclo="VI";break;
        case 7:$ciclo="VII";break;
        case 8:$ciclo="VIII";break;
        case 9:$ciclo="IX";break;
        case 10:$ciclo="X";break;
        case 11:$ciclo="I";break;
        case 12:$ciclo="II";break;
        case 13:$ciclo="III";break;
        case 14:$ciclo="IV";break;
        default:$ciclo="V";break;
    
    
    }
    return $ciclo;
    }
    function fn_turno($cliente,$turno){
    switch ($cliente){
        case 0:$turno=0;break;
        case 1:$turno="Mañana";break;
        case 2:$turno="Tarde";break;
        case 3:$turno="Noche";break;
        case 4:$turno="Mañana";break;
        case 5:$turno="Tarde";break;
        case 6:$turno="Noche";break;
        case 7:$turno="Mañana";break;
        case 8:$turno="Tarde";break;
        case 9:$turno="Noche";break;
        case 10:$turno="Mañana";break;
        case 11:$turno="Tarde";break;
        case 12:$turno="Noche";break;
        case 13:$turno="Mañana";break;
        case 14:$turno="Tarde";break;
        default:$turno="Noche";break;
    
    
    }
    return $turno;
    }
    
    
?>