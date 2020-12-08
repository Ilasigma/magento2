<?php

namespace Sigma\Contact\Controller\Adminhtml\Mycontact;

use Magento\Framework\App\Action\HttpGetActionInterface as HttpGetActionInterface;

class Index extends \Magento\Backend\App\Action implements HttpGetActionInterface
{
     const ADMIN_RESOURCE = 'Sigma_Contact::contact';
	/**
     * Newsletter problems report page
     *
     * @return void
     */
    public function execute()
    {
        if ($this->getRequest()->getQuery('ajax')) {
            $this->_forward('grid');
            return;
        }

        $this->_view->loadLayout();
        $this->_view->getLayout()->getMessagesBlock()->setMessages($this->messageManager->getMessages(true));

        $this->_setActiveMenu('Sigma_Contact::contactlist');
        $this->_view->getPage()->getConfig()->getTitle()->prepend(__('MyContact Page'));
        $this->_addBreadcrumb(__('MyContact Page'), __('MyContact Page'));

        $this->_view->renderLayout();
    }
}
