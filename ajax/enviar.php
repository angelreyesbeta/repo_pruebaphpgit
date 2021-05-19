<?php

/* $txtName=isset($_POST["txtName"])? limpiarCadena($_POST["txtName"]):"";  
$txtDate=isset($_POST["txtDate"])? limpiarCadena($_POST["txtDate"]):""; */
$txtName=$_POST["txtName"];  
$txtDate=$_POST["txtDate"];


switch ($_GET["op"])
{
    case 'enviar':

        $array=array();
        $array2=array();
        $auxi=0;
        $aux=0;
      

        $fechaNacimiento = new DateTime($txtDate);
        $fechaActual = new DateTime(date("Y-m-d"));
        $diferencia = $fechaActual->diff($fechaNacimiento);
        $edad=$diferencia->format("%y");
        $anioNacimiento=$fechaNacimiento->format("Y");
        $anioActual=$fechaActual->format("Y");
        
        for ($i=$anioNacimiento; $i<=$anioActual;$i++) {
            
            if($i%2!=0){

                $indice=$auxi;
                $array2[$indice]=$i;
                $auxi=$auxi+1;
            }             
        }
        for ($i=0; $i<=$edad;$i++) {

            if($i%2!=0){
                $posicion=$aux;
                $array[$posicion]=$i;
                $aux=$aux+1;
            }
        }
        
        $result=array(
            "name"=>$txtName,
            "edad"=>$edad,
            "anios"=>$array,
            "anios2"=>$array2
        );

    echo json_encode($result);
       
    break;

}


?>