<?php
//Ejercicio 1
echo "Ejercicio 1<br>";
$nombre="Juan";
$edad="28";
if($edad>=18){
    echo $nombre." puede ingresar al evento<br><br>";
}else{
    echo $nombre." no puede ingresar al evento<br><br>";
}

//Ejercicio 2
echo "Ejercicio 2<br>";
$producto="Computador";
$cantidad=3;
if($cantidad>0){
    echo "El ".$producto." esta disponible<br><br>";
}else{
    echo "El ".$producto." esta agotado<br><br>";
}

//Ejercicio 3
echo "Ejercicio 3<br>";
$estudiante="David";
$nota=4.5;
if ($nota>=3.0){
    echo $estudiante." aprobado<br><br>";
} else{
    echo $estudiante." no aprobado<br><br>";
}

//Ejercicio 4
echo "Ejercicio 4<br>";
$cliente="Sebastian";
$compra=150000;
if($compra>=100000){
    $descuento=$compra*0.1;
    $final=$compra-$descuento;    
echo $cliente." como su compra es mayor a $100.000 tiene un descuento del 10%<br>"."Valor Original = ".$compra."<br>Descuento = ".$descuento."<br>Valor Final = ".$final."<br><br>";
} else{
    echo $cliente." su compra es por = ".$compra."<br><br>";
}

//Ejercicio 5
echo"Ejercicio 5<br>";
$usuario="admin";
$contrasena="1234";
if($usuario=="admin" && $contrasena=="1234"){
    echo "Acceso permitido<br><br>";
}else {
    echo "Acceso denegado<br><br>";
}

//Ejercicio 6
echo"Ejercicio 6<br>";
$anos=18;
$documento=true;
if($anos>=18 && $documento==true){
    echo"La persona puede ingresar<br><br>";
} else{
    echo"La persona no puede ingresar<br><br>";
}

//Ejercicio 7
echo"Ejercicio 7<br>";
$cliente="Juan";
$frecuente=true;
$valorcompra=190000;
if($frecuente==true || $valorcompra>200000){
    echo $cliente." cumple con una de las dos condiciones y puede tener la promoción<br><br>";
}else{
    echo $cliente." no puede tener la promocion<br><br>";
}

//Ejercicio 8
echo"Ejercicio 8<br>";
$numero=10;
var_dump($numero=="10"); echo"<br>";//Como es una comparacion simple me aparece verdadero ya que son iguales";
var_dump($numero==="10"); echo"<br><br>";//En la comparacion estricta me aparece falso ya que compara el tipo de datos que es y uno esta en INT y el otro en String


//Ejercicio 9
echo "Ejercicio 9<br>";
$username="jdmc";
$activo=true;
if($username="jdmc" && $activo==true){
    echo "Usuario activo<br><br>";
} else{
    echo "Usuario inactivo<br><br>";
}

//Ejercicio 10
echo "Ejercicio 10<br>";
$trabajador="Andres";
$cargo="Administrador";
$salario=3000001;
if ($salario>3000000){
    echo "El empleado : <br>"."Nombre : ".$trabajador."<br>Cargo : ".$cargo."<br>Salario : ".$salario. "<br>Salario superior al promedio";
} else{
    echo "El empleado : <br>"."Nombre : ".$trabajador."<br>Cargo : ".$cargo."<br>Salario : ".$salario. "<br>Salario dentro del rango esperado";
}
?>