<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;
use Tracy\Debugger;


class VuePresenter extends Nette\Application\UI\Presenter
{
	public function startup(): void
	{
		parent::startup();

		/**
		 * Allow CORS in development mode.
		 */
		if (!Debugger::$productionMode) {
			$this->getHttpResponse()->setHeader('Access-Control-Allow-Origin', 'http://localhost:8080');
		}
	}


	public function beforeRender(): void
	{
		parent::beforeRender();

		/**
		 * Set Webpack generated HTML as output.
		 */
		$this->template->setFile(__DIR__ . '/../../www/build.html');
	}
}
