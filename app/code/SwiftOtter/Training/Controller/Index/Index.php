<?php
declare(strict_types=1);
namespace SwiftOtter\Training\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\App\ResponseFactory;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\NotFoundException;

class Index implements \Magento\Framework\App\ActionInterface
{
    /**
     * @var \Magento\Framework\Controller\ResultFactory
     */
    private ResultFactory $resultFactory;

    public function __construct(ResultFactory $resultFactory)
    {
        $this->resultFactory = $resultFactory;
    }

    /**
     * Execute action based on request and return result
     * @return ResultInterface|ResponseInterface
     * @throws NotFoundException
     */
    public function execute()
    {
        return $this->resultFactory->create(
            \Magento\Framework\Controller\ResultFactory::TYPE_PAGE
        );
    }
}
