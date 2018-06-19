<?php

declare(strict_types=1);

namespace App\ApiModule\Presenters;

use Nette\Application\ApplicationException;


class SimpleAjaxPresenter extends BasePresenter
{
	/**
	 * @api            {get} /simple-ajax/test/ Test Nette connection
	 * @apiDescription This method is only for testing.
	 * @apiVersion     1.0.0
	 * @apiName        Test
	 * @apiGroup       SimpleAjax
	 *
	 * @apiSuccess {String} output Test output created by Nette.
	 * @apiUse         ErrorResponse
	 */
	public function actionTest(): void
	{
		$randomNum = rand(1, 100);

		try {
			/**
			 * Try simulate error
			 */
			if ($randomNum >= 1 && $randomNum <= 20) {
				throw new ApplicationException('Test exception was thrown :)');
			}

			$response = [
				'output' => 'All works great! #' . $randomNum,
			];
		} catch (ApplicationException $e) {
			$response = [
				'message' => $e->getMessage(),
			];
		}

		$this->sendJson($response);
	}
}
