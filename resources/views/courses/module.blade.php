@extends('layouts.player')

@section('styles')

@endsection
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-md-8">
			<div id="video-container">
				<video width="640" height="360" style="width: 100%; height: 100%;">
					@if($lesson{0}->type_id == 1)
					<object data="{{$lesson{0}->url}}" type="application/pdf" width="100%" height="800px"> 
						<p><a href="{{$lesson{0}->url}}" class="btn btn-primary">Descargar archivo</a></p>  
					</object>
					@elseif($lesson{0}->type_id == 2)
					<source src="{{$lesson{0}->url}}" type="video/mp4">
					@elseif($lesson{0}->type_id == 3)
					<source src="{{$lesson{0}->url}}" type="video/youtube">
					@endif
				</video>
			</div>
			<div class="panel panel-default" style="margin-top: 20px">
				<div class="panel-body">
					<div class="course-title">{{$lesson{0}->lesson_name}}</div>
					<div class="course-dates">
						<div class="course-description">
							<p>{{$lesson{0}->lesson_description}}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-4">
			<div class="list-group list-group-course">
				<a href="#" class="list-group-item disabled">{{$module{0}->module_name}}</a>
				@for ($i = 0; $i < count($module); $i++)
				@if ($i == ($lesson{0}->lesson_order - 1))
				<a href="../{{$module[$i]->module_id}}/{{$module[$i]->lesson_order}}" class="list-group-item active">
					@else
				<a href="../{{$module[$i]->module_id}}/{{$module[$i]->lesson_order}}" class="list-group-item">
					@endif
					<i class="fa fa-video-camera course-lesson"></i>{{$module[$i]->lesson_name}}
				</a>
				@endfor
			</div>
			<div class="panel panel-primary-fill">
				<div class="panel-body">
					<p class="course-description">{{$module{0}->module_description}}</p>
					<div class="text-center"><a href="../../course/{{$module{0}->course_id}}" class="btn btn-primary">Ver el Curso Completo</a></div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('../resources/assets/js/mediaelement-and-player.min.js') }}"></script>
<script>
	$("#li-courses").addClass("active");
	$(document).ready(function() {
		$('video').mediaelementplayer({
			success: function(media, node, player) {
				$('#' + node.id + '-mode').html('mode: ' + media.pluginType);
			}
		});
	});
</script>
@endsection
