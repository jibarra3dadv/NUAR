<?php
namespace Chelita\Trainee\Block;
class Index extends \Magento\Framework\View\Element\Template
{
	protected $_logger;
	protected $_orderRepository;
	protected $_productRepository;
		
		public function __construct(
			\Magento\Framework\View\Element\Template\Context $context,
		     \Psr\Log\LoggerInterface $logger,
			 \Magento\Sales\Api\OrderRepositoryInterface $orderRepository,
			 \Magento\Catalog\Model\ProductRepository $productRepository,
						array $data = []
		)
		
			{ 
				$this->_productRepository = $productRepository;
				$this->_orderRepository = $orderRepository;
				$this->_logger = $logger;
				parent::__construct($context, $data);
				
				
			}
	
	public function execute()
	{
		
		$order = $this->_orderRepository->get(000000053);
		foreach ($order->getAllItems() as $item) {
            $itemSku = $item->getSku();
			
            $this->_logger->info("-----------");	
			$this->_logger->info($itemSku);	
			

}
		return  $itemSku;
	}
		
		
		public function getProductById($id)
	{
		return $this->_productRepository->getById($id);
	}
	
	public function getProductBySku($sku)
	{
		return $this->_productRepository->get($sku);
	}
		
	


	
}





