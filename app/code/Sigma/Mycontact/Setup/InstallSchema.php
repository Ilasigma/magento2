<?php

namespace Sigma\Mycontact\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
        
        
        
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
                
                
        $installer = $setup;
        $installer->startSetup();
                
                
        /**
                        * Create table 'banners'
                */
                
        $table = $installer->getConnection()->newTable($installer->getTable('sigma_mycontacts'))
                                ->addColumn(
                                    'id',
                                    \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                                    null,
                                    ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true],
                                    'ID'
                                )
                                ->addColumn(
                                    'name',
                                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                                    255,
                                    ['nullable' => true, 'default' => null],
                                    'Name'
                                )
                                ->addColumn(
                                    'email',
                                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                                    255,
                                    ['nullable' => true, 'default' => null],
                                    'Email'
                                )
                                ->addColumn(
                                    'company',
                                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                                    255,
                                    ['nullable' => true, 'default' => null],
                                    'Company'
                                )
                                ->addColumn(
                                    'telephone',
                                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                                    255,
                                    ['nullable' => true, 'default' => null],
                                    'Telephone'
                                );
                
                
        $installer->getConnection()->createTable($table);
                
        $installer->endSetup();
    }
}
