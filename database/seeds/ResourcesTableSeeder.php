<?php

use Illuminate\Database\Seeder;

class ResourcesTableSeeder extends Seeder
{

	public function run()
	{
		$resources = [
			['id' => 1, 'name' => 'Introducción', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=kllWxQ_6mVw', 'type_id' => 3, 'lesson_id' => 1],
			['id' => 2, 'name' => 'Menú de Inicio', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=4MUZbyk0tNA', 'type_id' => 3, 'lesson_id' => 2],
			['id' => 3, 'name' => 'Conceptos Fundamentales', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=AfU7RNn27Mg', 'type_id' => 3, 'lesson_id' => 3],
			['id' => 4, 'name' => 'Cinta de Opciones', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=ZLWJgCgPZFw', 'type_id' => 3, 'lesson_id' => 4],
			['id' => 5, 'name' => 'Cuadro de Nombres', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=DsEuHF2y3O0', 'type_id' => 3, 'lesson_id' => 5],
			['id' => 6, 'name' => 'Barra de Acceso Rápida', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=ruktFrKit_Y', 'type_id' => 3, 'lesson_id' => 6],
			['id' => 7, 'name' => 'Barra de Fórmulas', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=DvILGrcKyI8', 'type_id' => 3, 'lesson_id' => 7],
			['id' => 8, 'name' => 'Barra de Estado', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=v54hamvEW5k', 'type_id' => 3, 'lesson_id' => 8],
			['id' => 9, 'name' => 'Ingresar Datos', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=944U9U9QvDk', 'type_id' => 3, 'lesson_id' => 9],
			['id' => 10, 'name' => 'Relleno Rápido y Autorelleno', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=EKvwW7AyFCw', 'type_id' => 3, 'lesson_id' => 10],
			['id' => 11, 'name' => 'Listas Personalizadas', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=V0LOvk0Aj0w', 'type_id' => 3, 'lesson_id' => 11],
			['id' => 12, 'name' => 'Fórmulas y Funciones', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=CG4kXxvOmco', 'type_id' => 3, 'lesson_id' => 12],
			['id' => 13, 'name' => 'Funciones', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=qCT0kvOGW7w', 'type_id' => 3, 'lesson_id' => 13],
			['id' => 14, 'name' => 'Promedio, Contar y Contara', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=1u-QQDbq3pk', 'type_id' => 3, 'lesson_id' => 14],
			['id' => 15, 'name' => 'Referencias Relativas y Absolutas', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=K5s92j9fW_E', 'type_id' => 3, 'lesson_id' => 15],
			['id' => 16, 'name' => 'Formatos de Celda', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=fKbiTWtUb2Y', 'type_id' => 'https://www.youtube.com/watch?v=sGdpkoEq0Po', 'lesson_id' => 16],
			['id' => 17, 'name' => 'Formatos Numéricos', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=lX6_kY0kfdo', 'type_id' => 'https://www.youtube.com/watch?v=37HNLMFelno', 'lesson_id' => 17],
			['id' => 18, 'name' => 'Porcentajes y Decimales', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=fKbiTWtUb2Y', 'type_id' => 3, 'lesson_id' => 18],
			['id' => 19, 'name' => 'Copiar Formatos de Celda', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=lX6_kY0kfdo', 'type_id' => 3, 'lesson_id' => 19],
			['id' => 20, 'name' => 'Modificar Tamaño de Celda', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=pJayO9Aynt0', 'type_id' => 3, 'lesson_id' => 20],
			['id' => 21, 'name' => 'Ocultar y Bloquear Celdas', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=28pYnnZnmrc', 'type_id' => 3, 'lesson_id' => 21],
			['id' => 22, 'name' => 'Ordenar Celdas', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=ZIiWInMKeKQ', 'type_id' => 3, 'lesson_id' => 22],
			['id' => 23, 'name' => 'Insertar y Eliminar Celdas', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=DB1CEHkNulQ', 'type_id' => 3, 'lesson_id' => 23],
			['id' => 24, 'name' => 'Gráficas parte I', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=ngPvxpXbeWg', 'type_id' => 3, 'lesson_id' => 24],
			['id' => 25, 'name' => 'Gráficas parte II', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=d4FUltpmrxk', 'type_id' => 3, 'lesson_id' => 25],
			['id' => 26, 'name' => 'Impresión', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=d5mk54S8jRY', 'type_id' => 3, 'lesson_id' => 26],
			['id' => 27, 'name' => 'Introducción', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=LDVyVBY55Ck', 'type_id' => 3, 'lesson_id' => 27],
			['id' => 28, 'name' => 'Valores Lógicos y Operadores de Comparación', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=K2ukQFrymLE', 'type_id' => 3, 'lesson_id' => 28],
			['id' => 29, 'name' => 'Función SI', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=2d6MF1r3RXA', 'type_id' => 3, 'lesson_id' => 29],
			['id' => 30, 'name' => 'Función SI Anidada', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=GHSsJMMhXw8', 'type_id' => 3, 'lesson_id' => 30],
			['id' => 31, 'name' => 'Funciones O e Y', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=cP-AJr1tGeU', 'type_id' => 3, 'lesson_id' => 31],
			['id' => 32, 'name' => 'BuscarV y BuscarH Coincidencia Exacta', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=AviJf58kt8E', 'type_id' => 3, 'lesson_id' => 32],
			['id' => 33, 'name' => 'BuscarV y BuscarH Coincidencia Aproximada', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=QVM5whDg4ko', 'type_id' => 3, 'lesson_id' => 33],
			['id' => 34, 'name' => 'Contar.SI, Sumar.SI, Promedio.SI', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=TdLWT6PyqWA', 'type_id' => 3, 'lesson_id' => 34],
			['id' => 35, 'name' => 'Contar.SI.Conjunto', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=4LTxuti8s7c', 'type_id' => 3, 'lesson_id' => 35],
			['id' => 36, 'name' => 'SumaProducto y K.Esimo', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=IisTR3QVkgk', 'type_id' => 3, 'lesson_id' => 36],
			['id' => 37, 'name' => 'Funciones de Texto parte I', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=HiCblMNN79w', 'type_id' => 3, 'lesson_id' => 37],
			['id' => 38, 'name' => 'Funciones de Texto parte II', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=oCMkNu9C21Y', 'type_id' => 3, 'lesson_id' => 38],
			['id' => 39, 'name' => 'Funciones de Fecha', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=edOhAOYGl54', 'type_id' => 3, 'lesson_id' => 39],
			['id' => 40, 'name' => 'Validación de Datos', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=niGNEdALp0w', 'type_id' => 3, 'lesson_id' => 40],
			['id' => 41, 'name' => 'Formato Condicional', 'description' => '', 'url' => 'https://www.youtube.com/watch?v=rjjEN2FCnyg', 'type_id' => 3, 'lesson_id' => 41]
		];
		\DB::table('resources')->insert($resources);
	}
}