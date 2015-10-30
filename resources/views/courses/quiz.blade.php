@extends('layouts.player')

@section('styles')

@endsection
@section('content')

<div class="container-fluid">
	<div class="row">
	</div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('../resources/assets/js/mediaelement-and-player.min.js') }}"></script>
<script>
	$("#li-courses").addClass("active");
</script>
@endsection
