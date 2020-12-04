<?php
namespace Sigma\Contact\Model;
/**
 * Created by PhpStorm.
 * User: ilavatimakwana
 * Date: 2/12/20
 * Time: 6:21 PM
 */
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'Sigma_Contact_post';

    protected $_cacheTag = 'Sigma_Contact_post';

    protected $_eventPrefix = 'Sigma_Contact_post';

    protected function _construct()
    {
        $this->_init('Sigma\Contact\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}