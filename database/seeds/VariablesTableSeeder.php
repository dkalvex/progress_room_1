<?php

use Illuminate\Database\Seeder;

class VariablesTableSeeder extends Seeder
{

	public function run()
	{
		$variables = [
			['id' => 1, 'name' => 'Cursos'],
			['id' => 2, 'name' => 'Eventos'],
			['id' => 3, 'name' => 'Misiones'],
			['id' => 4, 'name' => 'Torneos'],
			['id' => 5, 'name' => 'Likes'],
			['id' => 6, 'name' => 'Logros'],
			['id' => 7, 'name' => 'Perfil'],
			['id' => 8, 'name' => 'Notas'],
			['id' => 9, 'name' => 'Comentarios']
		];
		\DB::table('variables')->insert($variables);
	}
}