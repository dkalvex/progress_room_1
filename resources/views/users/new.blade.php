@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="page-title">
			<i class="fa fa-user-plus"></i> Nuevo Jugador
		</div>
	</div>
	<form  role="form" method="POST" action="{{ url('/users/newSave') }}" id="NewUser-form">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="row">
			<div class="col-xs-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="chart-title">Información General</div>
						<form action="#" method="post" class="panel-form">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="email">Correo electrónico</label>
									<input type="email" class="form-control" name="email" id="email" required>
								</div>
								<div class="form-group">
									<label for="first_name">Nombres</label>
									<input type="text" class="form-control" name="first_name" id="first_name" required>
								</div>
								<div class="form-group">
									<label for="last_name">Apellidos</label>
									<input type="text" class="form-control" name="last_name" id="last_name" required>
								</div>
								<div class="form-group">
									<label for="role">Rol</label>
									<select class="form-control" name="role" id="role">
										<option value="3" selected>Jugador</option>
										<option value="2">Administrador</option>
									</select>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<div class="col-xs-12">
										<img src="{{ asset('../resources/assets/img/leagues/') }}/level-0.png" class="img img-responsive img-center">
									</div>
								</div>
								<div class="form-group">
									<div class="text-center">
										<h2 style="margin-bottom: 0px">Novato</h2>
										<small>0 ptos</small>
									</div>
								</div>
								<div class="form-group">
									<label for="active">Equipo</label>
									<select class="form-control" name="team" id="team">
										<option value="0" selected>Ninguno</option>
									</select>
								</div>
								<div class="form-group">
									<label for="active">Estado</label>
									<select class="form-control" name="active" id="active">
										<option value="1" selected>Activo</option>
										<option value="0">Inactivo</option>
									</select>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="form-group">
									<div class="text-center">
										<button type="submit" class="btn btn-primary btn-full">Guardar</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
@endsection
@section('scripts')
<script>
$("#li-players").addClass("active");
</script>
@endsection