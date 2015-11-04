<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{

	public function run()
	{
		$courses = [
			['id' => 1, 'name' => 'Curso de Excel Básico', 'description' => 'El curso es completo e incluye videos y evaluaciones. No requieres experiencia previa. Está orientado a cualquiera que desee aprender desde cero. Utilizaremos la plataforma de office 2013. Pero la mayoría de las funciones también sirven para versiones anteriores. Igualmente lo recomiendo a quienes que, aunque saben un poco de Excel, no han seguido un aprendizaje sistemático. De seguro aprenderán algo nuevo. En este curso aprenderás cada aspecto del entorno de Excel. Implementaras fórmulas. Graficarás datos de manera sencilla y rápida. Conocerás la forma correcta de imprimir para dejar toda la información bien distribuida entre tus páginas. Aprenderás las combinaciones de teclas más comunes que facilitan las acciones repetitivas. No descuidaremos los detalles visuales. Tus planillas se verán atractivas y fáciles de leer. En el sitio celdactiva.com podrás ver una versión impresa de cada capítulo, descargar archivos y realizar evaluaciones para medir tus avances.', 'awarded_points' => 100, 'redeemable_points' => 100, 'rating' => 0, 'likes' => 0, 'active' => 1, 'badge_id' => 31, 'team_id' => null, 'league_id' => null, 'subject_id' => 1, 'parent_id' => null],
			['id' => 2, 'name' => 'Curso de Excel Intermedio', 'description' => 'Aprende a utilizar más de 30 funciones. Ejercicios prácticos y descargables desde el sitio de Celda Activa E-learning. Entre las funciones que aprenderás está la SI, SI anidada, BUSCARV, FECHA, DIAS.LAB, CONCATENAR, etc. Además prenderás a trabajar con tablas y formatos condicionales. Finalmente tendrás una introducción a Tablas Dinámicas y Macros.', 'awarded_points' => 100, 'redeemable_points' => 100, 'rating' => 0, 'likes' => 0, 'active' => 1, 'badge_id' => 32, 'team_id' => null, 'league_id' => null, 'subject_id' => 1, 'parent_id' => 1]
		];
		\DB::table('courses')->insert($courses);
	}
}