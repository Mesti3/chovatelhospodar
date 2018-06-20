<?php

declare(strict_types=1);

namespace App\ApiModule\Presenters;

use App\ApiModule\Models\ApiResponse;


class DefaultPresenter extends BasePresenter
{
	/**
	 * @return void
	 * @throws \Nette\Application\AbortException
	 */
	public function actionDefault(): void
	{
		$response = ApiResponse::build(ApiResponse::STATUS_OK, [], 'Welcome in API!');

		$this->sendJson($response);
	}
}
