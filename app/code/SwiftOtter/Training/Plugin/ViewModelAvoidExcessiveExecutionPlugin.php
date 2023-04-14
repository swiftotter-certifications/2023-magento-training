<?php
declare(strict_types=1);
namespace SwiftOtter\Training\Plugin;

use SwiftOtter\Training\ViewModel\ViewModel;

class ViewModelAvoidExcessiveExecutionPlugin
{
    private ?string $methodOutput;

    /**
     * @param ViewModel $subject
     * @param callable $proceed
     * @return string
     */
    public function aroundGetLazyMethod(ViewModel $subject, callable $proceed): string
    {
        if (!isset($this->methodOutput)) {
            $this->methodOutput = $proceed();
        }

        return $this->methodOutput;
    }
}
