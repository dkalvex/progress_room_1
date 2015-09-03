@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="page-title">
			<i class="fa fa-users"></i> Jugadores
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-3">
			<div class="stat green-stat">
				<div class="col-xs-3">
					<div class="total-stat">18</div>
					<div class="title-stat">Visitas</div>
				</div>
				<div class="col-xs-9">
					<div class="chart-stat" id="access-stat"></div>
				</div>
				<div class="col-xs-12">
					<div class="footer-stat">
						<a href="/">Ver detalles</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<div class="stat purple-stat">
				<div class="col-xs-3">
					<div class="total-stat">2</div>
					<div class="title-stat">Nuevos</div>
				</div>
				<div class="col-xs-9">
					<div class="chart-stat" id="new-stat"></div>
				</div>
				<div class="col-xs-12">
					<div class="footer-stat">
						<a href="/">Ver detalles</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<div class="stat orange-stat">
				<div class="col-xs-3">
					<div class="total-stat">1750</div>
					<div class="title-stat">Puntos</div>
				</div>
				<div class="col-xs-9">
					<div class="chart-stat" id="points-stat"></div>
				</div>
				<div class="col-xs-12">
					<div class="footer-stat">
						<a href="/">Ver detalles</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<div class="stat blue-stat">
				<div class="col-xs-3">
					<div class="total-stat">6</div>
					<div class="title-stat">Redenciones</div>
				</div>
				<div class="col-xs-9">
					<div class="chart-stat" id="redemptions-stat"></div>
				</div>
				<div class="col-xs-12">
					<div class="footer-stat">
						<a href="/">Ver detalles</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<button class="btn btn-default">Agregar</button>
	</div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('../resources/assets/js/flot/jquery.flot.min.js') }}"></script>
<script src="{{ asset('../resources/assets/js/playerStats.js') }}"></script>
@endsection