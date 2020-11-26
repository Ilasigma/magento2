<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace FME\Banners\Model\ResourceModel\Banners;

use \FME\Banners\Model\ResourceModel\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'banners_id';

    /**
     * Load data for preview flag
     *
     * @var bool
     */
    protected $_previewFlag;

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('FME\Banners\Model\Banners', 'FME\Banners\Model\ResourceModel\Banners');
        $this->_map['fields']['banners_id'] = 'main_table.banners_id';
    }
}
