<?php
namespace Excellence\Table\Controller\Index;
 
 
class Index extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;       
        return parent::__construct($context);
    }
     
    public function execute()
    {
        return $this->resultPageFactory->create(); 
        $test->setName('Shubham Mathur');
        $test->setEmail('shubham@excellencetechnologies.in');
        $test->save();
        $test->load(1); 
        print_r($test->getData());
    } 
}
