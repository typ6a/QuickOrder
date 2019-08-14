<?php

namespace ALevel\QuickOrder\Block\Product;

class ListProduct extends \Magento\Catalog\Block\Product\ProductList\Item\Block
{
    /**
     * @var \Magento\Framework\Url\Helper\Data
     */
    protected $urlHelper;

    /**
     * ListProduct constructor.
     * @param \Magento\Catalog\Block\Product\Context $context
     * @param \Magento\Framework\Url\Helper\Data $urlHelper
     * @param array $data
     */
    public function __construct(
        \Magento\Catalog\Block\Product\Context $context,
        \Magento\Framework\Url\Helper\Data $urlHelper,
        array $data = []
    ) {
        $this->urlHelper = $urlHelper;
        parent::__construct($context, $data);
    }

    public function getProductParams(\Magento\Catalog\Model\Product $product)
    {
        return 
        [
            'id' => $product->getEntityId(),
            'sku' => $product->getSku(),
        ];
    }

    // public function getProductSku(\Magento\Catalog\Model\Product $product)
    // {
    //     return $product->getSku();
    // }

    // public function getProductId(\Magento\Catalog\Model\Product $product)
    // {
    //     return $product->getEntityId();
    // }

     /**
     * @return string
     */
    public function getAjax()
    {
        return $this->getUrl('quickorder/product/save');
    }
}

