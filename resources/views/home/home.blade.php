@extends('layouts.player')

@section('content')
<div class="container-fluid">
	<div class="row" style="margin-bottom: 10px">
		<div class="col-xs-12 col-sm-6 col-md-3">
			<div class="stat green-stat">
				<div class="col-xs-3">
					<div class="total-stat">4</div>
				</div>
				<div class="col-xs-9">
					<div class="chart-stat" id="missions-stat"></div>
				</div>
				<div class="col-xs-12">
					<div class="title-stat text-center">Misiones Hoy</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<div class="stat purple-stat">
				<div class="col-xs-3">
					<div class="total-stat">150</div>
				</div>
				<div class="col-xs-9">
					<div class="chart-stat" id="points-stat"></div>
				</div>
				<div class="col-xs-12">
					<div class="title-stat text-center">Puntos Hoy</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<div class="stat orange-stat">
				<div class="col-xs-3">
					<div class="total-stat">2</div>
				</div>
				<div class="col-xs-9">
					<div class="chart-stat" id="trophies-stat"></div>
				</div>
				<div class="col-xs-12">
					<div class="title-stat text-center">Total Trofeos</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-3">
			<div class="stat blue-stat">
				<div class="col-xs-3">
					<div class="total-stat">9</div>
				</div>
				<div class="col-xs-9">
					<div class="chart-stat" id="badges-stat"></div>
				</div>
				<div class="col-xs-12">
					<div class="title-stat text-center">Total Medallas</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-md-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="chart-title">Compartir Logro</div>
					<ul class="nav nav-tabs nav-posts">
						<li class="active">
							<a href="#personal" data-toggle="tab">
								<i class="fa fa-user"></i> Personal
							</a>
						</li>
						<li>
							<a href="#educational" data-toggle="tab">
								<i class="fa fa-book"></i> Educativo
							</a>
						</li>
						<li>
							<a href="#professional" data-toggle="tab">
								<i class="fa fa-briefcase"></i> Profesional
							</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade in active" id="personal">
							<div class="row-fluid">
								<div class="col-xs-12">
									<form action="#" method="post" role="form" enctype="multipart/form-data" class="form-horizontal" id="personal-post">
										<input type="text" class="post-control" id="personal-title" name="personal-title" placeholder="¿Cuál es tu logro?">
										<input type="text" class="post-control" id="personal-date" name="personal-date" placeholder="¿Cuándo obtuviste el logro?">
										<textarea class="post-control" id="personal-comment" name="personal-comment" placeholder="Cuéntanos más"></textarea>
										<div class="text-right"><button class="btn btn-primary" type="submit">Publicar</button></div>
									</form>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="educational">
							<div class="row-fluid">
								<div class="col-xs-12">
									<form action="#" method="post" role="form" enctype="multipart/form-data" class="form-horizontal" id="educational-post">
										<input type="text" class="post-control" id="educational-title" name="educational-title" placeholder="¿Cuál es tu logro?">
										<input type="text" class="post-control" id="educational-org" name="educational-org" placeholder="¿Dónde obtuviste el logro?">
										<input type="text" class="post-control" id="educational-date" name="educational-date" placeholder="¿Cuándo obtuviste el logro?">
										<textarea class="post-control" id="educational-comment" name="educational-comment" placeholder="Cuéntanos más"></textarea>
										<div class="text-right"><button class="btn btn-primary" type="submit">Publicar</button></div>
									</form>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="professional">
							<div class="row-fluid">
								<div class="col-xs-12">
									<form action="#" method="post" role="form" enctype="multipart/form-data" class="form-horizontal" id="professional-post">
										<input type="text" class="post-control" id="professional-title" name="professional-title" placeholder="¿Cuál es tu logro?">
										<input type="text" class="post-control" id="professional-org" name="professional-org" placeholder="¿Dónde obtuviste el logro?">
										<input type="text" class="post-control" id="professional-date" name="professional-date" placeholder="¿Cuándo obtuviste el logro?">
										<input type="text" class="post-control" id="professional-date" name="professional-date" placeholder="¿Tiene vigencia?">
										<textarea class="post-control" id="professional-comment" name="professional-comment" placeholder="Cuéntanos más"></textarea>
										<div class="text-right"><button class="btn btn-primary" type="submit">Publicar</button></div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="posts-list">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-4 col-sm-3 col-md-2">
								<img class="img img-responsive" src="{{ asset('../resources/assets/img/users') }}/default.png"></img>
							</div>
							<div class="col-xs-7 col-sm-9 col-md-10">
								<div class="post-header">
									<div class="post-user">Geovanny Alonso</div>
									<div class="post-date">Hace 3 horas</div>
								</div>
								<div class="post-title">Nuevo curso</div>
								<div class="post-content">Curso de Excel avanzado para creación y administración de macros y tablas dinámicas</div>
								<div class="post-comment text-right">
									<a href="#">
										<i class="fa fa-comments"></i> 2
									</a>
								</div>
							</div>
						</div>
						<div class="row-fluid">
							<div class="timeline-wrapper">
								<div class="timeline-centered">
							        <article class="timeline-entry">
							            <div class="timeline-entry-inner">
							                <div class="timeline-icon">
							                    <img class="img img-responsive" src="{{ asset('../resources/assets/img/users') }}/default.png"></img>
							                </div>
							                <div class="timeline-label">
							                    <h2><a href="#">Eydi Ramírez</a></h2>
							                    <p class="text-muted"><small>Hace 1 hora</small></p>
							                    <p>Excelente curso</p>
							                </div>
							            </div>
							        </article>
							        <article class="timeline-entry">
							            <div class="timeline-entry-inner">
							                <div class="timeline-icon">
							                    <img class="img img-responsive" src="{{ asset('../resources/assets/img/users') }}/default.png"></img>
							                </div>
							                <div class="timeline-label">
							                    <h2><a href="#">Daniel Galvez</a></h2>
							                    <p class="text-muted"><small>Hace 2 horas</small></p>
							                    <p>El contenido del curso es bastante práctico</p>
							                </div>
							            </div>
							        </article>
							    </div>
							</div>
						</div>
					</div>
					<div class="panel-footer">
						<form action="#" method="post" role="form" class="form-horizontal">
							<div class="input-group">
								<input type="text" class="comment-control" placeholder="Comentar">
								<span class="input-group-btn">
									<button class="btn btn-default" type="submit">
										<i class="fa fa-send"></i>
									</button>
								</span>
							</div>
						</form>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-4 col-sm-3 col-md-2">
								<img class="img img-responsive" src="{{ asset('../resources/assets/img/users') }}/default.png"></img>
							</div>
							<div class="col-xs-7 col-sm-9 col-md-10">
								<div class="post-header">
									<div class="post-user">Administrador</div>
									<div class="post-date">Hace 2 días</div>
								</div>
								<div class="post-title">Nueva misión</div>
								<div class="post-content">Finalizar el curso de inglés básico en 2 días</div>
								<div class="post-comment text-right">
									<a href="#">
										<i class="fa fa-comments"></i> 0
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="panel-footer">
						<form action="#" method="post" role="form" class="form-horizontal">
							<div class="input-group">
								<input type="text" class="comment-control" placeholder="Comentar">
								<span class="input-group-btn">
									<button class="btn btn-default" type="submit">
										<i class="fa fa-send"></i>
									</button>
								</span>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="chart-title">Misiones</div>
				</div>
				<div class="list-group">
					<a href="#" class="list-group-item">
						<div class="col-xs-4 col-sm-3">
							<img class="img img-responsive" src="{{ asset('../resources/assets/img/users') }}/default.png"></img>
						</div>
						<div class="col-xs-7 col-sm-9">
							<div class="mission-title">Misión</div>
							<div class="mission-desc">Descripción de lo que debe realizarse para completar la misión</div>
							<div class="row mission-progress">
								<div class="col-xs-9">
									<div class="progress">
										<div class="progress-bar progress-bar-default" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="mission-percent">40 %</div>
								</div>
							</div>
						</div>
					</a>
					<a href="#" class="list-group-item">
						<div class="col-xs-4 col-sm-3">
							<img class="img img-responsive" src="{{ asset('../resources/assets/img/users') }}/default.png"></img>
						</div>
						<div class="col-xs-7 col-sm-9">
							<div class="mission-title">Misión</div>
							<div class="mission-desc">Descripción de lo que debe realizarse para completar la misión</div>
							<div class="row mission-progress">
								<div class="col-xs-9">
									<div class="progress">
										<div class="progress-bar progress-bar-default" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="mission-percent">80 %</div>
								</div>
							</div>
						</div>
					</a>
					<a href="#" class="list-group-item">
						<div class="col-xs-4 col-sm-3">
							<img class="img img-responsive" src="{{ asset('../resources/assets/img/users') }}/default.png"></img>
						</div>
						<div class="col-xs-7 col-sm-9">
							<div class="mission-title">Misión</div>
							<div class="mission-desc">Descripción de lo que debe realizarse para completar la misión</div>
							<div class="row mission-progress">
								<div class="col-xs-9">
									<div class="progress">
										<div class="progress-bar progress-bar-default" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
									</div>
								</div>
								<div class="col-xs-3">
									<div class="mission-percent">60 %</div>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="chart-title">Tabla de Líderes</div>
					<div class="row">
						<div class="col-xs-12 col-md-8">
							<div class="chart top-chart" id="top-players"></div>
						</div>
						<div class="col-xs-12 col-md-4" id="top-players-table"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('../resources/assets/js/flot/jquery.flot.min.js') }}"></script>
<script src="{{ asset('../resources/assets/js/playerCharts.js') }}"></script>
<script>
	$("#li-home").addClass("active");
</script>
@endsection
