<?php
namespace Excellence\Data\Block;
  
class Main extends \Magento\Framework\View\Element\Template
{   
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context
    )
    {
        parent::__construct($context);
    }
    protected function _prepareLayout()
    {
         print_r('test'); die();
    }
}
