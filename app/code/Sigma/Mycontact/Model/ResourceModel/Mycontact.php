<?php

namespace Sigma\Mycontact\Model\ResourceModel;

class Mycontact extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
        
        
           
    protected function _construct()
    {
        $this->_init('sigma_mycontacts', 'id');
    }
}
