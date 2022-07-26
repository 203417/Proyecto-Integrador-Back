<?php
            $servidor = "localhost";
            $nombreusuario = "mroot";
            $password = "1234";
            $db = "pruebas";

            $conexion = new mysqli($servidor, $nombreusuario, $password, $db);        

            if($conexion->connect_error){

                die("Conexión fallida: " . $conexion->connect_error);

            }
            if(isset($_POST['temp'])){

                $temp = $_POST['temp'];
                $hum  = $_POST['hum'];
                $niv= $_POST["niv"];
                $hum_su = $_POST['hum_su'];
                

     $sql = "INSERT INTO datos(temp, hum, hums, nivel, fecha) values ('$temp','$hum','$hum_su','$niv',CURRENT_TIMESTAMP())";
                
                if($conexion->query($sql) === true){

                    echo '<div><form action=""><input type="checkbox">'.$texto.'</form></div>';

                }else{

                    die("Error al insertar datos: " . $conexion->error);

                }

                $conexion->close();

            }

//$temp= $_POST["temp"];
//$hum= $_POST["hum"];
//$niv= $_POST["niv"];
//$hum_su= $_POST["hum_su"];
//    echo "|la temperatura es de ".$temp;
//    echo "| la humedad es de ".$hum;
//    echo "| ".$niv;
//    echo "| la humedad del suelo es de: ".$hum_su;
//    echo "| ";
?>
