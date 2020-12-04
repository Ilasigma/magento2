<?php
namespace Sigma\RequestFlow\Controller\Page;

use Magento\Framework\App\Action\Action;

class CustomNoRoute extends Action{
    public function execute()
    {
        echo "This is my no route 404 page.";   // TODO: Implement execute() method.
    }
}