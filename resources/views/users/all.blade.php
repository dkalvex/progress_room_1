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
				<button class="btn btn-info"><i class="fa fa-upload"></i></button>
				<a class="btn btn-primary" href="{{ url('users/new') }}"><i class="fa fa-plus"></i></a>
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
							<th>Nombre</th>
							<th>Apellido</th>
							<th class="filter-select">Rol</th>
							<th>Email</th>
							<th class="filter-select">Activo</th>
							<th>Equipo</th>
							<th>Nivel</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@for ($i = 0; $i < count($userAll); $i++)						
						<tr>
							<td><input type='checkbox' class='user-check' id="{{$userAll[$i]->id}}"></td>
							<td>{{$userAll[$i]->id}}</td>
							<td>{{$userAll[$i]->first_name}}</td>
							<td>{{$userAll[$i]->last_name}}</td>
							<td>{{$userAll[$i]->rol}}</td>
							<td>{{$userAll[$i]->email}}</td>
							<td>{{$userAll[$i]->active}}</td>
							<td>{{$userAll[$i]->team_id}}</td>
							<td>{{$userAll[$i]->level_id}}</td>
							<td><a class='btn btn-primary' href="{{ url('users/edit/id/'.$userAll[$i]->id) }}"><i class='fa fa-plus'></i></a></td>
						</tr>
						@endfor
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script src="http://mottie.github.io/tablesorter/js/jquery.tablesorter.js"></script>
<script src="http://mottie.github.io/tablesorter/js/jquery.tablesorter.widgets.js"></script>
<script src="http://mottie.github.io/tablesorter/addons/pager/jquery.tablesorter.pager.js"></script>
<script src="{{ asset('../resources/assets/js/tables.js') }}"></script>
<script>
$("#li-players").addClass("active");
</script>
@endsection
