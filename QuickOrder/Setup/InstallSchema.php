<?php
namespace ALevel\QuickOrder\Setup;
class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{   
    public function install(\Magento\Framework\Setup\SchemaSetupInterface $setup, \Magento\Framework\Setup\ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();
        $table = $installer->getConnection()->newTable(
            $installer->getTable('alevel_quickorder_quickorderitem')
        )
        ->addColumn(
                'quickorderitem_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                [
                  'identity' => true,
                  'nullable' => false,
                  'primary' => true,
                  'unsigned' => true,
                ],
                'Quickorder ID'
        )
        ->addColumn(                
                'name',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                [
                  'nullable' => false,
                ],
                'Name'
        )
        ->addColumn(                
                'email',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                [
                  'nullable' => true,
                ],
                'Email'
        )
        ->addColumn(                
                'phone',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                [
                  'nullable' => false,
                ],
                'Phone'
        )
        ->addColumn(                
                'sku',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                [
                  'nullable' => false,
                ],
                'SKU'
        )
        ->addColumn(                
                'status',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                255,
                [
                  'nullable' => true,
                  'default'  => 'Pending'
                ],
                'Status'
        )
        ->addColumn(
            'url_key',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            [],
            'Quickorder URL Key'
        )
        ->addColumn(
            'created_at',
            \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
            null,
            ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],
            'Created At'
        )
        ->addColumn(
            'updated_at',
            \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
            null,
            ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT_UPDATE],
            'Updated At'
        )
        ->setComment('Quickorder Table');


        $installer->getConnection()->createTable($table);

        // $installer->getConnection()->addIndex(
        //         $installer->getTable('alevel_quicorder_quickorderitem'),
        //         $setup->getIdxName(
        //             $installer->getTable('alevel_quicorder_quickorderitem'),
        //             ['name', 'email', 'phone', 'sku', 'url_key'],
        //             \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
        //         ),
        //         ['name', 'email', 'phone', 'sku', 'url_key'],
        //         \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
        //     );
        //END   table setup
$installer->endSetup();
    }
}
