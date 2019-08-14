<?php
namespace ALevel\QuickOrder\Model\ResourceModel;
class QuickOrderItem extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('alevel_quickorder_quickorderitem','quickorderitem_id');
    }
}
