<?php
declare(strict_types=1);
namespace SwiftOtter\Training\Service;

class AddressValidationService
{
    private string $type;

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    public function validate(): string
    {
        return $this->type.' address is valid';
    }
}
