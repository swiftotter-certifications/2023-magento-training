<?php
declare(strict_types=1);
namespace SwiftOtter\Training\ViewModel;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Catalog\Api\Data\ProductInterfaceFactory;
use SwiftOtter\Training\Service\AddressValidationService;
use SwiftOtter\Training\Service\PoorQualityVendorService;

class ViewModel implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    private PoorQualityVendorService $poorQualityVendorService;
    private string $customString;
    /**
     * @var \Magento\Catalog\Api\Data\ProductInterfaceFactory
     */
    private ProductInterfaceFactory $productFactory;
    /**
     * @var \SwiftOtter\Training\Service\AddressValidationService
     */
    private AddressValidationService $addressValidationService;

    public function __construct(
        PoorQualityVendorService $poorQualityVendorService,
        ProductInterfaceFactory $productFactory,
        AddressValidationService $addressValidationService,
        string $customString = 'default'
    ) {
        $this->poorQualityVendorService = $poorQualityVendorService;
        $this->customString = $customString;
        $this->productFactory = $productFactory;
        $this->addressValidationService = $addressValidationService;
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
        #  sleep(1);

        #  $this->poorQualityVendorService->getLazyService();

        return (string)microtime(true);
    }

    public function getPriceList(array $skus = []): array
    {
        $priceList = [];
        foreach ($skus as $sku) {
            $priceList[$sku] = (float)(rand(10, 1000) / 100);
        }

        return $priceList;
    }

    public function getProducts(): array
    {
        return [
            $this->productFactory->create()->setName('Product 1')->setPrice('12.34'),
            $this->productFactory->create()->setName('Product 2')->setPrice('23.45'),
            $this->productFactory->create()->setName('Product 3')->setPrice('34.56'),
        ];
    }

    public function isAddressValid(): string
    {
        return $this->addressValidationService->validate();
    }
}
