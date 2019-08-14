<?php
namespace ALevel\QuickOrder\Model\ResourceModel\QuickOrderItem;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('ALevel\QuickOrder\Model\QuickOrderItem','ALevel\QuickOrder\Model\ResourceModel\QuickOrderItem');
    }
}
