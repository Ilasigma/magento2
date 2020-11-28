<?php
namespace Sigma\CustomModule\Plugin;

//use Magento\Catalog\Model\Product;
/**
 * Created by PhpStorm.
 * User: ilavatimakwana
 * Date: 28/11/20
 * Time: 6:48 PM
 */
class PluginSolution
{
    public function beforeExecute(\Sigma\CustomModule\Controller\Page\Helloworld $subject){
      echo "before execute sort order 10"."</br>";
    }

    public function afterExecute(\Sigma\CustomModule\Controller\Page\Helloworld $subject){
        echo "after execute sort order 10"."</br>";
    }

    public function aroundExecute(\Sigma\CustomModule\Controller\Page\Helloworld $subject, callable $proceed){
        echo "before proceed sort order 10"."</br>";
        $proceed();
        echo "after proceed sort order 10"."</br>";
    }

//   public function beforeSetName(\Magento\Catalog\Model\Product $subject, $name){
//       return "Before Plugin ".$name;
//   }
//    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result){
//        return $result." after Plug in";
//    }
//       public function aroundGetName(\Magento\Catalog\Model\Product $subject, callable $proceed){
//
//           echo "before proceed"."</br>";
//           $name=$proceed();
//           echo $name."</br>";
//           echo "after proceed"."</br>";
//           return $name;
//       }





}