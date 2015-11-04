<?php

use Illuminate\Database\Seeder;

class LessonsTableSeeder extends Seeder
{

	public function run()
	{
		$lessons = [
			['id' => 1, 'name' => 'Introducción', 'description' => '', 'order' => 1, 'module_id' => 1],
			['id' => 2, 'name' => 'Menú de Inicio', 'description' => '', 'order' => 2, 'module_id' => 1],
			['id' => 3, 'name' => 'Conceptos Fundamentales', 'description' => '', 'order' => 3, 'module_id' => 1],
			['id' => 4, 'name' => 'Cinta de Opciones', 'description' => '', 'order' => 1, 'module_id' => 2],
			['id' => 5, 'name' => 'Cuadro de Nombres', 'description' => '', 'order' => 2, 'module_id' => 2],
			['id' => 6, 'name' => 'Barra de Acceso Rápida', 'description' => '', 'order' => 3, 'module_id' => 2],
			['id' => 7, 'name' => 'Barra de Fórmulas', 'description' => '', 'order' => 4, 'module_id' => 2],
			['id' => 8, 'name' => 'Barra de Estado', 'description' => '', 'order' => 5, 'module_id' => 2],
			['id' => 9, 'name' => 'Ingresar Datos', 'description' => '', 'order' => 1, 'module_id' => 3],
			['id' => 10, 'name' => 'Relleno Rápido y Autorelleno', 'description' => '', 'order' => 2, 'module_id' => 3],
			['id' => 11, 'name' => 'Listas Personalizadas', 'description' => '', 'order' => 3, 'module_id' => 3],
			['id' => 12, 'name' => 'Fórmulas y Funciones', 'description' => '', 'order' => 1, 'module_id' => 4],
			['id' => 13, 'name' => 'Funciones', 'description' => '', 'order' => 2, 'module_id' => 4],
			['id' => 14, 'name' => 'Promedio, Contar y Contara', 'description' => '', 'order' => 3, 'module_id' => 4],
			['id' => 15, 'name' => 'Referencias Relativas y Absolutas', 'description' => '', 'order' => 4, 'module_id' => 4],
			['id' => 16, 'name' => 'Formatos de Celda', 'description' => '', 'order' => 1, 'module_id' => 5],
			['id' => 17, 'name' => 'Formatos Numéricos', 'description' => '', 'order' => 2, 'module_id' => 5],
			['id' => 18, 'name' => 'Porcentajes y Decimales', 'description' => '', 'order' => 3, 'module_id' => 5],
			['id' => 19, 'name' => 'Copiar Formatos de Celda', 'description' => '', 'order' => 4, 'module_id' => 5],
			['id' => 20, 'name' => 'Modificar Tamaño de Celda', 'description' => '', 'order' => 1, 'module_id' => 6],
			['id' => 21, 'name' => 'Ocultar y Bloquear Celdas', 'description' => '', 'order' => 2, 'module_id' => 6],
			['id' => 22, 'name' => 'Ordenar Celdas', 'description' => '', 'order' => 3, 'module_id' => 6],
			['id' => 23, 'name' => 'Insertar y Eliminar Celdas', 'description' => '', 'order' => 4, 'module_id' => 6],
			['id' => 24, 'name' => 'Gráficas parte I', 'description' => '', 'order' => 1, 'module_id' => 7],
			['id' => 25, 'name' => 'Gráficas parte II', 'description' => '', 'order' => 2, 'module_id' => 7],
			['id' => 26, 'name' => 'Impresión', 'description' => '', 'order' => 3, 'module_id' => 7],
			['id' => 27, 'name' => 'Introducción', 'description' => '', 'order' => 1, 'module_id' => 8],
			['id' => 28, 'name' => 'Valores Lógicos y Operadores de Comparación', 'description' => '', 'order' => 2, 'module_id' => 8],
			['id' => 29, 'name' => 'Función SI', 'description' => '', 'order' => 3, 'module_id' => 8],
			['id' => 30, 'name' => 'Función SI Anidada', 'description' => '', 'order' => 4, 'module_id' => 8],
			['id' => 31, 'name' => 'Funciones O e Y', 'description' => '', 'order' => 1, 'module_id' => 9],
			['id' => 32, 'name' => 'BuscarV y BuscarH Coincidencia Exacta', 'description' => '', 'order' => 2, 'module_id' => 9],
			['id' => 33, 'name' => 'BuscarV y BuscarH Coincidencia Aproximada', 'description' => '', 'order' => 3, 'module_id' => 9],
			['id' => 34, 'name' => 'Contar.SI, Sumar.SI, Promedio.SI', 'description' => '', 'order' => 1, 'module_id' => 10],
			['id' => 35, 'name' => 'Contar.SI.Conjunto', 'description' => '', 'order' => 2, 'module_id' => 10],
			['id' => 36, 'name' => 'SumaProducto y K.Esimo', 'description' => '', 'order' => 3, 'module_id' => 10],
			['id' => 37, 'name' => 'Funciones de Texto parte I', 'description' => '', 'order' => 1, 'module_id' => 11],
			['id' => 38, 'name' => 'Funciones de Texto parte II', 'description' => '', 'order' => 2, 'module_id' => 11],
			['id' => 39, 'name' => 'Funciones de Fecha', 'description' => '', 'order' => 3, 'module_id' => 11],
			['id' => 40, 'name' => 'Validación de Datos', 'description' => '', 'order' => 1, 'module_id' => 12],
			['id' => 41, 'name' => 'Formato Condicional', 'description' => '', 'order' => 2, 'module_id' => 12]
		];
		\DB::table('lessons')->insert($lessons);
	}
}