<?php

declare(strict_types=1);

namespace App;

use Nette;
use Nette\Application\Routers\Route;
use Nette\Application\Routers\RouteList;


class RouterFactory
{
	use Nette\StaticClass;


	public static function createRouter(): Nette\Application\IRouter
	{
		$router = new RouteList();

		$api = new RouteList('Api');
		$api[] = new Route('/api/<presenter>/<action>[/<id>]', 'Default:default');
		$router[] = $api;

		$vue = new RouteList('Vue');
		$vue[] = new Route('/<presenter>/<action>', 'Vue:render');
		$router[] = $vue;

		return $router;
	}
}
