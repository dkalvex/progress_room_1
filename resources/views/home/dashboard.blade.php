@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-9">
			<div class="row">
				<div class="col-xs-6 col-sm-3">
					<div class="stat green-stat">
						<div class="title-stat">Puntos Distribuidos</div>
						<div class="col-xs-4">
							<div class="total-stat">2.560</div>
						</div>
						<div class="col-xs-8">
							<div class="chart-stat" id="green-stat"></div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="stat blue-stat">
						<div class="title-stat">Número de Visitas</div>
						<div class="col-xs-4">
							<!-- Consulta para visitas en últimos 30 días: SELECT SUM(id) FROM logs WHERE action_id = 1 AND created_at > (CURDATE() - INTERVAL 30 DAY) -->
							<div class="total-stat">1.354</div>
						</div>
						<div class="col-xs-8">
							<!-- Consulta para visitas diarias para gráfica: SELECT SUM(id), DATE(created_at) FROM logs WHERE action_id = 1 AND created_at > (CURDATE() - INTERVAL 30 DAY) GROUP BY DATE(created_at) LIMIT 10-->
							<div class="chart-stat" id="blue-stat"></div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="stat purple-stat">
						<div class="title-stat">Desempeño General</div>
						<div class="col-xs-4">
							<div class="total-stat">78%</div>
						</div>
						<div class="col-xs-8">
							<div class="chart-stat" id="purple-stat"></div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-3">
					<div class="stat pink-stat">
						<div class="title-stat">Porcentaje Redenciones</div>
						<div class="col-xs-4">
							<div class="total-stat">81%</div>
						</div>
						<div class="col-xs-8">
							<div class="chart-stat" id="pink-stat"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="chart-title">Distribución de acceso por hora</div>
							<!-- Consulta para datos de distribución por acceso: SELECT SUM(IF(TIME(created_at) >= '06:00:00' AND TIME(created_at) < '09:00:00', id, 0)) AS six, SUM(IF(TIME(created_at) >= '09:00:00' AND TIME(created_at) < '12:00:00', id, 0)) AS nine, SUM(IF(TIME(created_at) >= '12:00:00' AND TIME(created_at) < '15:00:00', id, 0)) AS twelve, SUM(IF(TIME(created_at) >= '15:00:00' AND TIME(created_at) < '18:00:00', id, 0)) AS fifteen, SUM(IF(TIME(created_at) >= '18:00:00' AND TIME(created_at) < '21:00:00', id, 0)) AS eighteen, SUM(IF(TIME(created_at) >= '21:00:00' AND TIME(created_at) < '24:00:00', id, 0)) AS twentyone FROM logs WHERE action_id = 1 AND created_at > (CURDATE() - INTERVAL 30 DAY) -->
							<div class="chart" id="access-chart"></div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="chart-title">Distribución de jugadores por liga</div>
							<div class="chart" id="league-chart"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="chart-title">Top 5 Jugadores</div>
							<div class="row">
								<div class="col-xs-12">
									<div class="chart top-chart" id="top-players"></div>
								</div>
								<div class="col-xs-12" id="top-players-table"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="chart-title">Top 5 Equipos</div>
							<div class="row">
								<div class="col-xs-12">
									<div class="chart top-chart" id="top-courses"></div>
								</div>
								<div class="col-xs-12" id="top-courses-table"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-3 timeline-container">
			<div class="chart-title text-center">Actividad Reciente</div>
			<div class="timeline-centered" id="timeline">
			@foreach (logFacade::getActivities() as $activitie)
				<article class="timeline-entry">
					<div class="timeline-entry-inner">
						<div class="timeline-icon bg-primary">
							<i class="fa fa-user"></i>
						</div>
						<div class="timeline-label"><h2><a href="#">{{ $activitie->first_name }} {{ $activitie->last_name }} </a><span>{{ $activitie->name }}</span></h2>
							<p>{{ $activitie->description }}</p>
						</div>
					</div>
				</article>
			@endforeach	
			</div>		
			<div class="text-center">
				<button class="btn btn-primary">Ver todo</button>
			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('../resources/assets/js/flot/jquery.flot.min.js') }}"></script>
<script src="{{ asset('../resources/assets/js/adminCharts.js') }}"></script>
<script>
$("#li-home").addClass("active");
</script>
@endsection