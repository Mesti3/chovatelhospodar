<?php

declare(strict_types=1);

namespace App\ApiModule\Models;

use JsonSchema\Validator;
use Nette\SmartObject;
use Nette\Utils\Json;
use Nette\Utils\JsonException;


/**
 * Class ApiValidator
 */
class ApiValidator
{
	use SmartObject;

	/**
	 * Path to directory with JSON schema files.
	 */
	public const SCHEMA_PATH = __DIR__ . '/../schemas';


	/**
	 * @param string $jsonRequest
	 * @param string $schemaFileName
	 *
	 * @return Validator
	 * @throws JsonException
	 */
	public static function validate(string $jsonRequest, string $schemaFileName): Validator
	{
		try {
			$jsonRequest = Json::decode($jsonRequest ?: '{}');
		} catch (JsonException $e) {
			throw new JsonException('JSON does not have the correct format.');
		}

		$validator = new Validator();
		$validator->validate(
			$jsonRequest,
			(object) ['$ref' => 'file://' . realpath(self::SCHEMA_PATH . '/' . $schemaFileName)]
		);

		return $validator;
	}
}
