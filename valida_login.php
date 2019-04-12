<?php 

	//variavel que verifica se a autenticação foi realizada

	$usuario_autenticado = false;

	//usuarios do sistema
	$usuarios_app = array(

		array('email' => 'adm@teste.com.br', 'senha' => '123'),
		array('email' => 'user@teste.com.br', 'senha' => 'abc'),

	);

/*	echo '<pre>';
	print_r($usuarios_app);
	echo '</pre>';
*/
	foreach ($usuarios_app as $user) {//foreach procura no array item a item

		//echo 'Usuário app: ' . $user['email'] . '/' . $user['senha'];

		$user['email'];
		$user['senha'];

		if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {

			$usuario_autenticado = true;

			}

		}

		if($usuario_autenticado) {
			echo 'usuario autenticado';
		} else {
			header('Location: index.php?login=erro');//força o redirecionamento a esta pagina em caso de erro
		}


/*
	print_r($_GET);

	echo $_GET['email'];
	echo $_GET['senha'];


	echo $_POST['email'];
	echo $_POST['senha'];

*/

 ?>