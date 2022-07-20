<?php

    //$busqueda=$_GET["busqueda"];
    require("datosConexion.php");
    

    //Mediante PROCEDIMIENTOS
    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);
    $variable=mysqli_real_escape_string($conexion,"MACETAASo'or'1'='1'");
    echo $variable;



    if(mysqli_connect_errno()){
        echo "Fallo al conecta con la base de datos";
        exit();
    }
    mysqli_select_db($conexion,$db_nombre) or die("no se encuentra la base de datos");
    mysqli_set_charset($conexion,"utf8" );
    //iNSERTAR REGISTRO
    //$consulta="INSERT INTO artículos (SECCIÓN,NOMBRE_ARTÍCULO) VALUES('DEPORTES','RAQUTA')";
    //+++++++++++++++++
    //ELIMINAR REGISTRO
    //$consulta="DELETE FROM artículos WHERE NOMBRE_ARTÍCULO='Cenicero' ";
    //+++++++++++++++++
    //Update registro
    $consulta="UPDATE artículos SET NOMBRE_ARTÍCULO='MACETAASopaa',PAÍS_DE_ORIGEN='SE CASA' WHERE NOMBRE_ARTÍCULO='$variable'";  
    $resultados=mysqli_query($conexion,$consulta);
    if(mysqli_affected_rows($conexion)>0){
        echo "Baja procesada";
    }
    else{
        echo "no se ha encontra el usuaior"; 
    }

    // if($resultados==false){
    //     echo "error en la consiulta";
    // }
    // else{
    //     if(mysqli_affected_rows($conexion)==0){
    //         echo "no exite el elemento a elimnar";
            
    //     }
    //     else{
    //         echo "Resgistro eliminado";
    //     }
        
        
    // }


    mysqli_close($conexion);
    


    
    //Par consultas
    // $consulta="Select * FROM artículos WHERE NOMBRE_ARTÍCULO LIKE'%$busqueda%'";
    //$resultados=mysqli_query($conexion,$consulta);



    // while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){
    //     echo "<table whith'50%' align='center' border='1px' ><td><td>";

    //     echo $fila['SECCIÓN']."</td><td>";
    //     echo $fila['NOMBRE_ARTÍCULO']."</td><td>";
    //     echo $fila['PAÍS_DE_ORIGEN']."</td><td></tr></table>";
    // }
    //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  
 ?>