<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<?php
function ejecuta_consulta($labusqueda){

    require("./php/datosConexion.php");
    

    //Mediante PROCEDIMIENTOS
    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra);
    if(mysqli_connect_errno()){
        echo "Fallo al conecta con la base de datos";
        exit();
    }
    mysqli_select_db($conexion,$db_nombre) or die("no se encuentra la base de datos");
    mysqli_set_charset($conexion,"utf8" );
    

    $consulta="Select * FROM artículos WHERE NOMBRE_ARTÍCULO LIKE'%$labusqueda%'";
    $resultados=mysqli_query($conexion,$consulta);

    while($fila=mysqli_fetch_array($resultados, MYSQLI_ASSOC)){
        echo "<table whith'50%' align='center' border='1px' ><td><td>";

        echo $fila['SECCIÓN']."</td><td>";
        echo $fila['NOMBRE_ARTÍCULO']."</td><td>";
        echo $fila['PAÍS_DE_ORIGEN']."</td><td></tr></table>";
    }
}  
 ?>
</head>
<body>
    <?php
    $mibusqueda=$_GET["buscar"];
    $mipag=$_SERVER["PHP_SELF"];
    if($mibusqueda!=null){
        ejecuta_consulta($mibusqueda);
    }else{
        echo("<form action=''".$mipag."' method='get'>
        <label>Bucar:<input type='text' name='buscar'/></label>
        <input type='submit' name='enviando'value='DALE!'/>
        </form>");
    }
    ?>
    
</body>
</html>