<?php

declare(strict_types=1);

namespace App\ApiModule\Presenters;

use Nette;
use Tracy\Debugger;


abstract class BasePresenter extends Nette\Application\UI\Presenter
{
	/**
	 * @apiDefine ErrorResponse
	 * @apiError  {String} message Description of error which was found on API server.
	 */

	public function startup(): void
	{
		parent::startup();

		/**
		 * Allow CORS in development mode (required for Webpack hot reload mode and apiDocs sample requests).
		 */
		if (!Debugger::$productionMode) {
			$this->getHttpResponse()->setHeader('Access-Control-Allow-Origin', '*');
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
