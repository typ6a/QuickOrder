<?php
namespace ALevel\QuickOrder\Block;
class Main extends \Magento\Framework\View\Element\Template
{
    protected $quickOrderFactory;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Alevel\QuickOrder\Model\QuickOrderItemFactory $quickOrderFactory
    )
    {
        $this->quickOrderFactory = $quickOrderFactory;
        parent::__construct($context);
    }

    function _prepareLayout()
    {
        $quickOrder = $this->quickOrderFactory->create();

	    // $quickOrder->setData('name','Dmitry')
	    // ->save();
	    // var_dump('Done');
	    // exit;

	    $quickOrder = $quickOrder->load(1);   //id=1     
	    // var_dump($quickOrder);
	    var_dump($quickOrder->getData());
	    var_dump($quickOrder->getName());
	    var_dump($quickOrder->getData('name'));
	    exit;

	    // $collection = $quickOrder->getCollection();
	    // foreach($collection as $item)
	    // {
	    //     var_dump('ID: ' . $item->getId());
	    //     var_dump($item->getData());
	    // }
	    // exit;
    }
}