<?php
namespace ALevel\QuickOrder\Controller\Product;

use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory as ResultJsonFactory;

/**
 * Class Save
 *
 * @package ALevel\QuickOrder\Controller\Product
 */
class Save extends \Magento\Framework\App\Action\Action
{
    /**
     * @var ResultJsonFactory
     */
    private $resultJsonFactory;

    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    private $storeManager;

    /**
     * @var \Magento\Framework\App\State
     */
    private $state;
    /**
     * Save constructor.
     *
     * @param Context $context
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param ResultJsonFactory $resultJsonFactory
     */

    public function __construct(
        Context $context,
        \Magento\Framework\App\State $state,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        ResultJsonFactory $resultJsonFactory,
        \Magento\Framework\Message\ManagerInterface $messageManager,
        \ALevel\QuickOrder\Model\QuickOrderItemFactory $quickOrderFactory
    ) {
        $this->storeManager = $storeManager;
        $this->state = $state;
        $this->resultJsonFactory = $resultJsonFactory;
        parent::__construct($context);
        $this->quickOrderFactory = $quickOrderFactory;

    }

    /**
     * @return $this
     */
    public function execute()
    {
        $data = $this->_getDataJson();
        $resultJson = $this->resultJsonFactory->create();

        return $resultJson->setData($data);
    }

    /**
     * @return string
     */
    private function _getDataJson()
    {
        $data = $this->getRequest()->getParams();
        $storeId = $this->getStoreIdCurrent();
        if ($data) {
            $result = json_encode($data, true);
            $array = [
                'name'          => $data['name'],
                'email'         => $data['mail'],
                'phone'         => $data['phone'],
                'product_sku'   => $data['product_sku'],
                // 'status'        => 'pending',
                // 'created_at'    => ,
                // 'updated_at'    => ,
            ];

            // $model = $this->_objectManager->create('ALevel\QuickOrder\Model\Manager')
            // ->getCollection()->addFieldToFilter('email', $array['email'])
            // ->addFieldToFilter('product_id', $array['product_id'])->getFirstItem();
            // $model->addData($array);
            // $model->save();
        $this->saveData($data);
        $this->messageManager->addSuccess(__($result));
        
        }
        // $result = 'Saved';
        return $data;
    }

    function saveData($data)
    {
        $quickOrder = $this->quickOrderFactory->create();
        $array = [
                'name'          => $data['name'],
                'email'         => $data['mail'],
                'phone'         => $data['phone'],
                'sku'           => $data['product_sku'],
                // 'status'        => 'pending',
                // 'created_at'    => ,
                // 'updated_at'    => ,
            ];

        $quickOrder->setData($array)->save();
        $this->messageManager->addSuccess('data saved');
    }


    /**
     * @return int
     *
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    private function getStoreIdCurrent()
    {
        if ($this->state->getAreaCode() == \Magento\Framework\App\Area::AREA_ADMINHTML) {
            // in admin area
            /** @var \Magento\Framework\App\RequestInterface $request */
            $request = $this->_request;
            $storeId = (int) $request->getParam('store', 0);
        } else {
            // frontend area
            $storeId = true; // get current store from the store resolver
        }

        $store = $this->storeManager->getStore($storeId);
        $websiteId = $store->getWebsiteId();

        return $websiteId;
    }
}
