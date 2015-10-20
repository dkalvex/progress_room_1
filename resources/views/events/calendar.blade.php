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
		<div class="col-xs-12">
			<div class="page-header">
				<div class="pull-right form-inline">
					<div class="btn-group">
						<button class="btn btn-default" data-calendar-nav="prev"><i class="fa fa-angle-double-left" style="margin-right: 5px"></i> Prev</button>
						<button class="btn btn-info" data-calendar-nav="today">Today</button>
						<button class="btn btn-default" data-calendar-nav="next">Next <i class="fa fa-angle-double-right" style="margin-left: 5px"></i></button>
					</div>
					<div class="btn-group">
						<button class="btn btn-default" data-calendar-view="year">Year</button>
						<button class="btn btn-default active" data-calendar-view="month">Month</button>
						<button class="btn btn-default" data-calendar-view="week">Week</button>
						<button class="btn btn-default" data-calendar-view="day">Day</button>
					</div>
				</div>
				<h3></h3>
			</div>
			<div id="calendar"></div>
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('../resources/assets/js/calendar/underscore.min.js') }}"></script>
<script src="{{ asset('../resources/assets/js/calendar/jstz.min.js') }}"></script>
<script src="{{ asset('../resources/assets/js/calendar/es-CO.js') }}"></script>
<script src="{{ asset('../resources/assets/js/calendar/calendar.js') }}"></script>
<script src="{{ asset('../resources/assets/js/calendar/app.js') }}"></script>
<script>
	$("#li-events").addClass("active");
</script>
@endsection
