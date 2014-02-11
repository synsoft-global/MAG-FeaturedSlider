<?php
class Packt_Featured_Block_Featured extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }


	public function getConfig($att) 
	{
		$config = Mage::getStoreConfig('featured');
		if (isset($config['featured_config']) ) {
			$value = $config['featured_config'][$att];
			return $value;
		} else {
			throw new Exception($att.' value not set');
		}
	}
	
	public function getProducts()
    {
    	$storeId = Mage::app()->getStore()->getId();
    	$this->setIdss($storeId);
		//$catalog = $this->getLayout()->createBlock('catalog/product_list');//->setStoreId($storeId);

		// get all products that are marked as featured
		$collection = Mage::getModel('catalog/product')->getCollection();
		$collection->addFieldToFilter('featured', '1');
		$this->setProductCollection($collection);
    }
}
	
