<?php
declare(strict_types=1);
namespace SwiftOtter\Training\Service;

class PoorQualityVendorService
{
    public function __construct()
    {
        throw new \Exception('This is a poor quality vendor');
    }

    public function getLazyService(): string
    {
        return 'string';
    }

    public function somethingElase(): string
    {
        return 'else';
    }
}
