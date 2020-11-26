<?php
/**
 * Created by PhpStorm.
 * User: ilavatimakwana
 * Date: 26/11/20
 * Time: 6:21 PM
 */

namespace Sigma\RequestFlow\Controller\Page;
use Magento\Framework\App\Router\NoRouteHandlerInterface;

class CustomNoRouteHandler implements NoRouteHandlerInterface
{
     public function process(\Magento\Framework\App\RequestInterface $request){
         $request->setRouteName('mage')->setControllerName('CustomNoRoute')->setActionName('page');

         return true;

     }
}