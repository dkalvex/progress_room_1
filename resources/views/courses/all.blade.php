@extends('layouts.admin')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-md-6">
			<div class="pager">
				<button class="btn btn-default first"><i class="fa fa-angle-double-left"></i></button>
				<button class="btn btn-default prev"><i class="fa fa-angle-left"></i></button>
        		<span class="pagedisplay"></span>
        		<button class="btn btn-default next"><i class="fa fa-angle-right"></i></button>
				<button class="btn btn-default last"><i class="fa fa-angle-double-right"></i></button>
        		<select class="pagesize" title="Select page size"> 
		            <option selected="selected" value="10">10</option> 
		            <option value="20">20</option> 
		            <option value="30">30</option> 
		            <option value="40">40</option> 
		        </select>
		        <select class="gotoPage" title="Select page number"></select>
		    </div>
		</div>
		<div class="col-xs-12 col-md-6">
	    	<div class="btn-bar">
	    		<button class="btn btn-default" id="btn-filter"><i class="fa fa-filter"></i></button>
	    		<div class="btn-group">
	    			<button class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    				<i class="fa fa-bars"></i><span class="caret" style="margin-left: 5px;"></span>
	    			</button>
	    			<ul class="dropdown-menu" id="action-dropdown">
	    				<li><a href="#">Activar</a></li>
	    				<li><a href="#">Inactivar</a></li>
	    			</ul>
	    		</div>
	    		<button class="btn btn-warning"><i class="fa fa-trash"></i></button>
				<a class="btn btn-primary" href="{{ url('courses/new') }}"><i class="fa fa-plus"></i></a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="panel panel-default">
				<table class="table table-striped tablesorter">
					<thead>
						<tr>
							<th class="filter-false"></th>
							<th class="filter-false">Id</th>
							<th>Título</th>
							<th>Inicio</th>
							<th>Duración</th>
							<th class="filter-select">Tema</th>
							<th class="filter-select">Activo</th>
							<th>Descripción</th>
						</tr>
					</thead>
					<tbody>
						@for ($i = 0; $i < count($courseAll); $i++)						
						<tr>							
							<td><input type='checkbox' class='user-check' onclick="checkId({{$courseAll[$i]->id}})" id="{{$courseAll[$i]->id}}"></td>							
							<td><a href="{{ url('courses/edit/id/'.$courseAll[$i]->id) }}">{{$courseAll[$i]->id}}</a></td>
							<td><a href="{{ url('courses/edit/id/'.$courseAll[$i]->id) }}">{{$courseAll[$i]->name}}</a></td>
							<td>{{$courseAll[$i]->description}}</td>							
						</tr>
						@endfor
					</tbody>
				</table>
			</div>
		</div>
		<input type="hidden" name="select_id" id="select_id">
		<input type="hidden" name="tipo_update" id="tipo_update">
	</div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('../resources/assets/js/functions.js') }}"></script>
<script>
	$("#li-courses").addClass("active");
</script>
@endsection
