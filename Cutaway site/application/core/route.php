<?php

/*
Класс-маршрутизатор для определения запрашиваемой страницы.
> цепляет классы контроллеров и моделей;
> создает экземпляры контролеров страниц и вызывает действия этих контроллеров.
*/
class Route
{

	static function start()
	{
		// контроллер и действие по умолчанию
		$controller_name = 'Main';
		$action_name = 'index';
		
		$routes = explode('/', $_SERVER['REQUEST_URI']);

		// получаем имя контроллера
		if ( !empty($routes[1]) )
		{	
			$controller_name = $routes[1];
		}
		
		// получаем имя экшена
		if ( !empty($routes[2]) )
		{
			$action_name = $routes[2];
		}

		// добавляем префиксы
		$model_name = $controller_name . "_Model";
		$controller_name = $controller_name."Controller";
		$action_name = 'action_'.$action_name;

		$model_file = strtolower($model_name).'.php';

		$model_path = "application/models/".$model_file;
		if(file_exists($model_path))
			include "application/models/".$model_file;

        $controller_file = explode("controller", strtolower($controller_name));
        $controller_file = $controller_file[0] . ".php";

		// подцепляем файл с классом контроллера
		$controller_path = "application/controllers/".$controller_file;

        if(file_exists($controller_path))
            include "application/controllers/".$controller_file;
		else
            Route::ErrorHandler();
		
		// создаем контроллер
		$controller = new $controller_name;
		$action = $action_name;

		if(method_exists($controller, $action))
			// вызываем действие контроллера
			$controller->$action();
		else
		    Route::ErrorHandler();
	}

	static function ErrorHandler()
    {
        include "application/controllers/404.php";

        $controller = new ErrorController();
        $controller->action_index();

        die;
    }
}
