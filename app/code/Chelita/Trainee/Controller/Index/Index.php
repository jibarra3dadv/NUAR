<?php
namespace Chelita\Trainee\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;
	/*protected $_resultPageFactory;*/
	

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory
		/*\Magento\Framework\View\Result\PageFactory $resultPageFactory*/)
		
	{
		  $this->_pageFactory = $pageFactory;
		/*$this->_resultPageFactory = $resultPageFactory;*/
		return parent::__construct($context);
	}

	
	public function execute()
	{
		
		
		/** @var Page $page */
		
		$page = $this->_pageFactory->create();
		/** @var Template $block */
		$block = $page->getLayout()->getBlock('trainee_index_index');
		$block->setData('custom_parameter', 'Data from the Controller');

		return $page;
		
	
	}
}