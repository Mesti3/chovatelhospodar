<?php

declare(strict_types=1);

namespace App\ApiModule\Presenters;

use Nette;
use Tracy\Debugger;


abstract class BasePresenter extends Nette\Application\UI\Presenter
{
	/**
	 * Manual for JSON schema is available at
	 * @link https://spacetelescope.github.io/understanding-json-schema/reference/
	 */

	/**
	 * Manual for Api docs is available at @link http://apidocjs.com/
	 */

	/**
	 * Base api docs >>>
	 */

	/**
	 * @apiDefine StatusField
	 * @apiSuccess {String} status Status of request process.
	 * @apiError {String} status Status of request process.
	 */

	/**
	 * @apiDefine ErrorResponse
	 * @apiError {String} message Description of error which was found on API server.
	 */

	/**
	 * <<< Base api docs
	 */

	/**
	 * @return void
	 */
	public function startup(): void
	{
		parent::startup();

		/**
		 * Allow CORS in development mode (required for Webpack hot reload mode and apiDocs sample requests).
		 */
		if (!Debugger::$productionMode) {
			$this->getHttpResponse()->setHeader('Access-Control-Allow-Origin', '*');
			$this->getHttpResponse()->setHeader('Access-Control-Allow-Methods', 'GET,PUT,POST,DELETE');
			$this->getHttpResponse()->setHeader('Access-Control-Allow-Headers', 'Content-Type');
		}
	}


	/**
	 * @return void
	 */
	public function beforeRender(): void
	{
		parent::beforeRender();

		/**
		 * Set Webpack generated HTML as output.
		 */
		$this->template->setFile(__DIR__ . '/../../www/build.html');
	}
}
