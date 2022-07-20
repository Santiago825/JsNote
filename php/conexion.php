<?php
    require("datosConexion.php");

    //Mediante PROCEDIMIENTOS
    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);
    if(mysqli_connect_errno()){
        echo "Fallo al conecta con la base de datos";
        exit();
    }
    mysqli_select_db($conexion,$db_nombre) or die("no se encuentra la base de datos");
    mysqli_set_charset($conexion,"utf8" );
    

    $consulta="Select * FROM artículos WHERE NOMBRE_ARTÍCULO LIKE 'BALON%'";
    $resultados=mysqli_query($conexion,$consulta);

    while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){
        echo "<table whith'50%' align='center' border='1px' ><td><td>";

        echo $fila['SECCIÓN']."</td><td>";
        echo $fila['NOMBRE_ARTÍCULO']."</td><td>";
        echo $fila['PAÍS_DE_ORIGEN']."</td><td></tr></table>";
    }
 
    


