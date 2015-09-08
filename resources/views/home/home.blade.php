@extends('layouts.player')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-3">
			<div class="stat green-stat">
				<div class="col-xs-3">
					<div class="total-stat">4</div>
				</div>
				<div class="col-xs-9">
					<div class="chart-stat" id="missions-stat"></div>
				</div>
				<div class="col-xs-12">
					<div class="title-stat text-center">Misiones Hoy</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<div class="stat purple-stat">
				<div class="col-xs-3">
					<div class="total-stat">150</div>
				</div>
				<div class="col-xs-9">
					<div class="chart-stat" id="points-stat"></div>
				</div>
				<div class="col-xs-12">
					<div class="title-stat text-center">Puntos Hoy</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<div class="stat orange-stat">
				<div class="col-xs-3">
					<div class="total-stat">2</div>
				</div>
				<div class="col-xs-9">
					<div class="chart-stat" id="trophies-stat"></div>
				</div>
				<div class="col-xs-12">
					<div class="title-stat text-center">Total Trofeos</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<div class="stat blue-stat">
				<div class="col-xs-3">
					<div class="total-stat">9</div>
				</div>
				<div class="col-xs-9">
					<div class="chart-stat" id="badges-stat"></div>
				</div>
				<div class="col-xs-12">
					<div class="title-stat text-center">Total Medallas</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-md-6"></div>
		<div class="col-xs-12 col-md-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="chart-title">Misiones</div>
				</div>
				<div class="list-group">
					<a href="#" class="list-group-item">
						<div class="col-xs-3">
							<img src="../../resources/assets/img/users/default.png" class="img img-responsive">
						</div>
						<div class="col-xs-9">
							<div class="mission-title">Misión</div>
							<div class="mission-desc">Descripción de lo que debe realizarse para completar la misión</div>
							<div class="row mission-progress">
								<div class="col-xs-9">
									<div class="progress">
										<div class="progress-bar progress-bar-default" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="mission-percent">40 %</div>
								</div>
							</div>
						</div>
					</a>
					<a href="#" class="list-group-item">
						<div class="col-xs-3">
							<img src="../../resources/assets/img/users/default.png" class="img img-responsive">
						</div>
						<div class="col-xs-9">
							<div class="mission-title">Misión</div>
							<div class="mission-desc">Descripción de lo que debe realizarse para completar la misión</div>
							<div class="row mission-progress">
								<div class="col-xs-9">
									<div class="progress">
										<div class="progress-bar progress-bar-default" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="mission-percent">80 %</div>
								</div>
							</div>
						</div>
					</a>
					<a href="#" class="list-group-item">
						<div class="col-xs-3">
							<img src="../../resources/assets/img/users/default.png" class="img img-responsive">
						</div>
						<div class="col-xs-9">
							<div class="mission-title">Misión</div>
							<div class="mission-desc">Descripción de lo que debe realizarse para completar la misión</div>
							<div class="row mission-progress">
								<div class="col-xs-9">
									<div class="progress">
										<div class="progress-bar progress-bar-default" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="mission-percent">60 %</div>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="chart-title">Tabla de Líderes</div>
					<div class="row">
						<div class="col-xs-12 col-md-8">
							<div class="chart top-chart" id="top-players"></div>
						</div>
						<div class="col-xs-12 col-md-4" id="top-players-table"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('../resources/assets/js/flot/jquery.flot.min.js') }}"></script>
<script src="{{ asset('../resources/assets/js/playerCharts.js') }}"></script>
@endsection
