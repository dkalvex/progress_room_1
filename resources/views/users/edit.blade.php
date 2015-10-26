@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="page-title">
			<i class="fa fa-user-plus"></i> Nuevo Jugador
		</div>
	</div>
	
	<form  role="form" method="POST" action="{{ url('/users/editSave') }}" id="NewUser-form">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="id" value="{{ $user{0}->id }}">
		<div class="row">
			<div class="col-xs-12">
				@if(isset($errors) and count($errors) > 0)
				<div class='alert alert-warning'>
					@foreach ($errors as $error)						
					<ul>;
						<li> {{ $error }} </li>
					</ul>
					@endforeach
				</div>
				@endif

				@if(isset($message) and count($message) > 0)
				<div class='alert alert-success'>
					@foreach ($message as $messag)						
					<ul>
						<li> {{ $messag }} </li>
					</ul>
					@endforeach
				</div>
				@endif
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="chart-title">Información General</div>
						<form action="#" method="post" class="panel-form">
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="email">Correo electrónico</label>
									<input type="email" class="form-control" value="{{$user{0}->email}}" name="email" id="email" required>
								</div>
								<div class="form-group">
									<label for="first_name">Nombres</label>
									<input type="text" class="form-control" value="{{$user{0}->first_name}}" name="first_name" id="first_name" required>
								</div>
								<div class="form-group">
									<label for="last_name">Apellidos</label>
									<input type="text" class="form-control" value="{{$user{0}->last_name}}" name="last_name" id="last_name" required>
								</div>
								<div class="form-group">
									<label for="email">Nomre de usuario</label>
									<input type="text" class="form-control" value="{{$user{0}->username}}" name="userName" id="userName" required>
								</div>	
								<div class="form-group">
									<label for="team_id">Fecha Nacimiento</label>									
									<input type="text" class="form-control" value="{{$user{0}->birth_date}}" placeholder="dd/mm/aaaa" id="birth_date"  name="birth_date" required/>
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
									<label for="team_id">Equipo</label>									
									<select class="form-control" name="team_id" id="team_id">
										<option value="" selected>-Seleccione-</option>
										@foreach (userFacade::listTeams() as $team)
											@if($team->id = $user{0}->team)
											<option value="{{$team->id}}" selected> {{ $team->name }}</option>
											@else
											<option value="{{$team->id}}" > {{ $team->name }}</option>
											@endif										
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<label for="active">Estado</label>
									<select class="form-control" name="active" id="active">
										<option value="" selected>-Seleccione-</option>
										@if($user{0}->active)
										<option value="1" selected>Activo</option>
										<option value="0">Inactivo</option>
										@else
										<option value="1" >Activo</option>
										<option value="0" selected>Inactivo</option>
										@endif

									</select>
								</div>								
								<div class="form-group">
									<label for="active">Fecha Ingreso</label>
									<input type="text" class="form-control" value="{{$user{0}->entry_date}}" placeholder="dd/mm/aaaa" id="entry_date"  name="entry_date" required/>
								</div>
							</div>
							<div class="col-xs-12">
								<div class="form-group">
									<label for="role_id">Rol</label>
									<select class="form-control" name="role_id" id="role_id">
										<option value="" selected>-Seleccione-</option>										
										@foreach (userFacade::listRoles() as $rol)
											@if($rol->id == $user{0}->role_id)
											<option value="{{$rol->id}}" selected> {{ $rol->name }}</option>
											@else
											<option value="{{$rol->id}}"> {{ $rol->name }}</option>
											@endif											
										@endforeach
									</select>
								</div>
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