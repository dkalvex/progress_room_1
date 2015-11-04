@extends('layouts.player')

@section('styles')

@endsection
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-md-8">
			<div id="video-container">
				<video width="640" height="360" style="width: 100%; height: 100%;">
					@if($module{0}->type_id == 1)
					@elseif($module{0}->type_id == 2)
					@elseif($module{0}->type_id == 3)
					<source src="{{$module{0}->url}}" type="video/youtube">
					<!--source src="movie.mp4" type="video/mp4"-->
					<!--source src="movie.webm" type="video/webm"-->
					@endif
				</video>
			</div>
			<div class="panel panel-default" style="margin-top: 20px">
				<div class="panel-body">
					<div class="course-title">{{$module{0}->module_name}}</div>
					<div class="course-dates">
						<div class="course-description">
							<p>{{$module{0}->module_description}}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-4">
			<div class="list-group list-group-course">
				<a href="#" class="list-group-item disabled">{{$module{0}->module_name}}</a>
				@for ($i = 0; $i < count($module); $i++)
				<a href="#" class="list-group-item">
					<i class="fa fa-video-camera course-lesson"></i>{{$module[$i]->lesson_name}}
				</a>
				@endfor
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
