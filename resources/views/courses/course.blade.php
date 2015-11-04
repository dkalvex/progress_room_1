@extends('layouts.player')

@section('styles')

@endsection
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-8">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="course-title">{{$course{0}->name}}</div>
					<div class="course-description">
						<!--p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut finibus ex, id rutrum urna. Morbi lorem quam, varius at finibus vitae, ornare in lacus. Ut hendrerit nisl in metus iaculis, id luctus mi rhoncus. In malesuada purus eu sem venenatis, a faucibus ante mollis. Vestibulum gravida non velit eu mattis. Donec interdum sit amet justo quis luctus. Etiam nec blandit eros, non pretium neque. Phasellus ut aliquet lorem. Sed sit amet consequat diam. Morbi accumsan interdum hendrerit. Proin scelerisque tempor condimentum. Sed vitae eros est. Integer vehicula turpis vitae felis congue, in placerat augue laoreet. Vivamus non molestie eros. Vivamus commodo est et sapien auctor ultricies. Suspendisse sagittis ipsum sed est bibendum, vulputate imperdiet leo iaculis.</p>
						<p>Phasellus venenatis, tellus vel lacinia pretium, diam nisl volutpat diam, non rutrum risus nulla a nisi. Quisque ut massa a justo molestie egestas at eget justo. Vestibulum scelerisque arcu eu vestibulum dapibus. Integer sit amet mollis leo. Quisque placerat bibendum dolor. Nunc elit libero, semper nec lectus eu, accumsan tempor sem. Duis a lorem sed felis porttitor consequat. Morbi sed ex urna. Nulla feugiat libero at dignissim aliquam. Mauris massa neque, aliquam ac erat at, semper mattis diam. Suspendisse at ipsum consectetur, sagittis diam at, maximus nisl. Maecenas venenatis pellentesque nisi, quis congue nisi lobortis ac. Vivamus elementum aliquet ante, quis vulputate lacus feugiat at.</p-->
							<p>{{$course{0}->description}}</p>
					</div>
					<div class="course-dates">
						<div class="course-title">Información General</div>
						@if ($course{0}->active == 0)
						<p>Próximamente</p>
						@else
						<ul>
							<li>Inicia: {{$course{0}->begin_date}}</li>
							<li>Finaliza: {{$course{0}->end_date}}</li>
						</ul>
						@endif
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="panel panel-primary-fill">
				<div class="panel-body">
					<div class="chart-title">Comienza ahora</div>
					<div class="text-center">
						<div class="text-muted">Este curso puedes desarrollarlo a tu propio ritmo y cuenta con fechas límite sugeridas para la entrega de tus actividades</div>
						<a href="#" class="btn btn-primary">Incribirme</a>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="course-title">Puedes ganar</div>
					<div class="text-center">
						<img class="img img-responsive" style="display: inline" src="{{ asset('../resources/assets/img/courses') }}/{{ $course{0}->image }}" />
					</div>
					<div class="course-points">{{ $course{0}->awarded_points }} puntos</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-md-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="course-title">Contenido</div>
					<div class="course-wrapper">
						@for ($i = 0; $i < count($modules); $i++)
						<div class="course-content">
							<div class="course-unit"><a href="../module/{{$modules[$i]->module_id}}">{{$modules[$i]->module_name}}</a></div>
						</div>
						@endfor
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="course-title">Comentarios</div>
					<div class="timeline-wrapper">
						<div class="timeline-centered" style="margin: 0px !important">
							@for ($i = 0; $i < count($comments); $i++)
							<?php
								$hours = (strtotime(date("Y-m-d")) - strtotime($comments[$i]->created_at)) / (60 * 60);
								
								if($hours <= 24){
									$oldest = (intval($hours) == 0 ? 'Hace ' . intval($hours) . ' hora' : 'Hace ' . intval($hours) . ' horas');
								}else if($hours > 24 && $hours <= 120){
									$oldest = (intval($hours / 24) < 2 ? 'Hace ' . intval($hours / 24) . ' día': 'Hace ' . intval($hours / 24) . ' días');
								}else{
									$oldest = 'El ' . date("Y-m-d", strtotime($comments[$i]->created_at));
								}
							?>
							<article class="timeline-entry">
					            <div class="timeline-entry-inner">
					                <div class="timeline-icon">
					                	@if($comments[$i]->photo == '')
					                	<img class="img img-responsive" src="{{ asset('../resources/assets/img/users') }}/default.png"></img>
					                	@else
					                	<img class="img img-responsive" src="{{ asset('../resources/assets/img/users') }}/{{$comments[$i]->photo}}"></img>
					                	@endif
					                </div>
					                <div class="timeline-label">
					                    <h2><a href="#">{{$comments[$i]->first_name}} {{$comments[$i]->last_name}}</a></h2>
					                    <p class="text-muted"><small>{{$oldest}}</small></p>
					                    <p>{{$comments[$i]->comment}}</p>
					                </div>
					            </div>
					        </article>
							@endfor
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script>
	$("#li-courses").addClass("active");
</script>
@endsection
