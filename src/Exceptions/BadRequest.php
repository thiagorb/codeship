<?php

namespace Thiagorb\Codeship\Exceptions;

class BadRequest extends \Exception
{
    /**
     * @var string[]
     */
    protected $errors;

    /**
     * @param string[] $errors Errors
     */
    public function __construct(array $errors)
    {
        parent::__construct();
        $this->errors = $errors;
    }

    /**
     * @return string[]
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
}