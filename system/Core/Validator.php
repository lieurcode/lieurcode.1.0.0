<?php

namespace Lieurcode\Core;

class Validator
{
    protected $data;
    protected $rules;
    protected $errors = [];

    public function __construct(array $data, array $rules)
    {
        $this->data  = $data;
        $this->rules = $rules;
    }

    public function passes()
    {
        foreach ($this->rules as $field => $rules) {
            $rules = explode('|', $rules);
            $value = trim($this->data[$field] ?? '');

            foreach ($rules as $rule) {
                if ($rule === 'required' && $value === '') {
                    $this->addError($field, 'Field wajib diisi.');
                }

                if (str_starts_with($rule, 'min:')) {
                    $min = (int) explode(':', $rule)[1];
                    if (strlen($value) < $min) {
                        $this->addError($field, "Minimal $min karakter.");
                    }
                }

                if ($rule === 'email' && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    $this->addError($field, 'Format email tidak valid.');
                }
            }
        }

        return empty($this->errors);
    }

    public function errors()
    {
        return $this->errors;
    }

    protected function addError($field, $message)
    {
        $this->errors[$field][] = $message;
    }

    public static function make(array $data, array $rules)
    {
        $validator = new self($data, $rules);

        if (!$validator->passes()) {
            throw new \Exception(json_encode($validator->errors()));
        }

        return $data;
    }
}
