<?php

declare(strict_types=1);

namespace App\VueModule\Presenters;

use Nette;
use Nette\Application\Responses\TextResponse;


class VuePresenter extends Nette\Application\UI\Presenter
{
	/**
	 * Action will load generated HTML contains Vue application.
	 * @throws Nette\Application\AbortException
	 */
	public function actionRender(): void
	{
		/**
		 * Set Webpack generated HTML as output.
		 */
		$this->sendResponse(new TextResponse(Nette\Utils\FileSystem::read(__DIR__ . '/../../../www/build.html')));
	}
}
