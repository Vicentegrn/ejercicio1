<?php
$localidades=array(
    array("Alcazar de san juan"=>"13600","Herencia"=>"13640","Campo de criptana"=>"13610", "Pedro muñoz"=>"13620","Tomelloso"=>"13700","Argamasilla de alba"=>"13710"),
    array("Villafranca de los caballeros"=>"123","Madridejos"=>"321","Consuegra"=>"231","Camuñas"=>"312","Quintanar de la Orden"=>"45800"),
    array("Villarobledo"=>"111","La roda"=>"222","Hellin"=>"333","Minaya"=>"444"),
    array("San Clemente"=>"4567", "Mota del cuervo"=>"88","Las Pedroñeras"=>"99"),
    array("Guadalajara"=>"777","Azuquecar de Henares"=>"455454","Siguenza"=>"9008")
);
print_r(json_encode($localidades[$_GET["nprovincia"]]));