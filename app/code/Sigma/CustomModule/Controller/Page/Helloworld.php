<?php
namespace Sigma\CustomModule\Controller\Page;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Sigma\CustomModule\Api\PencilInterface;
//use Sigma\CustomModule\NotMagento\PencilInterface;
//use Sigma\CustomModule\Model\PencilFactroy;
//use Magento\Vault\Api\PaymentTokenManagementInterface;
use Magento\Catalog\Model\ProductFactory;

class Helloworld extends \Magento\Framework\App\Action\Action{

    protected $pencilInterface;
    protected $ProductRepositoryInterface;
//    protected $PaymentTokenManagementInterface;
//    protected $PencilFactroy;
    protected $ProductFactory;

    public function __construct(Context $context,
                                PencilInterface $pencilInterface,
                                ProductRepositoryInterface $ProductRepositoryInterface,
                                ProductFactory $productFactory
//                                /*PencilFactroy $PencilFactroy
//                                PaymentTokenManagementInterface $PaymentTokenManagementInterface
                                )
    {
        $this->pencilInterface=$pencilInterface;
        $this->ProductRepositoryInterface=$ProductRepositoryInterface;
        parent::__construct($context);
        $this->ProductFactory=$productFactory;
     //   $this->PencilFactroy=$PencilFactroy;
        //$this->PaymentTokenManagementInterface=$PaymentTokenManagementInterface;*/
    }

    public function execute()
    {
    // echo $this->pencilInterface->getPencilType();   // TODO: Implement execute() method.
//        echo get_class($this->ProductRepositoryInterface);
//            $product=$this->ProductFactory->create()->load(1);
//            $product->setName("Iphone 6");
//            $productName=$product->getName();
//            echo $productName;
        echo "Main function"."</br>";
    }


}