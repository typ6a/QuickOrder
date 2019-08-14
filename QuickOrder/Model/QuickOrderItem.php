<?php
namespace ALevel\QuickOrder\Model;
class QuickOrderItem extends \Magento\Framework\Model\AbstractModel implements \ALevel\QuickOrder\Api\Data\QuickOrderItemInterface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'alevel_quickorder_quickorderitem';

    protected function _construct()
    {
        $this->_init('ALevel\QuickOrder\Model\ResourceModel\QuickOrderItem');
        // All you need to know is that _construct will be called whenever a model is instantiated. Every CRUD model in Magento must use the _construct method to call the _init method. The _init method accepts a single string parameter — the name of this model’s resource model.
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
