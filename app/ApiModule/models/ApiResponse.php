<?php

declare(strict_types=1);

namespace App\ApiModule\Models;

use Nette\SmartObject;


/**
 * Class ApiResponse
 */
class ApiResponse
{
	use SmartObject;

	public const STATUS_OK = 'ok';

	public const STATUS_ERROR = 'error';


	/**
	 * Build simple response structure for API.
	 *
	 * @param string $status
	 * @param array  $data
	 * @param string $errorMessage
	 *
	 * @return array
	 */
	public static function build(string $status, array $data, string $errorMessage = ''): array
	{
		$result = [
			'status' => $status,
		];

		if ($errorMessage) {
			$result['message'] = $errorMessage;
		} elseif ($data) {
			$result['data'] = $data;
		}

		return $result;
	}
}
