@@extends('layouts.admin')

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
						<form role="form" method="POST" action="{{ url('/courses/editSave') }}" id="NewUser-form" class="form-horizontal">
							<div class="form-group">
								<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="calendar_id" id="calendar_id" value="{{$course{0}->calendar_id}}">
								<input type="hidden" name="course_id" id="course_id" value="{{$course{0}->id}}">
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
								<label for="name" class="col-xs-12 col-md-4">Nombre del curso</label>
								<div class="col-xs-12 col-md-8">
									<input type="text" value="{{$course{0}->name}}" class="form-control" name="name" id="name" required>
								</div>
							</div>
							<div class="form-group">
								<label for="description" class="col-xs-12 col-md-4">Descripción</label>
								<div class="col-xs-12 col-md-8">
									<input type="text" value="{{$course{0}->description}}" class="form-control" name="description" id="description" required>
								</div>
							</div>
							<div class="form-group">
								<label for="awarded_points" class="col-xs-12 col-md-4">Puntos de experiencia</label>
								<div class="col-xs-12 col-md-8">
									<input type="text" value="{{$course{0}->awarded_points}}" class="form-control" name="awarded_points" id="awarded_points" required>
								</div>
							</div>
							<div class="form-group">
								<label for="redeemable_points" class="col-xs-12 col-md-4">Puntos redimibles</label>
								<div class="col-xs-12 col-md-8">
									<input type="text" value="{{$course{0}->redeemable_points}}" class="form-control" name="redeemable_points" id="redeemable_points" required>
								</div>
							</div>
							<div class="form-group">
								<label for="begin_date" class="col-xs-12 col-md-4">Fecha inicio</label>									
								<div class="col-xs-12 col-md-8">
									<div class="input-group date">
										<input type="text" value="{{$course{0}->begin_date}}" class="form-control" placeholder="yyyy-mm-dd" id="begin_date"  name="begin_date" required/>
										<span class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="end_date" class="col-xs-12 col-md-4">Fecha fin</label>
								<div class="col-xs-12 col-md-8">
									<div class="input-group date">
										<input type="text" value="{{$course{0}->end_date}}" class="form-control" placeholder="yyyy-mm-dd" id="end_date"  name="end_date" required/>
										<span class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="team_id" class="col-xs-12 col-md-4">Icono del curso</label>
								<div class="col-xs-12 col-md-8">
									<select class="form-control" id="set_image" name="set_image" >
										<option value="" >-Seleccione-</option>										
										@foreach (courseFacade::getAllBadges() as $badge)
											@if($badge->id == $course{0}->badge_id)											
											<option  value="{{$badge->id}}" selected> {{ $badge->name }}</option>
											@else
											<option  value="{{$badge->id}}"> {{ $badge->name }}</option>
											@endif											
										@endforeach
									</select>
								</div>
							</div>	
							<div class="form-group">
								<div for="team_id" class="col-xs-12 col-md-4"></div>
								<div class="col-xs-12 col-md-8">
									<img id="ico_course"  class="img img-responsive img-circle" style="margin: 0 auto 10px;" width="100">
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
		<div class="col-xs-12 col-md-8">
			<div class='alert alert-success' id="alert_model" style="display:none">
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="course-title">Contenido</div>
					<button type="button" onClick="$('#alert_model').css('display','none')" class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#formModulos">Agregar</button>
					<div class="course-wrapper" id='container_modules'>
						
					</div>
				</div>
			</div>
		</div>
				
		<div id="confirModal" class="modal fade" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Modulos</h4>
					</div>
					<div class="modal-body">
						<p>Desea crear modulos para el curso?</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal" data-toggle="modal" data-target="#formModulos">Si</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
					</div>
				</div>

			</div>
		</div>
		<div id="formModulos" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Crear Modulos</h4>						
					</div>
					<form role="form" method="POST" id="NewModule-form" class="form-horizontal">														
						<!--<input type="hidden" name="token_module" value="{{ csrf_token() }}">-->
						<!--<input type="hidden" name="course_id" value="{{$course{0}->id}}">-->
						<div class="modal-body">
							<div class="form-group">
								<label for="name" class="col-xs-12 col-md-4">Nombre del Modulo</label>
								<div class="col-xs-12 col-md-8">
									<input type="text" class="form-control" name="name_module" id="name_module" required>
								</div>
							</div>
							<div class="form-group">
								<label for="description" class="col-xs-12 col-md-4">Descripción</label>
								<div class="col-xs-12 col-md-8">
									<input type="text" class="form-control" name="description_module" id="description_module" required>
								</div>
							</div>
							<div class="form-group">
								<label for="required_score " class="col-xs-12 col-md-4">Aprueba</label>
								<div class="col-xs-12 col-md-8">
									<input type="text" class="form-control" name="required_score" id="required_score" required>
								</div>
							</div>
							<div class="form-group">
								<label for="attempts  " class="col-xs-12 col-md-4">Oportunidades</label>
								<div class="col-xs-12 col-md-8">
									<input type="text" class="form-control" name="attempts" id="attempts" required>
								</div>
							</div>							
						</div>
						<div class="modal-footer">
							<button id="guardar" onClick="saveModule();" data-dismiss="modal" class="btn btn-primary">Guardar</button>
							<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
						</div>
					</form>
					
				</div>

			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts')
@if(isset($new) and count($new) > 0)
<script>
$(function() {
	$('#confirModal').modal('show');
});
</script>
@endif
<script src="{{ asset('../resources/assets/js/functions.js') }}"></script>
<script src="{{ asset('../resources/assets/js/courses.js') }}"></script>
<script src="{{ asset('../resources/assets/js/bootstrap-datepicker.min.js') }}"></script>
<script>
$("#li-courses").addClass("active");
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