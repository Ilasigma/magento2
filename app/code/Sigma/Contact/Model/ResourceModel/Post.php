<?php
namespace Sigma\Contact\Model\ResourceModel;
/**
 * Created by PhpStorm.
 * User: ilavatimakwana
 * Date: 2/12/20
 * Time: 6:25 PM
 */
class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context
    )
    {
        parent::__construct($context);
    }

    protected function _construct()
    {
        $this->_init('sigma_mycontact', 'id');
    }

}