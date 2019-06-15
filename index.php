<!DOCTYPE html>
<html lang="es-Mx">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="description" content="Web Page">
  	<meta name="keywords" content="shifra,shifraspa,shifraspaandares,spa,spa andares,medical center,masajes,tratamientos,spa guadalajara,spa andares">
  	<meta name="author" content="emanuel">
	<title>conekta</title>
	<!------------------------------------------------------
	-
	-- conekta
	-
	-------------------------------------------------------->
	<script type="text/javascript" src="https://cdn.conekta.io/js/latest/conekta.js"></script>
	<!------------------------------------------------------
	-
	-- jQuery
	-
	-------------------------------------------------------->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<!------------------------------------------------------
	-
	-- bootstrap
	-
	-------------------------------------------------------->

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" >

	<!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js"></script>

	<!------------------------------------------------------
	-
	-- font -awesome
	-
	-------------------------------------------------------->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>

	<form id="card-form">

		<div class="card">
			<div class="card-header">
				<div class="row display-tr">
					<h3> Pago en Línea</h3>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<label>
							Nombre del tarjetahabiente
						</label>
						<input value="emanuel arias" data-conekta="card[name]" type="text" name="name" id="name" class="form-control">
					</div>
				</div>
				<div class="row">

					<div class="col-md-6">

						<label>
							Número de targeta
						</label>
						<input value="4242424242424242" data-conekta="card[number]" type="text" class="form-control" maxlength="16">
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<label>
							CVC
						</label>
						<input value="390" data-conekta="card[cvc]" type="text" class="form-control" maxlength="4">
					</div>
				</div>
				<div class="row">

					<div class="col-md-6">

						<label>
							Fecha de expiración (MM/AA)
						</label>
						<input style="width: 50px; display: inline-block;" value="11" data-conekta="card[exp_month]" type="text" class="form-control" maxlength="2">

						<input style="width: 50px; display: inline-block;" value="20" data-conekta="card[exp_year]" type="text" class="form-control" maxlength="2">
					</div>
				</div>
				<div class="row">
					<button class="btn btn-success btn-lg">
						<i class="fa fa-check-square"></i> PAGAR
					</button>
				</div>
			</div>
		</div>

	</form>

</body>
</html>