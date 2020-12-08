<?php

namespace Sigma\Contact\Model\ResourceModel;

/**
 * Mycontact resource model
 *
 */
class MyContact extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('sigma_mycontact', 'id');
    }
}
