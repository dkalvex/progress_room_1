@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="input-group">
			<label for="exampleInputEmail1">Nombre</label>
			<input type="text" class="form-control" placeholder="Nombre" >
		</div>
		<div class="input-group">
			<input type="text" class="form-control" placeholder="Apellido" >
		</div>
		<div class="input-group">
			<span class="input-group-addon" id="basic-addon1">@</span>
			<input type="text" class="form-control" placeholder="Username" >
		</div>
		<div class="input-group">
  			<input type="text" class="form-control" placeholder="Email" >
  			<span class="input-group-addon" id="basic-addon2">@example.com</span>
		</div>
		<div class="input-group">
  			<span class="input-group-addon">$</span>
  			<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
  			<span class="input-group-addon">.00</span>
		</div>
	</div>

</div>

@endsection
@section('scripts')
<script src="{{ asset('../resources/assets/js/flot/jquery.flot.min.js') }}"></script>
<script src="{{ asset('../resources/assets/js/playerStats.js') }}"></script>
<script src="http://mottie.github.io/tablesorter/js/jquery.tablesorter.js"></script>
<script src="http://mottie.github.io/tablesorter/js/jquery.tablesorter.widgets.js"></script>
<script src="http://mottie.github.io/tablesorter/addons/pager/jquery.tablesorter.pager.js"></script>
<script src="{{ asset('../resources/assets/js/tables.js') }}"></script>
@endsection
