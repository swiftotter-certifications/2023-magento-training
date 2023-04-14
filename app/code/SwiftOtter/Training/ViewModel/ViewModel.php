<?php
declare(strict_types=1);
namespace SwiftOtter\Training\ViewModel;

class ViewModel implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    private string $customString;

    public function __construct(string $customString = 'default')
    {
        $this->customString = $customString;
    }

    public function getCustomString(): string
    {
        return $this->customString;
    }

    public function getListOfEUCountries(): array
    {
        return [
            'Germany',
            'Poland',
            'France',
            'UK'
        ];
    }

    public function getLazyMethod(): string
    {
        // This process takes 1 second
        sleep(1);

        return (string)microtime(true);
    }

    public function getPriceList(array $skus = []): array
    {
        $priceList = [];
        foreach ($skus as $sku) {
            $priceList[$sku] = (float)(rand(10,1000) / 100);
        }

        return $priceList;
    }
}
