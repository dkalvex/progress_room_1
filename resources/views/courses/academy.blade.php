@extends('layouts.player')

@section('styles')

@endsection
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12">
			<div class="course-search-container">
				<form class="form-inline" role="form">
					<div class="form-group">
						<label for="search" class="control-label" style="padding: 0px 10px 20px">¿Qué deseas aprender?</label>
						<input type="search" class="form-control" id="search" name="search">
					</div>
					<div class="form-group">
						<label for="topic" class="control-label" style="padding: 0px 10px 20px">Tema de interés</label>
						<select class="form-control" id="topic" name="topic">
							<option value="0">Todos</option>
							<option value="1">Ofimática</option>
							<option value="2">Idiomas</option>
							<option value="3">Tecnología</option>
						</select>
					</div>
					<div class="form-group">
						<button class="btn btn-primary btn-full">Buscar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="row">
		@for ($i = 0; $i < count($courseAll); $i++)
		<?php
			$data = explode(".", $courseAll[$i]->description);
			$description = $data[0] . ". " . $data[1] . ".";
		?>				
		<div class="col-xs-6 col-sm-4 col-md-3">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-xs-12">
						@if($courseAll[$i]->image == '')
							<center><img class="img img-responsive" src="{{ asset('../resources/assets/img/courses') }}/default.png"></img></center>
						@else
							<center><img class="img img-responsive" src="{{ asset('../resources/assets/img/courses') }}/{{ $courseAll[$i]->image }}"></img></center>
						@endif
					</div>
					<div class="col-xs-12 course-details">
						<h4>{{$courseAll[$i]->name}}</h4>
						<p class="course-paragraph">{{$description}}</p>
						<div class="course-info">
							<div style="float: left">{{$courseAll[$i]->likes}} likes</div>
							<div style="float: right">{{$courseAll[$i]->awarded_points}} ptos</div>
						</div>
						<a class="btn btn-info btn-half" href="course/{{$courseAll[$i]->id}}">Ver más</a>
					</div>
				</div>
			</div>
		</div>
		@endfor
	</div>
</div>
@endsection
@section('scripts')
<script>
	$("#li-courses").addClass("active");
</script>
@endsection
