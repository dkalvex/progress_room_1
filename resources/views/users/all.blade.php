@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="page-title">
			<i class="fa fa-users"></i> Inicio
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-4">
			<div class="stat green-stat">
				<div class="title-stat">Promedio de acceso</div>
				<div class="col-xs-5">15</div>
				<div class="col-xs-7">
					<div class="chart-stat" id="access-stat"></div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-4"></div>
		<div class="col-xs-12 col-sm-4"></div>
	</div>
	<div class="row">
		<button class="btn btn-default">Agregar</button>
	</div>
</div>
@endsection
