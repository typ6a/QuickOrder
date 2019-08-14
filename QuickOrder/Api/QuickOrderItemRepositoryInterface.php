<?php
namespace ALevel\QuickOrder\Api;

use ALevel\QuickOrder\Api\Data\QuickOrderItemInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

interface QuickOrderItemRepositoryInterface 
{
    public function save(QuickOrderItemInterface $page);

    public function getById($id);

    public function getList(SearchCriteriaInterface $criteria);

    public function delete(QuickOrderItemInterface $page);

    public function deleteById($id);
}
