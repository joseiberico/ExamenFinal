<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<title></title>
   

    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
	<div class="contenedor">
			<div class="formulario">
				<div class ="derecha">
					<div class="form">
					<div class="containerLogin">
						<div class="ingreso">
							<div class="title">
								<h1>Ingreso</h1>
							</div>
							<div class="contentUser primero" >													
								<input type="text" id="username" autocomplete="off" required class="ga">
								<label class="lbl-nombre">
									<span class="text_nomb">Nombre</span>
								</label>
							</div>
							<div class="contentUser segundo"> 							
								<input type="password" id="password" required class="ga" >
								<label class="lbl-nombre">
									<span class="text-nomb">Contraseña</span>
								</label>
							</div>			
						</div>
						<div style="padding:0 60px 0 60px ;">
						<a href="#" class="btn-neon" id="btnLogin">
							<span id="span1"></span>
							<span id="span2"></span>
							<span id="span3"></span>
							<span id="span4"></span>
							INGRESAR
						</a>
						</div>
					</div>
				</div>
				</div>
				<div class="izquierda">	
					<div class="content">																
						<h1>WELCOME!</h1>
						<span>_________</span>
					</div>		
					<h2>Tecnoventas</h2>		
				</div>
				
			</div>
	</div>
 

    <!-- Sweetalert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/disableautofill/src/jquery.disableAutoFill.min.js"></script>

    <script src="assets/js/login.js"></script>
</body>
</html>