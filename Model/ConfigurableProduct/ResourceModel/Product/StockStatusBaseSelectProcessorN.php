<?php
namespace Mage4\ShowPriceOSP\Model\ConfigurableProduct\ResourceModel\Product;

use Magento\Framework\DB\Select;
use Magento\ConfigurableProduct\Model\ResourceModel\Product\StockStatusBaseSelectProcessor;

class StockStatusBaseSelectProcessorN extends StockStatusBaseSelectProcessor
{
    public function process(Select $select)
    {
        return $select;
    }
}
