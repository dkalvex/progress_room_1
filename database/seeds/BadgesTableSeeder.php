<?php

use Illuminate\Database\Seeder;

class BadgesTableSeeder extends Seeder
{

	public function run()
	{
		$badges = [
			['id' => 1, 'name' => 'Modelo no modelo', 'description' => '', 'image' => 'photo.png', 'league_id' => null],
			['id' => 2, 'name' => 'Llena formularios', 'description' => '', 'image' => 'profile.png', 'league_id' => null],
			['id' => 3, 'name' => 'Foto familiar', 'description' => '', 'image' => 'family.png', 'league_id' => null],
			['id' => 4, 'name' => 'Publicador de logros', 'description' => '', 'image' => 'achiever.png', 'league_id' => null],
			['id' => 5, 'name' => 'Publicador de logros x5', 'description' => '', 'image' => 'achieverx5.png', 'league_id' => null],
			['id' => 6, 'name' => 'Publicador de logros x10', 'description' => '', 'image' => 'achieverx10.png', 'league_id' => null],
			['id' => 7, 'name' => 'Publicador de logros x20', 'description' => '', 'image' => 'achieverx20.png', 'league_id' => null],
			['id' => 8, 'name' => 'Buscador de conocimiento', 'description' => '', 'image' => 'student.png', 'league_id' => null],
			['id' => 9, 'name' => 'Buscador de conocimiento x5', 'description' => '', 'image' => 'studentx5.png', 'league_id' => null],
			['id' => 10, 'name' => 'Buscador de conocimiento x10', 'description' => '', 'image' => 'studentx10.png', 'league_id' => null],
			['id' => 11, 'name' => 'Buscador de conocimiento x20', 'description' => '', 'image' => 'studentx20.png', 'league_id' => null],
			['id' => 12, 'name' => 'Estudiante destacado', 'description' => '', 'image' => 'best.png', 'league_id' => null],
			['id' => 13, 'name' => 'Estudiante destacado x5', 'description' => '', 'image' => 'bestx5.png', 'league_id' => null],
			['id' => 14, 'name' => 'Estudiante destacado x10', 'description' => '', 'image' => 'bestx10.png', 'league_id' => null],
			['id' => 15, 'name' => 'Estudiante destacado x20', 'description' => '', 'image' => 'bestx20.png', 'league_id' => null],
			['id' => 16, 'name' => 'Retroalimentador', 'description' => '', 'image' => 'feedbacker.png', 'league_id' => null],
			['id' => 17, 'name' => 'Animador', 'description' => '', 'image' => 'liker.png', 'league_id' => null],
			['id' => 18, 'name' => 'Un escalón más arriba', 'description' => '', 'image' => 'promotion.png', 'league_id' => null],
			['id' => 19, 'name' => 'Empleado del mes', 'description' => '', 'image' => 'month.png', 'league_id' => null],
			['id' => 20, 'name' => 'Empleado del mes x5', 'description' => '', 'image' => 'monthx5.png', 'league_id' => null],
			['id' => 21, 'name' => 'Empleado del mes x10', 'description' => '', 'image' => 'monthx10.png', 'league_id' => null],
			['id' => 22, 'name' => 'Empleado del año', 'description' => '', 'image' => 'year.png', 'league_id' => null],
			['id' => 23, 'name' => 'Empleado del año x3', 'description' => '', 'image' => 'yearx3.png', 'league_id' => null],
			['id' => 24, 'name' => 'Empleado del año x5', 'description' => '', 'image' => 'yearx5.png', 'league_id' => null],
			['id' => 25, 'name' => 'Aniversario', 'description' => '', 'image' => 'oneyear.png', 'league_id' => null],
			['id' => 26, 'name' => 'Quinquenio', 'description' => '', 'image' => 'fiveyear.png', 'league_id' => null],
			['id' => 27, 'name' => 'Década', 'description' => '', 'image' => 'tenyear.png', 'league_id' => null],
			['id' => 28, 'name' => 'Doble dígito', 'description' => '', 'image' => 'doubleyear.png', 'league_id' => null],
			['id' => 29, 'name' => 'Excelente desempeño', 'description' => '', 'image' => 'excellent.png', 'league_id' => null],
			['id' => 30, 'name' => 'Buen desempeño', 'description' => '', 'image' => 'good.png', 'league_id' => null],
		];

		\DB::table('badges')->insert($badges);
	}
}