<?php
namespace Ila\Cms\Controller\Index;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Action;
class Index extends Action{
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);   // TODO: Implement execute() method.
    }
}