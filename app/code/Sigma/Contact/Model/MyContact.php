<?php

namespace Sigma\Contact\Model;

class MyContact extends \Magento\Framework\Model\AbstractModel
{  
    
    
    protected function _construct()
    {
        $this->_init(\Sigma\Contact\Model\ResourceModel\MyContact::class);
    }

}
