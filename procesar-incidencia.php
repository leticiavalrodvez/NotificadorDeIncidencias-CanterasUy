<?php

$u = $_POST["user"];
$dep = $_POST["depart"];
$des = $_POST["descripcion"];
$pass = $_POST["pass"];

echo "Datos Ingresados" ; 

?>


<html>
    <head><title>procesar-incidencia-html</title></head>
    <body>
        <ul>
            <li>
                <?php
                    echo $u;
                ?>
            </li>
            <li>
                <?php
                    echo $dep;
                ?>
            </li>
            <li>
                <?php  
                    echo $des;
                ?>
            </li>
            <li>
                <?php                  
                    echo $pass;
                ?>
            </li>
        </ul>
    </body>

</html>