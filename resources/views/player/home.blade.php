@extends('admin\layout')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="page-title">
			<i class="fa fa-home"></i> Inicio
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="chart-title">Jugadores Activos Última Semana</div>
					<div class="chart" id="daily-players"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-md-4">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="chart-title">Jugadores Activos</div>
					<div class="chart" id="active-players"></div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-4">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="chart-title">Cursos con Jugadores Activos</div>
					<div class="chart" id="active-courses"></div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-4">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="chart-title">Misiones con Jugadores Activos</div>
					<div class="chart" id="active-missions"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-md-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="chart-title">Top 5 Jugadores</div>
					<div class="row">
						<div class="col-xs-12 col-md-8">
							<div class="chart top-chart" id="top-players"></div>
						</div>
						<div class="col-xs-12 col-md-4" id="top-players-table"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="chart-title">Top 5 Cursos</div>
					<div class="row">
						<div class="col-xs-12 col-md-8">
							<div class="chart top-chart" id="top-courses"></div>
						</div>
						<div class="col-xs-12 col-md-4" id="top-courses-table"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
