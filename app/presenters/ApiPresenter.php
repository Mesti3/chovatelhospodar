<?php

declare(strict_types=1);

namespace App\Presenters;

class ApiPresenter extends VuePresenter
{
	/**
	 * @return void
	 * @throws \Exception
	 */
	public function handleAjaxTest(): void
	{
		$this->sendJson('All works great! #' . random_int(1, 99));
	}


	/**
	 * @return void
	 * @throws \Exception
	 */
	public function handleFormTest(): void
	{
		$this->sendJson($this->getHttpRequest()->getPost());
	}
}
