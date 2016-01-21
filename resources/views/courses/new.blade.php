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
						<form role="form" method="POST" action="{{ url('/courses/newSave') }}" id="NewUser-form" class="form-horizontal">
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
								</script>
								@endif
							</div>
							<div class="form-group">
								<label for="name" class="col-xs-12 col-md-4">Nombres del curso</label>
								<div class="col-xs-12 col-md-8">
									<input type="text" class="form-control" name="name" id="name" required>
								</div>
							</div>
							<div class="form-group">
								<label for="description" class="col-xs-12 col-md-4">Descripción</label>
								<div class="col-xs-12 col-md-8">
									<input type="text" class="form-control" name="description" id="description" required>
								</div>
							</div>
							<div class="form-group">
								<label for="awarded_points" class="col-xs-12 col-md-4">Puntos de experiencia</label>
								<div class="col-xs-12 col-md-8">
									<input type="text"  class="form-control" name="awarded_points" id="awarded_points" required>
								</div>
							</div>
							<div class="form-group">
								<label for="redeemable_points" class="col-xs-12 col-md-4">Puntos redimibles</label>
								<div class="col-xs-12 col-md-8">
									<input type="text" class="form-control" name="redeemable_points" id="redeemable_points" required>
								</div>
							</div>
							<div class="form-group">
								<label for="begin_date" class="col-xs-12 col-md-4">Fecha inicio</label>									
								<div class="col-xs-12 col-md-8">
									<div class="input-group date">
										<input type="text" class="form-control" placeholder="yyyy-mm-dd" id="begin_date"  name="begin_date" required/>
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
										<input type="text" class="form-control" placeholder="yyyy-mm-dd" id="end_date"  name="end_date" required/>
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
										<option value="" selected>-Seleccione-</option>
										@foreach (courseFacade::getAllBadges() as $badge)
										<option  value="{{$badge->id}}"> {{ $badge->name }}</option>
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
<script src="{{ asset('../resources/assets/js/functions.js') }}"></script>
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