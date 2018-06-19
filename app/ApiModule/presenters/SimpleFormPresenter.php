<?php

declare(strict_types=1);

namespace App\ApiModule\Presenters;

class SimpleFormPresenter extends BasePresenter
{
	/**
	 * @api            {post} /simple-form/test/ Test Nette form process
	 * @apiVersion     1.0.0
	 * @apiName        Test
	 * @apiGroup       SimpleForm
	 *
	 * @apiParam   {String{..50}} name Full name of user.
	 * @apiParam   {String{..255}} email E-mail of user.
	 * @apiParam   {String{..500}} [message] Something about user.
	 *
	 * @apiSuccess {String} output Result of form validation on API server.
	 * @apiUse         ErrorResponse
	 */
	public function actionTest(): void
	{
		$this->sendJson($this->getHttpRequest()->getPost());
	}
}
