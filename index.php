<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!------------------------------------------------------
	-
	-- font -awesome
	-
	-------------------------------------------------------->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>

	<h1> que hay aquí</h1>

	<form id="card-form">

		<div class="card">
			<div class="card-header">
				<div class="row display-tr">
					<h3> Pago en Linea</h3>
				</div>
			</div>
			<div class="col-md-6">
				<label>
					Nombre del tarjetahabiente
				</label>
				<input value="emanuel arias" data-conekta="card[name]" type="text" name="name" id="name" class="form-control">

				<label>
					Nombre del tarjetahabiente
				</label>
				<input value="321654987654987" data-conekta="card[number]" type="text" name="name" id="name" class="form-control">
			</div>
		</div>

	</form>

</body>
</html>