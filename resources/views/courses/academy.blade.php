@extends('layouts.player')

@section('styles')

@endsection
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12">
			<div class="course-search-container">
				<form class="form" role="form">
					<div class="form-group">
						<label for="search" class="control-label col-xs-12 col-sm-6 col-md-2">¿Qué deseas aprender?</label>
						<div class="col-xs-12 col-sm-6 col-md-4">
							<input type="search" class="form-control" id="search" name="search">
						</div>
					</div>
					<div class="form-group">
						<label for="topic" class="control-label col-xs-12 col-sm-6 col-md-2">Tema de interés</label>
						<div class="col-xs-12 col-sm-6 col-md-2">
							<select class="form-control" id="topic" name="topic">
								<option value="0">Todos</option>
								<option value="1">Ofimática</option>
								<option value="2">Idiomas</option>
								<option value="3">Tecnología</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-12 col-md-2">
							<button class="btn btn-primary btn-full">Buscar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-6 col-sm-4 col-md-3">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-xs-12">
						<center><img class="img img-responsive" src="{{ asset('../resources/assets/img/courses') }}/default.png"></img></center>
					</div>
					<div class="col-xs-12 course-details">
						<h4>Nombre del curso</h4>
						<p>Descripción general del curso para indicar cuáles van a ser los conocimientos adquiridos por el jugador</p>
						<div class="course-info">
							<div style="float: left">40 horas</div>
							<div style="float: right">250 ptos</div>
						</div>
						<button class="btn btn-info btn-half">Detalles</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-4 col-md-3">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-xs-12">
						<center><img class="img img-responsive" src="{{ asset('../resources/assets/img/courses') }}/default.png"></img></center>
					</div>
					<div class="col-xs-12 course-details">
						<h4>Nombre del curso</h4>
						<p>Descripción general del curso para indicar cuáles van a ser los conocimientos adquiridos por el jugador</p>
						<div class="course-info">
							<div style="float: left">40 horas</div>
							<div style="float: right">250 ptos</div>
						</div>
						<button class="btn btn-info btn-half">Detalles</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-4 col-md-3">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-xs-12">
						<center><img class="img img-responsive" src="{{ asset('../resources/assets/img/courses') }}/default.png"></img></center>
					</div>
					<div class="col-xs-12 course-details">
						<h4>Nombre del curso</h4>
						<p>Descripción general del curso para indicar cuáles van a ser los conocimientos adquiridos por el jugador</p>
						<div class="course-info">
							<div style="float: left">40 horas</div>
							<div style="float: right">250 ptos</div>
						</div>
						<button class="btn btn-info btn-half">Detalles</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-4 col-md-3">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-xs-12">
						<center><img class="img img-responsive" src="{{ asset('../resources/assets/img/courses') }}/default.png"></img></center>
					</div>
					<div class="col-xs-12 course-details">
						<h4>Nombre del curso</h4>
						<p>Descripción general del curso para indicar cuáles van a ser los conocimientos adquiridos por el jugador</p>
						<div class="course-info">
							<div style="float: left">40 horas</div>
							<div style="float: right">250 ptos</div>
						</div>
						<button class="btn btn-info btn-half">Detalles</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-4 col-md-3">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-xs-12">
						<center><img class="img img-responsive" src="{{ asset('../resources/assets/img/courses') }}/default.png"></img></center>
					</div>
					<div class="col-xs-12 course-details">
						<h4>Nombre del curso</h4>
						<p>Descripción general del curso para indicar cuáles van a ser los conocimientos adquiridos por el jugador</p>
						<div class="course-info">
							<div style="float: left">40 horas</div>
							<div style="float: right">250 ptos</div>
						</div>
						<button class="btn btn-info btn-half">Detalles</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-4 col-md-3">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-xs-12">
						<center><img class="img img-responsive" src="{{ asset('../resources/assets/img/courses') }}/default.png"></img></center>
					</div>
					<div class="col-xs-12 course-details">
						<h4>Nombre del curso</h4>
						<p>Descripción general del curso para indicar cuáles van a ser los conocimientos adquiridos por el jugador</p>
						<div class="course-info">
							<div style="float: left">40 horas</div>
							<div style="float: right">250 ptos</div>
						</div>
						<button class="btn btn-info btn-half">Detalles</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-4 col-md-3">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-xs-12">
						<center><img class="img img-responsive" src="{{ asset('../resources/assets/img/courses') }}/default.png"></img></center>
					</div>
					<div class="col-xs-12 course-details">
						<h4>Nombre del curso</h4>
						<p>Descripción general del curso para indicar cuáles van a ser los conocimientos adquiridos por el jugador</p>
						<div class="course-info">
							<div style="float: left">40 horas</div>
							<div style="float: right">250 ptos</div>
						</div>
						<button class="btn btn-info btn-half">Detalles</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-4 col-md-3">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-xs-12">
						<center><img class="img img-responsive" src="{{ asset('../resources/assets/img/courses') }}/default.png"></img></center>
					</div>
					<div class="col-xs-12 course-details">
						<h4>Nombre del curso</h4>
						<p>Descripción general del curso para indicar cuáles van a ser los conocimientos adquiridos por el jugador</p>
						<div class="course-info">
							<div style="float: left">40 horas</div>
							<div style="float: right">250 ptos</div>
						</div>
						<button class="btn btn-info btn-half">Detalles</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-4 col-md-3">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-xs-12">
						<center><img class="img img-responsive" src="{{ asset('../resources/assets/img/courses') }}/default.png"></img></center>
					</div>
					<div class="col-xs-12 course-details">
						<h4>Nombre del curso</h4>
						<p>Descripción general del curso para indicar cuáles van a ser los conocimientos adquiridos por el jugador</p>
						<div class="course-info">
							<div style="float: left">40 horas</div>
							<div style="float: right">250 ptos</div>
						</div>
						<button class="btn btn-info btn-half">Detalles</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-4 col-md-3">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-xs-12">
						<center><img class="img img-responsive" src="{{ asset('../resources/assets/img/courses') }}/default.png"></img></center>
					</div>
					<div class="col-xs-12 course-details">
						<h4>Nombre del curso</h4>
						<p>Descripción general del curso para indicar cuáles van a ser los conocimientos adquiridos por el jugador</p>
						<div class="course-info">
							<div style="float: left">40 horas</div>
							<div style="float: right">250 ptos</div>
						</div>
						<button class="btn btn-info btn-half">Detalles</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-4 col-md-3">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-xs-12">
						<center><img class="img img-responsive" src="{{ asset('../resources/assets/img/courses') }}/default.png"></img></center>
					</div>
					<div class="col-xs-12 course-details">
						<h4>Nombre del curso</h4>
						<p>Descripción general del curso para indicar cuáles van a ser los conocimientos adquiridos por el jugador</p>
						<div class="course-info">
							<div style="float: left">40 horas</div>
							<div style="float: right">250 ptos</div>
						</div>
						<button class="btn btn-info btn-half">Detalles</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-4 col-md-3">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-xs-12">
						<center><img class="img img-responsive" src="{{ asset('../resources/assets/img/courses') }}/default.png"></img></center>
					</div>
					<div class="col-xs-12 course-details">
						<h4>Nombre del curso</h4>
						<p>Descripción general del curso para indicar cuáles van a ser los conocimientos adquiridos por el jugador</p>
						<div class="course-info">
							<div style="float: left">40 horas</div>
							<div style="float: right">250 ptos</div>
						</div>
						<button class="btn btn-info btn-half">Detalles</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-4 col-md-3">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-xs-12">
						<center><img class="img img-responsive" src="{{ asset('../resources/assets/img/courses') }}/default.png"></img></center>
					</div>
					<div class="col-xs-12 course-details">
						<h4>Nombre del curso</h4>
						<p>Descripción general del curso para indicar cuáles van a ser los conocimientos adquiridos por el jugador</p>
						<div class="course-info">
							<div style="float: left">40 horas</div>
							<div style="float: right">250 ptos</div>
						</div>
						<button class="btn btn-info btn-half">Detalles</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-4 col-md-3">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-xs-12">
						<center><img class="img img-responsive" src="{{ asset('../resources/assets/img/courses') }}/default.png"></img></center>
					</div>
					<div class="col-xs-12 course-details">
						<h4>Nombre del curso</h4>
						<p>Descripción general del curso para indicar cuáles van a ser los conocimientos adquiridos por el jugador</p>
						<div class="course-info">
							<div style="float: left">40 horas</div>
							<div style="float: right">250 ptos</div>
						</div>
						<button class="btn btn-info btn-half">Detalles</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-4 col-md-3">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-xs-12">
						<center><img class="img img-responsive" src="{{ asset('../resources/assets/img/courses') }}/default.png"></img></center>
					</div>
					<div class="col-xs-12 course-details">
						<h4>Nombre del curso</h4>
						<p>Descripción general del curso para indicar cuáles van a ser los conocimientos adquiridos por el jugador</p>
						<div class="course-info">
							<div style="float: left">40 horas</div>
							<div style="float: right">250 ptos</div>
						</div>
						<button class="btn btn-info btn-half">Detalles</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-4 col-md-3">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-xs-12">
						<center><img class="img img-responsive" src="{{ asset('../resources/assets/img/courses') }}/default.png"></img></center>
					</div>
					<div class="col-xs-12 course-details">
						<h4>Nombre del curso</h4>
						<p>Descripción general del curso para indicar cuáles van a ser los conocimientos adquiridos por el jugador</p>
						<div class="course-info">
							<div style="float: left">40 horas</div>
							<div style="float: right">250 ptos</div>
						</div>
						<button class="btn btn-info btn-half">Detalles</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script>
	$("#li-courses").addClass("active");
</script>
@endsection
