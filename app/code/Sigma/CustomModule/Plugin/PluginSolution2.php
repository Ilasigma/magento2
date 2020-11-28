<?php
/**
 * Created by PhpStorm.
 * User: ilavatimakwana
 * Date: 28/11/20
 * Time: 8:03 PM
 */

namespace Sigma\CustomModule\Plugin;


class PluginSolution2
{
    public function beforeExecute(\Sigma\CustomModule\Controller\Page\Helloworld $subject){
        echo "before execute sort order 20"."</br>";
    }

    public function afterExecute(\Sigma\CustomModule\Controller\Page\Helloworld $subject){
        echo "after execute sort order 20"."</br>";
    }

    public function aroundExecute(\Sigma\CustomModule\Controller\Page\Helloworld $subject, callable $proceed){
        echo "before proceed sort order 20"."</br>";
        $proceed();
        echo "after proceed sort order 20"."</br>";
    }

}