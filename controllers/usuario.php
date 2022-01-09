<?php

	class UsuarioController{

		public function mostrarTodos(){
			require_once 'models/usuario.php';

			$usuario = new Usuario();
			$todosLosUsuarios = $usuario->conseguirTodos();

			require_once 'views/usuarios/mostrarTodos.php';
		}

		public function crearUsuarios(){
			require_once 'views/usuarios/crear.php';
		}
	}
?>