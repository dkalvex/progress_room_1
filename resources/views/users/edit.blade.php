@extends('layouts.admin')

@section('styles')
	<link href="{{ asset('../resources/assets/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-md-8">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-xs-12">
						<div class="chart-title">Información General</div>
						<form role="form" method="POST" action="{{ url('/users/editSave') }}" id="NewUser-form" class="form-horizontal">
							<div class="form-group">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">

								@if(isset($errors) and count($errors) > 0)
								<div class='alert alert-warning'>
									@foreach ($errors as $error)						
									<ul>
										<li> {{ $error }} </li>
									</ul>
									@endforeach
								</div>
								@endif

								@if(isset($message) and count($message) > 0)
								<div class='alert alert-success'>
									@foreach ($message as $message)						
									<ul>
										<li> {{ $message }} </li>
									</ul>
									@endforeach
								</div>
								@endif
							</div>
							<div class="form-group">
								<label for="email" class="col-xs-12 col-md-4">Correo electrónico</label>
								<div class="col-xs-12 col-md-8">
									<input type="email" class="form-control" value="{{$user{0}->email}}" name="email" id="email" required>
									<div id="error_email" class="label label-danger"></div>
								</div>
							</div>
							<div class="form-group">
								<label for="first_name" class="col-xs-12 col-md-4">Nombres</label>
								<div class="col-xs-12 col-md-8">
									<input type="text" class="form-control" value="{{$user{0}->first_name}}" name="first_name" id="first_name" required>
								</div>
							</div>
							<div class="form-group">
								<label for="last_name" class="col-xs-12 col-md-4">Apellidos</label>
								<div class="col-xs-12 col-md-8">
									<input type="text" class="form-control" value="{{$user{0}->last_name}}" name="last_name" id="last_name" required>
								</div>
							</div>
							<div class="form-group">
								<label for="userName" class="col-xs-12 col-md-4">Nombre de usuario</label>
								<div class="col-xs-12 col-md-8">
									<input type="text" class="form-control" value="{{$user{0}->username}}" name="userName" id="userName" required>
								</div>
							</div>
							<div class="form-group">
								<label for="birth_date" class="col-xs-12 col-md-4">Fecha Nacimiento</label>									
								<div class="col-xs-12 col-md-8">
									<div class="input-group date">
										<input type="text" class="form-control" value="{{$user{0}->birth_date}}" placeholder="yyyy-mm-dd" id="birth_date"  name="birth_date" required/>
										<span class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="entry_date" class="col-xs-12 col-md-4">Fecha Ingreso</label>
								<div class="col-xs-12 col-md-8">
									<div class="input-group date">
										<input type="text" class="form-control" value="{{$user{0}->entry_date}}" placeholder="yyyy-mm-dd" id="entry_date"  name="entry_date" required/>
										<span class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="team_id" class="col-xs-12 col-md-4">Equipo</label>
								<div class="col-xs-12 col-md-8">
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
							</div>
							<div class="form-group">
								<label for="active" class="col-xs-12 col-md-4">Estado</label>
								<div class="col-xs-12 col-md-8">
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
							</div>
							<div class="form-group">
								<label for="role_id" class="col-xs-12 col-md-4">Rol</label>
								<div class="col-xs-12 col-md-8">
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
							</div>
							<div class="form-group">
								<div class="text-center">
									<button id="guardar" class="btn btn-primary btn-full">Guardar</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-4">
			<div class="panel panel-primary-fill">
				<div class="panel-body">
					<div class="chart-title">Novato</div>
					<div class="row">
						<div class="col-xs-6 col-xs-offset-3">
							<img src="{{ asset('../resources/assets/img/users/') }}/default.png" class="img img-responsive img-circle" style="margin: 0 auto 10px;" width="100">
						</div>
					</div>
					<div class="text-center">
						<p>0 ptos</p>
					</div>
					<div class="text-center">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut finibus ex, id rutrum urna. Morbi lorem quam, varius at finibus vitae, ornare in lacus. Ut hendrerit nisl in metus iaculis, id luctus mi rhoncus. In malesuada purus eu sem venenatis, a faucibus ante mollis.</p>
						<p>Vestibulum gravida non velit eu mattis. Donec interdum sit amet justo quis luctus. Etiam nec blandit eros, non pretium neque. Phasellus ut aliquet lorem. Sed sit amet consequat diam. Morbi accumsan interdum hendrerit.</p>
					</div>
					<div class="text-center">
						<div class="col-xs-6"><i class="fa fa-facebook"></i> #usuario</div>
						<div class="col-xs-6"><i class="fa fa-twitter"></i> @usuario</div>
						<div class="col-xs-6"><i class="fa fa-linkedin"></i> #usuario</div>
						<div class="col-xs-6"><i class="fa fa-google-plus"></i> #usuario</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('../resources/assets/js/validations.js') }}"></script>
<script src="{{ asset('../resources/assets/js/bootstrap-datepicker.min.js') }}"></script>
<script>
	$("#li-players").addClass("active");
	$('.date').datepicker({
        format: "yyyy-mm-dd",
        todayBtn: "linked",
        language: "es",
        daysOfWeekDisabled: "0,6",
        autoclose: true,
        todayHighlight: true
    });
</script>
@endsection