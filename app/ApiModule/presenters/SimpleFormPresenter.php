<?php

declare(strict_types=1);

namespace App\ApiModule\Presenters;

use App\ApiModule\Models\ApiResponse;
use App\ApiModule\Models\ApiValidator;
use Nette\Utils\JsonException;


class SimpleFormPresenter extends BasePresenter
{
	/**
	 * @api              {post} /simple-form/test/ Test Nette form process
	 * @apiVersion       1.0.0
	 * @apiName          Test
	 * @apiGroup         SimpleForm
	 * @apiUse           StatusField
	 *
	 * @apiParam (data) {String{1..50}} name Full name of user.
	 * @apiParam (data) {String} email E-mail of user.
	 * @apiParam (data) {String{1..500}} [message] Something about user.
	 *
	 * @apiSuccess {String} output Your POST or result of form validation.
	 *
	 * @apiUse           ErrorResponse
	 *
	 * @apiSampleRequest off
	 */

	/**
	 * @return void
	 * @throws \Nette\Application\AbortException
	 */
	public function actionTest(): void
	{
		try {
			$jsonRequest = $this->getHttpRequest()->getRawBody();

			$apiValidator = ApiValidator::validate($jsonRequest, 'SimpleForm.json');

			if (!$apiValidator->isValid()) {
				$error = $apiValidator->getErrors()[0];

				throw new JsonException(sprintf('[%s] %s', $error['property'], $error['message']));
			}

			$response = ApiResponse::build(ApiResponse::STATUS_OK, ['output' => $jsonRequest]);
		} catch (\Exception $e) {
			$response = ApiResponse::build(ApiResponse::STATUS_ERROR, [], $e->getMessage());
		}

		$this->sendJson($response);
	}
}
