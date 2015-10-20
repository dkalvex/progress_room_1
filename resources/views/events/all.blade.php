@extends('layouts.admin')

@section('styles')
<link href="{{ asset('../resources/assets/css/calendar.min.css') }}" rel="stylesheet">
@endsection
@section('content')

<div class="modal fade" id="events-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h3></h3>
            </div>
            <div class="modal-body" style="height: 300px"></div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
            </div>
        </div>
    </div>
</div>
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
							<th>Título</th>
							<th>Inicio</th>
							<th>Fin</th>
							<th class="filter-select">Lugar</th>
							<th class="filter-select">Activo</th>
							<th>Descripción</th>
						</tr>
					</thead>
					<tbody>
						
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
<script src="{{ asset('../resources/assets/js/calendar/underscore.min.js') }}"></script>
<script src="{{ asset('../resources/assets/js/calendar/jstz.min.js') }}"></script>
<script src="{{ asset('../resources/assets/js/calendar/es-CO.js') }}"></script>
<script src="{{ asset('../resources/assets/js/calendar/calendar.js') }}"></script>
<script src="{{ asset('../resources/assets/js/calendar/app.js') }}"></script>
<script>
	$("#li-events").addClass("active");
</script>
@endsection
