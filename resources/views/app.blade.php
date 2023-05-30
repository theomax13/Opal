<!DOCTYPE html>
<html lang="fr">

<head>
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-language" content="fr-FR" />
	<meta http-equiv="X-UA-Compatible" content="IE=8" />
	<meta name="language" content="fr-FR" />
	<meta name="description" content="{{env('APP_MENUNAME', 'Nom Applicatif')}}" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/dc30cb76a3.js" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<title>{{env('APP_MENUNAME', 'Nom Applicatif')}}</title>

	@vite('resources/js/app.js')
</head>

<body>
	@stack('scripts')

	<div id="app" style="background-color: #fff1dc;">
		<component-header></component-header>
		<home></home>
		{{-- <evenement></evenement> --}}

		<component-footer></component-footer>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


	<script>
	</script>
	<!-- Injection des scripts utilisateurs dans le stack via la directive push('scripts') -->
	
</body>

</html>