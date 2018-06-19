<?php

declare(strict_types=1);

namespace App\VueModule\Presenters;

use Nette;


class VuePresenter extends Nette\Application\UI\Presenter
{
	/**
	 * Action will load generated HTML contains Vue application.
	 */
	public function actionRender(): void
	{
		/**
		 * Set Webpack generated HTML as output.
		 */
		$this->template->setFile(__DIR__ . '/../../../www/build.html');
	}
}
