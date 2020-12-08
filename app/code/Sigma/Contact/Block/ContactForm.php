<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Sigma\Contact\Block;

use Magento\Framework\View\Element\Template;

/**
 * Main contact form block
 *
 * @api
 * @since 100.0.2
 */
class ContactForm extends Template
{
    protected $_mycontacts;
    /**
     * @param Template\Context $context
     * @param array $data
     */
    public function __construct(Template\Context $context,\Sigma\Contact\Model\PostFactory  $mycontacts, array $data = [])
    {
        parent::__construct($context, $data);
        $this->_isScopePrivate = true;
        $this->_mycontacts = $mycontacts;
    }

    /**
     * Returns action url for contact form
     *
     * @return string
     */
    public function getFormAction()
    {
        return $this->getUrl('mycontact/index/post', ['_secure' => true]);
    }

    public function getMyContacts(){
        $model = $this->_mycontacts->create();        
        $collection = $model->getCollection();
        return $collection;
    }
}
