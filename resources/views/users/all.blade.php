@extends('layouts.admin')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="page-title">
			<i class="fa fa-users"></i> Inicio
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-2"></div>
		<div class="col-xs-12 col-sm-8">
			<table class="table table-striped">
				<tr>
					<td>Id</td>
					<td>Nombre</td>
					<td>Apellido</td>
					<td>Rol</td>
					<td>Email</td>
					<td>Activo</td>
					<td>Equipo</td>
					<td>Nivel</td>
				</tr>
				<?php
					$usAll = json_decode(json_encode($userAll));
					for ($i=0; $i < count($usAll) ; $i++) { 
						echo "<tr>";
							echo "<td>".$usAll{$i}->id."</td>";
							echo "<td>".$usAll{$i}->first_name."</td>";
							echo "<td>".$usAll{$i}->last_name."</td>";
							echo "<td>".$usAll{$i}->role_id."</td>";
							echo "<td>".$usAll{$i}->email."</td>";
							echo "<td>".$usAll{$i}->active."</td>";
							echo "<td>".$usAll{$i}->team_id."</td>";
							echo "<td>".$usAll{$i}->level_id."</td>";
						echo "</tr>";
					}
				?>
			</table>
		</div>
		<div class="col-xs-12 col-sm-2"></div>
	</div>
	<div class="row">
		<button class="btn btn-default">Agregar</button>
	</div>
</div>
@endsection
