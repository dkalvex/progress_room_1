@extends('layouts.player')

@section('styles')

@endsection
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-md-8">
			<div id="video-container">
				<video width="640" height="360" style="width: 100%; height: 100%;">
					<source src="https://www.youtube.com/watch?v=LDVyVBY55Ck" type="video/youtube">
					<!--source src="movie.mp4" type="video/mp4"-->
					<!--source src="movie.webm" type="video/webm"-->
				</video>
			</div>
			<div class="panel panel-default" style="margin-top: 20px">
				<div class="panel-body">
					<div class="course-title">Módulo X</div>
					<div class="course-dates">
						<div class="course-description">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut finibus ex, id rutrum urna. Morbi lorem quam, varius at finibus vitae, ornare in lacus. Ut hendrerit nisl in metus iaculis, id luctus mi rhoncus. In malesuada purus eu sem venenatis, a faucibus ante mollis.</p>
							<p>Vestibulum gravida non velit eu mattis. Donec interdum sit amet justo quis luctus. Etiam nec blandit eros, non pretium neque. Phasellus ut aliquet lorem. Sed sit amet consequat diam. Morbi accumsan interdum hendrerit.</p>
							<p>Proin scelerisque tempor condimentum. Sed vitae eros est. Integer vehicula turpis vitae felis congue, in placerat augue laoreet. Vivamus non molestie eros. Vivamus commodo est et sapien auctor ultricies. Suspendisse sagittis ipsum sed est bibendum, vulputate imperdiet leo iaculis.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-4">
			<div class="list-group list-group-course">
				<a href="#" class="list-group-item disabled">Módulo 1</a>
				<a href="#" class="list-group-item active">
					<i class="fa fa-video-camera course-lesson"></i>Contenido 1
				</a>
				<a href="#" class="list-group-item">
					<i class="fa fa-video-camera course-lesson"></i>Contenido 2
				</a>
				<a href="#" class="list-group-item">
					<i class="fa fa-video-camera course-lesson"></i>Contenido 3
				</a>
				<a href="#" class="list-group-item success">
					<i class="fa fa-file course-lesson"></i>Evaluación
				</a>
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
