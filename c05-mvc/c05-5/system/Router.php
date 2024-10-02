<?php

namespace system;


class Router {

	/**
	*  1. gestion d'un controller par défaut
	*  2. nettoyage de l'url
	*  3. gestion du controller
	*  4. gestion de la méthode du controller
	*  5. gestion des paramètres
	*/


	public static function run(){

		#.1

		if(empty($_GET['url'])){
			require PATH_ROOT."/app/controllers/accueil.php";
			$controller =  new \app\controllers\Accueil();
			$controller->index();
			exit;
		}
		
		#.2
		$url =  rtrim($_GET['url'],'/');
		$url = explode('/', $url);

		#.3
		$controllerName =  array_shift($url);
		$file =  PATH_ROOT."/app/controllers/".$controllerName.".php";
		if(file_exists($file)){
			require $file;
			$controllerName = '\app\controllers\\'.ucfirst($controllerName);
			$controller =  new $controllerName();
		}else{
			require PATH_ROOT."/app/controllers/error.php";
			$controller =  new \app\controllers\Error();
			$controller->index();
			exit;
		}

		#.4
		if(!empty($url)){
			$methodName = array_shift($url);
			$method =  method_exists($controller, $methodName ) ? $methodName  : 'index';
		}else{
			$method = 'index';
		}

		#.5
		$params =  !empty($url) ? array_values($url) : [];
		call_user_func_array([$controller,$method], $params);


	}



}# end class