
<?php
namespace Sigma\Contact\Model\ResourceModel\Post;
/**
 * Created by PhpStorm.
 * User: ilavatimakwana
 * Date: 2/12/20
 * Time: 6:28 PM
 */
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'id';
    protected $_eventPrefix = 'Sigma_Contact_post_collection';
    protected $_eventObject = 'post_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Sigma\Contact\Model\Post', 'Sigma\Contact\Model\ResourceModel\Post');
    }


}