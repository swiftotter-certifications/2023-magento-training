<?php
declare(strict_types=1);
namespace SwiftOtter\Training\Plugin;

use SwiftOtter\Training\ViewModel\ViewModel;

class ViewModelRemoveOptionFromPriceListPlugin
{
    /**
     * @param ViewModel $subject
     * @param array $skus
     * @return array
     */
    public function beforeGetPriceList(ViewModel $subject, array $skus = []): array
    {
        return [
            array_filter(array_diff($skus, ['whatever']))
        ];
    }
}
