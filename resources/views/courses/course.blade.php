@extends('layouts.player')

@section('styles')

@endsection
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-8">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="course-title">Nombre del Curso</div>
					<div class="course-description">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut finibus ex, id rutrum urna. Morbi lorem quam, varius at finibus vitae, ornare in lacus. Ut hendrerit nisl in metus iaculis, id luctus mi rhoncus. In malesuada purus eu sem venenatis, a faucibus ante mollis. Vestibulum gravida non velit eu mattis. Donec interdum sit amet justo quis luctus. Etiam nec blandit eros, non pretium neque. Phasellus ut aliquet lorem. Sed sit amet consequat diam. Morbi accumsan interdum hendrerit. Proin scelerisque tempor condimentum. Sed vitae eros est. Integer vehicula turpis vitae felis congue, in placerat augue laoreet. Vivamus non molestie eros. Vivamus commodo est et sapien auctor ultricies. Suspendisse sagittis ipsum sed est bibendum, vulputate imperdiet leo iaculis.</p>
						<p>Phasellus venenatis, tellus vel lacinia pretium, diam nisl volutpat diam, non rutrum risus nulla a nisi. Quisque ut massa a justo molestie egestas at eget justo. Vestibulum scelerisque arcu eu vestibulum dapibus. Integer sit amet mollis leo. Quisque placerat bibendum dolor. Nunc elit libero, semper nec lectus eu, accumsan tempor sem. Duis a lorem sed felis porttitor consequat. Morbi sed ex urna. Nulla feugiat libero at dignissim aliquam. Mauris massa neque, aliquam ac erat at, semper mattis diam. Suspendisse at ipsum consectetur, sagittis diam at, maximus nisl. Maecenas venenatis pellentesque nisi, quis congue nisi lobortis ac. Vivamus elementum aliquet ante, quis vulputate lacus feugiat at.</p>
					</div>
					<div class="course-dates">
						<div class="course-title">Información General</div>
						<ul>
							<li>Inicia: 11/11/2015</li>
							<li>Finaliza: 11/02/2016</li>
							<li>Duración: 40 horas</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="panel panel-primary-fill">
				<div class="panel-body">
					<div class="chart-title">Comienza ahora</div>
					<div class="text-center">
						<div class="text-muted">Este curso puedes desarrollarlo a tu propio ritmo y cuenta con fechas límite sugeridas para la entrega de tus actividades</div>
						<a href="#" class="btn btn-primary">Incribirme</a>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="course-title">Puedes ganar</div>
					<div class="text-center">
						<img class="img img-responsive" style="display: inline" src="{{ asset('../resources/assets/img/courses') }}/default.png" />
					</div>
					<div class="course-points">250 puntos</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-md-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="course-title">Contenido</div>
					<div class="course-wrapper">
						<div class="course-content">
							<div class="course-unit"><a href="../module/1">Módulo 1</a></div>
							<ol>
								<li><span>Contenido 1</span></li>
								<li><span>Contenido 2</span></li>
								<li><span>Contenido 3</span></li>
								<li class="course-quiz"><a href="../quiz/1">Evaluación</a></li>
							</ol>
						</div>
						<div class="course-content">
							<div class="course-unit"><a href="../module/2">Módulo 2</a></div>
							<ol>
								<li><span>Contenido 1</span></li>
								<li><span>Contenido 2</span></li>
								<li><span>Contenido 3</span></li>
								<li class="course-quiz"><a href="../quiz/2">Evaluación</a></li>
							</ol>
						</div>
						<div class="course-content">
							<div class="course-unit"><a href="../module/3">Módulo 3</a></div>
							<ol>
								<li><span>Contenido 1</span></li>
								<li><span>Contenido 2</span></li>
								<li><span>Contenido 3</span></li>
								<li class="course-quiz"><a href="../quiz/3">Evaluación</a></li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="course-title">Comentarios</div>
					<div class="timeline-wrapper">
						<div class="timeline-centered" style="margin: 0px !important">
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
					        <article class="timeline-entry">
					            <div class="timeline-entry-inner">
					                <div class="timeline-icon">
					                    <img class="img img-responsive" src="{{ asset('../resources/assets/img/users') }}/default.png"></img>
					                </div>
					                <div class="timeline-label">
					                    <h2><a href="#">Geovanny Alonso</a></h2>
					                    <p class="text-muted"><small>Hace 2 horas</small></p>
					                    <p>Gracias a este curso logré mejorar mi desempeño laboral</p>
					                </div>
					            </div>
					        </article>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script>
	$("#li-courses").addClass("active");
</script>
@endsection
