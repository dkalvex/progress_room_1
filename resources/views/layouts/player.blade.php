<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Play & Progress</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<link href='//fonts.googleapis.com/css?family=Lato:400' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	@yield('styles')
</head>
<body>
	<div id="wrapper">
		<nav class="navbar navbar-fixed-top" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="http://www.ludum.co" target="_blank">Play & Progress</a>
			</div>
			<ul class="nav navbar-right top-nav">
				<li class="dropdown" id="user-alerts">
					<a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
						<i class="glyphicon glyphicon-bell"></i>
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu alert-dropdown" id="alert-dropdown"></ul>
				</li>
				<li class="dropdown" id="user-profile">
					<a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
						<img src="{{ asset('../resources/assets/img/users') }}/{{ \Session::get('user.photo') }}" class="photo-profile">						
						{{ \Session::get('user.first_name') }} {{ \Session::get('user.last_name') }}
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li><a href="{{ url('/profile') }}"><i class="glyphicon glyphicon-user"></i> Perfil</a></li>
						<li class="divider"></li>
						<li><a href="{{ url('/logout') }}"><i class="glyphicon glyphicon-off"></i> Cerrar Sesión</a></li>
					</ul>
				</li>
			</ul>
			<div class="collapse navbar-collapse sidebar">
				<ul class="nav navbar-nav side-nav">
					<li class="sidebar-progress">
						<div class="col-xs-6">
							<img src="{{ asset('../resources/assets/img/leagues/') }}/level-{{ \Session::get('user.level_id') }}.png" class="img img-responsive">
						</div>
						<div class="col-xs-6">
							<h4>Novato</h4>
							<span>{{ \Session::get('user.actual_points') }} ptos</span>
							<div class="progress">
								<div class="progress-bar progress-bar-default" role="progressbar" aria-valuenow="4{{ \Session::get('user.actual_points') }}" aria-valuemin="0" aria-valuemax="100" style="width: 4{{ \Session::get('user.actual_points') }}%"></div>
							</div>
						</div>
					</li>
					<li id="li-home">
						<a href="{{ url('/') }}">
							<i class="fa fa-home"></i>
							<span class="sidebar-link">Inicio</span>
						</a>
					</li>
					<li id="li-missions">
						<a href="{{ url('/') }}">
							<i class="fa fa-rocket"></i>
							<span class="sidebar-link">Misiones</span>
						</a>
					</li>
					<li id="li-events">
						<a href="{{ url('/') }}">
							<i class="fa fa-calendar"></i>
							<span class="sidebar-link">Eventos</span>
						</a>
					</li>
					<li id="li-tournaments">
						<a href="{{ url('/') }}">
							<i class="fa fa-trophy"></i>
							<span class="sidebar-link">Torneos</span>
						</a>
					</li>
					<li id="li-courses">
						<a href="{{ url('/') }}">
							<i class="fa fa-graduation-cap"></i>
							<span class="sidebar-link">Cursos</span>
						</a>
					</li>
					<li id="li-opportunities">
						<a href="{{ url('/') }}">
							<i class="fa fa-institution"></i>
							<span class="sidebar-link">Oportunidades</span>
						</a>
					</li>
				</ul>
			</div>
		</nav>
		<div id="page-wrapper">
			@yield('content')	
		</div>
	</div>
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	@yield('scripts')
</body>
</html>
