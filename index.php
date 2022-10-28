<!DOCTYPE html>
<html>
	<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akshar:wght@300&family=Lato&family=Macondo&family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/stilosp.css">
    <title>generador web</title>
	</head>
	<body>
		<div class="container" style="margin-bottom: 20px;">
			<div class="">
				<div class="">
					<form
					 class="formu"
					 method="post"
					 action="generador.php">
						<h1>Constructor de pag</h1>

						<div class="contenedor-formu">
							<div class="divlabel">
								<label for="selec" >Seleccione la plantilla que necesita</label>
								<select name="selec">
									<option value="pag1">1</option>
									<option value="pag2">2</option>
								</select>
							</div>
							<br>
							<input type="text"
							name= "titulo"
							class= "put1"
							placeholder= "ingresa el titulo">
							<br>
							<input type="text"
							name= "titulop"
							class= "put2"
							placeholder= "ingresa el titulo del encabezado">
							<br>
							<input type="text"
							name= "titulocard"
							class= "put3"
							placeholder= "ingresa el titulo de la tarjeta">
							<br>
							<input type="text"
							name= "parrafocard"
							class= "put4"
							placeholder= "ingresa el contenido de la tarjeta">
						</div>
						<br>
						<button
						 type="submit">
							GENERAR
						</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
















