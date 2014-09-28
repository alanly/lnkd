<?php namespace App;

use App\Exceptions\MissingValidationRuleException;
use App\Exceptions\MissingValidatorInstanceException;

use Illuminate\Database\Eloquent\Model;
use Validator;

class ValidatedModel extends Model {

	protected $rules;
	protected $validator;

	public function save(array $attributes = [])
	{
		if (! $this->isValid()) return false;

		return parent::save($attributes);
	}

	public function isValid()
	{
		if (! $this->rules) throw new MissingValidationRuleException();

		return $this->validateInstance();
	}

	public function getErrors()
	{
		if (! $this->validator) throw new MissingValidatorInstanceException();

		return $this->validator->errors();
	}

	protected function getParsedRules()
	{
		$parsedRules = [];

		foreach ($this->rules as $field => $rule)
		{
			// Replace '<id>' with existing ID
			if (str_contains($rule, '<id>'))
			{
				$id = $this->exists ? $this->getAttribute($this->primaryKey) : '';
				$rule = str_replace('<id>', $id, $rule);
			}

			$parsedRules[$field] = $rule;
		}

		return $parsedRules;
	}

	private function validateInstance()
	{
		$this->validator = Validator::make(
			$this->getAttributes(),
			$this->getParsedRules()
		);

		return $this->validator->passes();
	}
	
}
