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
						<li><a onclick="activateUsers()" href="#">Activar</a></li>
						<li><a onclick="inactivateUsers()" href="#">Inactivar</a></li>
					</ul>
				</div>
				<button class="btn btn-warning" onclick="deleteUser()"><i  class="fa fa-trash"></i></button>
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
							<th class="filter-false"></th>
							<th>Email</th>
							<th>Nombre</th>
							<th class="filter-select">Rol</th>
							<th class="filter-select">Estado</th>
							<th>Antigüedad</th>
							<th>Puntos</th>
						</tr>
					</thead>
					<tbody>
						@for ($i = 0; $i < count($userAll); $i++)						
						<tr>
							<?php
							$days = (strtotime(date("Y-m-d")) - strtotime($userAll[$i]->entry_date)) / (60 * 60 * 24);
							$years = $days / 365;
							if($years < 1){
								$oldest = (intval($days / 30) < 2 ? intval($days / 30) . ' mes' : intval($days / 30) . ' meses');
							}else{
								$oldest = (intval($years) < 2 ? intval($years) . ' año': intval($years) . ' años');
							}
							?>
							<td><input type='checkbox' class='user-check' onclick="checkId({{$userAll[$i]->id}})" id="{{$userAll[$i]->id}}"></td>
							<td><img src='{{ asset("../resources/assets/img/users") }}/{{$userAll[$i]->photo}}' width='30'></td>
							<td><a href="{{ url('users/edit/id/'.$userAll[$i]->id) }}">{{$userAll[$i]->email}}</a></td>
							<td><a href="{{ url('users/edit/id/'.$userAll[$i]->id) }}">{{$userAll[$i]->first_name}} {{$userAll[$i]->last_name}}</a></td>
							<td>{{$userAll[$i]->rol}}</td>
							@if ($userAll[$i]->active == 1)
							<td>Activo</td>
							@elseif ($userAll[$i]->active == 2)
							<td>Inactivo</td>
							@else
							<td>Eliminado</td>
							@endif
							<td>{{$oldest}}</td>
							<td>{{$userAll[$i]->actual_points}}</td>
						</tr>
						@endfor
					</tbody>
				</table>
			</div>
		</div>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="select_id" id="select_id">
		<input type="hidden" name="tipo_update" id="tipo_update">
	</div>
	<div class="modal fade" id="modal_delete_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button  type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Información</h4>
				</div>
				<div class="modal-body">
					<label id="informations"></label>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">ok</button>
				</div>
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
<script src="{{ asset('../resources/assets/js/functions.js') }}"></script>
<script>
$("#li-players").addClass("active");
</script>
@endsection
