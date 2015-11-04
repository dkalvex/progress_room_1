<?php

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{

	public function run()
	{
		$modules = [
			['id' => 1, 'name' => 'Introducción', 'description' => '', 'order' => 1, 'questions' => 10, 'required_score' => 7, 'attempts' => 3, 'course_id' => 1],
			['id' => 2, 'name' => 'Entorno Gráfico', 'description' => '', 'order' => 2, 'questions' => 10, 'required_score' => 7, 'attempts' => 3, 'course_id' => 1],
			['id' => 3, 'name' => 'Manejo de Datos', 'description' => '', 'order' => 3, 'questions' => 10, 'required_score' => 7, 'attempts' => 3, 'course_id' => 1],
			['id' => 4, 'name' => 'Funciones Básicas', 'description' => '', 'order' => 4, 'questions' => 10, 'required_score' => 7, 'attempts' => 3, 'course_id' => 1],
			['id' => 5, 'name' => 'Formato de Datos', 'description' => '', 'order' => 5, 'questions' => 10, 'required_score' => 7, 'attempts' => 3, 'course_id' => 1],
			['id' => 6, 'name' => 'Manejo de Celdas', 'description' => '', 'order' => 6, 'questions' => 10, 'required_score' => 7, 'attempts' => 3, 'course_id' => 1],
			['id' => 7, 'name' => 'Reportes', 'description' => '', 'order' => 7, 'questions' => 10, 'required_score' => 7, 'attempts' => 3, 'course_id' => 1],
			['id' => 8, 'name' => 'Introducción', 'description' => '', 'order' => 1, 'questions' => 10, 'required_score' => 7, 'attempts' => 3, 'course_id' => 2],
			['id' => 9, 'name' => 'Funciones de Búsqueda', 'description' => '', 'order' => 2, 'questions' => 10, 'required_score' => 7, 'attempts' => 3, 'course_id' => 2],
			['id' => 10, 'name' => 'Uso de Función SI', 'description' => '', 'order' => 3, 'questions' => 10, 'required_score' => 7, 'attempts' => 3, 'course_id' => 2],
			['id' => 11, 'name' => 'Funciones de Texto', 'description' => '', 'order' => 4, 'questions' => 10, 'required_score' => 7, 'attempts' => 3, 'course_id' => 2],
			['id' => 12, 'name' => 'Condicionales', 'description' => '', 'order' => 5, 'questions' => 10, 'required_score' => 7, 'attempts' => 3, 'course_id' => 2]
		];
		\DB::table('modules')->insert($modules);
	}
}